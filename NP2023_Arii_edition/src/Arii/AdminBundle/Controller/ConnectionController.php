<?php

namespace Arii\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class ConnectionController extends Controller
{
   public function indexAction()
    {
        return $this->render('AriiAdminBundle:Connection:index.html.twig');
    }

    public function toolbarAction()
    {
        $response = new Response();
        $response->headers->set('Content-Type', 'text/xml');
        return $this->render('AriiAdminBundle:Connection:toolbar.xml.twig', array(), $response);
    }

     public function formAction()
    {
        // $session = $this->container->get('arii_core.session');
        // $enterprise = $session->getEnterpriseId();

        $db = $this->container->get("arii_core.db");
        $data = $db->Connector("form");
        
        # Tableau des connections
        $sql = $this->container->get("arii_core.sql");
        $qry = $sql->Select(array("id","CATEGORY_ID","TITLE","DESCRIPTION","HOST","INTERFACE","PORT","LOGIN","PROTOCOL","ENV")) 
                .$sql->From(array("ARII_CONNECTION"))
//                WHERE c.enterprise_id=$enterprise
                .$sql->OrderBy(array("TITLE"));
        $data->render_sql($qry,"id","id,TITLE,CATEGORY_ID,DESCRIPTION,HOST,INTERFACE,PORT,PROTOCOL,LOGIN,ENV");
    }
   
    public function saveAction()
    {
        $request = Request::createFromGlobals();
        $id = $request->get('id');
        
        $category_id = $request->get('CATEGORY_ID');        
        $network_id = $request->get('category_'.$category_id);
        
        $connection = new \Arii\CoreBundle\Entity\Connection();
        if( $id != "" )
            $connection = $this->getDoctrine()->getRepository("AriiCoreBundle:Connection")->find($id);
                    
        if ( $network_id != "" )
        {
            $network = $this->getDoctrine()->getRepository("AriiCoreBundle:Network")->find($network_id);
            $connection->setNetwork($network);
        }
        
        if ($category_id != "")
        {
            $db = $this->getDoctrine()->getRepository("AriiCoreBundle:Category")->find($category_id);
            if (!$db) 
                print "((CATEGORY $category_id ?))";
            $connection->setCategory($db);            
        }
        
        $connection->setTitle($request->get('TITLE'));
        $connection->setDescription($request->get('DESCRIPTION'));
        $connection->setHost($request->get('HOST'));
        
        $connection->setPort($request->get('PORT'));
        $connection->setLogin($request->get('LOGIN'));
        $connection->setPassword($request->get('PASSWORD'));
        $connection->setVendor($request->get('VENDOR'));
        
        $em = $this->getDoctrine()->getManager();
        $em->persist($connection);
        $em->flush();
        
        return new Response("success");
    }

    public function form_structureAction()
    {
       $db = $this->container->get("arii_core.db");
        $data = $db->Connector("data");
        $qry = "SELECT n.id as network_id, cat.id as category_id, cat.name as category,n.description as type,n.protocol,n.form 
                FROM ARII_CATEGORY cat
                LEFT JOIN ARII_NETWORK n
                ON cat.id=n.category_id
                ORDER BY cat.name, n.description";
        
        $res = $data->sql->query( $qry );
        $form = '';
        # on cree l'arborescence
        $Cat = array();$last='';
        while ($line = $data->sql->get_next($res)) {
            $cat_id   = $line['category_id'];
            $net_id   = $line['network_id'];
            $cat      = $line['category'];
            $type     = $line['type'];
            $protocol = $line['protocol'];
            $form     = $line['form'];
            $infos = "$net_id;$type;$protocol|$form";
            if ($cat!=$last) {
                //array_push($Cat,$cat);
                $Cat[$cat]['value']= $cat_id;
                $Cat[$cat]['label']= $cat;
                $Cat[$cat]['infos']=array();
            }
            array_push($Cat[$cat]['infos'],$infos);
            $last = $cat;
        }

        # Desssin
        $n=0;
        $Form = array();
        
        foreach ($Cat as $c) {

            $Items = array();
            foreach ($c['infos'] as $i) {
                list($label,$form) = explode('|',$i);
                list($net_id,$type,$protocol) = explode(';',$label);
                $item = "\n".'  {  text: "'.$type.'",value: "'.$net_id.'", list: [ ';
                $item .= "\n".'    { type: "hidden", name: "protocol_'.$net_id.'", value: "'.$protocol.'" }'; 
                $item .= "\n".'    ,{ type: "input", name: "ip_'.$net_id.'", value: "", label: "'.$this->get('translator')->trans('ip_address').'" }'; 
                foreach (explode(';',$form) as $f) {
                    # cas particulier
                        if (($p=strpos($f,'='))>0) {
                            $var = substr($f,0,$p);
                            $val = substr($f,$p+1);
                        }
                        else {
                            $var = $f;
                            $val = '';
                        }
                        $item .= $this->FormItem($net_id,$var,$val); 
                }
                $item .= "\n".'    ] }';
                array_push($Items, $item);
            }
            array_push($Form, '{ text: "'.$this->get('translator')->trans($c['label']).'", value: "'.$c['value'].'", '."\n".'  list: [ {  type: "select", 
     name: "category_'.$c['value'].'", label: "Type", options: [ '.implode(",\n",$Items).'] } ] }');
            
        }
        
        return new Response(implode(",\n",$Form));
        print "<pre>";
        print(implode(",\n",$Form));
        print "</pre>";
        exit();  
    }
    
    private function FormItem($id,$name,$val='') {
        $form='';
        # Le specifique
        if ($name == 'publickey') {
            $form .=  "\n".'       ,{ inputWidth: 300, type: "checkbox", label: "'.$this->get('translator')->trans('login').'", name: "'.$name.'_'.$id.'", value: "'.$val.'", list: [ ';                    
            $name = 'login'; $val = '';
            $form .= "\n".'       { inputWidth: 200, type: "password", label: "'.$this->get('translator')->trans($name).'", name: "'.$name.'_'.$id.'", value: "'.$val.'" },';                    
            $name = 'password'; $val = '';
            $form .= "\n".'       { inputWidth: 200, type: "password", label: "'.$this->get('translator')->trans($name).'", name: "'.$name.'_'.$id.'", value: "'.$val.'" }';                    
            $form .=  "\n".'      ] }';
        }
        elseif ($name == 'login') {
            $form .= ', { inputWidth: 350, type: "fieldset", label: "Authentication", list: [ ';
            $form .=  "\n".'       { inputWidth: 200, type: "input", label: "'.$this->get('translator')->trans($name).'", name: "'.$name.'_'.$id.'", value: "'.$val.'" }';                    
            $name = 'password'; $val = '';
            $form .= "\n".'       ,{ inputWidth: 200, type: "password", label: "'.$this->get('translator')->trans($name).'", name: "'.$name.'_'.$id.'", value: "'.$val.'" }';                    
            $form .= '] }';
        }
        elseif ($name == 'proxy') {
            $form .= ', { inputWidth: 350, type: "fieldset", label: "Proxy", list: [ ';
//            $form .= "\n".'       ,{ type: "checkbox", label: "'.$this->get('translator')->trans($name).'", name: "'.$id.'_'.$name.'", value: "'.$val.'" ';
//            $form .= '}';                    
            $form .= '] }';
        }
        else {
           $form .= "\n".'       ,{ inputWidth: 300, type: "input", label: "'.$this->get('translator')->trans($name).'", name: "'.$name.'_'.$id.'", value: "'.$val.'" }';                    
        }
        return $form;
    }
}
