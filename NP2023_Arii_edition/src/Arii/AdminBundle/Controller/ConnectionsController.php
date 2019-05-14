<?php

namespace Arii\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class ConnectionsController extends Controller
{
   public function indexAction()
    {
        return $this->render('AriiAdminBundle:Connections:index.html.twig');
    }
    
    public function menuAction()
    {
        $response = new Response();
        $response->headers->set('Content-Type', 'text/xml');
        return $this->render("AriiAdminBundle:Connections:menu.xml.twig", array(), $response );
    }
    
    public function gridSIMPLEAction()
    {
        // $session = $this->container->get('arii_core.session');
        // $enterprise = $session->getEnterpriseId();
        $request = Request::createFromGlobals();
        $category_id = $request->get('category');

        $db = $this->container->get("arii_core.db");
        $data = $db->Connector("grid");
        
        # Tableau des connections
        $sql = $this->container->get("arii_core.sql");
/*
        $qry = $sql->Select(array("ID","TITLE","DESCRIPTION","HOST","INTERFACE","PORT","LOGIN","PROTOCOL","ENV")) 
                .$sql->From(array("ARII_CONNECTION"))
//                WHERE c.enterprise_id=$enterprise
                .$sql->OrderBy(array("TITLE"));
*/
        $data->sort("TITLE" );        
        if ($category_id>0) {
            $data->filter("CATEGORY_ID", $category_id );
        }
        $data->render_table("ARII_CONNECTION","ID","TITLE,DESCRIPTION,HOST,INTERFACE,PORT,PROTOCOL,LOGIN,ENV,CATEGORY_ID");
    }

    public function gridAction()
    {
        // $session = $this->container->get('arii_core.session');
        // $enterprise = $session->getEnterpriseId();
        $request = Request::createFromGlobals();
        $category_id = $request->get('category');

        $db = $this->container->get("arii_core.db");
        $data = $db->Connector("grid");
        
        # Tableau des connections
        $sql = $this->container->get("arii_core.sql");
        $qry = $sql->Select(
                    array(  "c.ID","c.TITLE","c.DESCRIPTION","c.HOST","c.INTERFACE","c.PORT","c.LOGIN","c.PROTOCOL","c.ENV",
                            "cat.NAME as CATEGORY")) 
                .$sql->From(array("ARII_CONNECTION c"))
                .$sql->LeftJoin("ARII_CATEGORY cat",array("c.CATEGORY_ID","cat.ID"))
                .$sql->OrderBy(array("c.TITLE"));
        
        $data->render_sql($qry,"ID","CATEGORY,TITLE,DESCRIPTION,HOST,INTERFACE,PORT,PROTOCOL,LOGIN,ENV,CATEGORY_ID");
    }
    
}
