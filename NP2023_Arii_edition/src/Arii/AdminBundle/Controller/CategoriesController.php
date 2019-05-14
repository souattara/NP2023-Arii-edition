<?php

namespace Arii\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class CategoriesController extends Controller
{
   public function indexAction()
    {
        return $this->render('AriiAdminBundle:Categories:index.html.twig');
    }
    
    public function menuAction()
    {
        $response = new Response();
        $response->headers->set('Content-Type', 'text/xml');
        return $this->render("AriiAdminBundle:Categories:menu.xml.twig", array(), $response );
    }

    public function categoriesAction()
    {
        $db = $this->container->get("arii_core.db");
        $data = $db->Connector("tree");
        
        # Tableau des connections
        $sql = $this->container->get("arii_core.sql");
        $data->sort("NAME");
        
        $data->render_table("ARII_CATEGORY","ID","NAME","","CATEGORY_ID");
    }
    
    public function treeAction()
    {
        $db = $this->container->get("arii_core.db");
        $data = $db->Connector("tree");
        
        # Tableau des connections
        $sql = $this->container->get("arii_core.sql");
        $data->sort("NAME");
        
        $data->render_table("ARII_CATEGORY","ID","NAME","","CATEGORY_ID");
    }

    public function selectAction()
    {
        $sql = $this->container->get("arii_core.sql");
        $qry = $sql->Select(array("ID","NAME","CATEGORY_ID"))
               .$sql->From(array("ARII_CATEGORY"))
               .$sql->OrderBy(array("NAME")); 
        
        $db = $this->container->get('arii_core.db');
        $data = $db->Connector('data');
        $res = $data->sql->query($qry);
        $Cat = array();
        $Label = array( 0 => '' );
        while ($line = $data->sql->get_next($res)) {
            $id = $line['ID'];
            $name = $line['NAME'];
            $category = $line['CATEGORY_ID'];
            if ($category=="") $category=0;
            $Cat[$id] = $category;
            $Label[$id] = $name;     
        }

        $List = array();
        foreach ($Label as $k=>$v) {
            $label = $v;
            $cat = $k;
            while (isset($Cat[$cat])) {
                $c = $Cat[$cat];
                $label = $Label[$c]."/$label";
                $cat = $c;
            }
            $List[$k] = $label;
        }
        ksort($List);

        $response = new Response();
        $response->headers->set('Content-Type', 'text/xml');
        $list = '<?xml version="1.0" encoding="UTF-8"?>';
        $list .= "<data>";
        foreach ($List as $k=>$v) {
            $list .= '<item value="'.$k.'" label="'.$v.'"/>';
        }
        $list .= "</data>";
        $response->setContent( $list );
        return $response;             
    }
    
    public function selectSIMPLEAction()
    {
        $sql = $this->container->get("arii_core.sql");
        $qry = $sql->Select(array("ID","NAME"))
               .$sql->From(array("ARII_CATEGORY"))
               .$sql->OrderBy(array("NAME")); 
        
        $db = $this->container->get('arii_core.db');
        $select = $db->Connector('select');       
        $select->render_sql($qry,"ID","ID,NAME");
    }
    
    public function gridAction()
    {
        // $session = $this->container->get('arii_core.session');
        // $enterprise = $session->getEnterpriseId();
        $db = $this->container->get("arii_core.db");
        $data = $db->Connector("grid");
        
        # Tableau des connections
        $sql = $this->container->get("arii_core.sql");
        $qry = $sql->Select(array("ID","TITLE","DESCRIPTION","HOST","INTERFACE","PORT","LOGIN","PROTOCOL","ENV")) 
                .$sql->From(array("ARII_CONNECTION"))
//                WHERE c.enterprise_id=$enterprise
                .$sql->OrderBy(array("TITLE"));
        $data->render_sql($qry,"ID","TITLE,DESCRIPTION,HOST,INTERFACE,PORT,PROTOCOL,LOGIN,ENV");
    }

}
