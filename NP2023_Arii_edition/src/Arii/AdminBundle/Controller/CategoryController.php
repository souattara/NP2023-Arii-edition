<?php

namespace Arii\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class CategoryController extends Controller
{
   public function indexAction()
    {
        return $this->render('AriiAdminBundle:Category:index.html.twig');
    }

    public function toolbarAction()
    {
        $response = new Response();
        $response->headers->set('Content-Type', 'text/xml');
        return $this->render('AriiAdminBundle:Category:toolbar.xml.twig', array(), $response);
    }

     public function formAction()
    {
        $db = $this->container->get("arii_core.db");
        $data = $db->Connector("form");
        
        # Tableau des connections
        $sql = $this->container->get("arii_core.sql");
        $qry = $sql->Select(array("id","NAME","DESCRIPTION","CATEGORY_ID")) 
                .$sql->From(array("ARII_CATEGORY"))
                .$sql->OrderBy(array("NAME"));
        $data->render_sql($qry,"id","id,NAME,DESCRIPTION,CATEGORY_ID");
    }

    public function saveAction()
    {
        $request = Request::createFromGlobals();
        $id = $request->get('id');
        
        $category_id = $request->get('CATEGORY_ID');        
        $category = new \Arii\CoreBundle\Entity\Category();
        if( $id != "" )
        {
            $category = $this->getDoctrine()->getRepository("AriiCoreBundle:Category")->find($id);
        }

        $category->setName($request->get('NAME'));
        $category->setDescription($request->get('DESCRIPTION'));

        if ($category_id != "") 
        {
            $db = $this->getDoctrine()->getRepository("AriiCoreBundle:Category")->find($category_id);
            $category->setCategory($db);            
        }
        
        $em = $this->getDoctrine()->getManager();
        $em->persist($category);
        $em->flush();
        
        return new Response("success");
    }
    
    public function deleteAction()
    {
        $request = Request::createFromGlobals();
        $id = $request->get('id');
        
        if( $id == "" ) return new Response("?!");
        
        $category = $this->getDoctrine()->getRepository("AriiCoreBundle:Category")->find($id);
        
        $em = $this->getDoctrine()->getManager();
         $em->remove($category);
        $em->flush();
        
        return new Response("success");
    }
 
    // Juste la catégorie pour le drag and drop
    public function dragdropAction()
    {
        $request = Request::createFromGlobals();
        $id = $request->get('id');
        if ($id=="") return new Response("id $id ?");
        
        $category_id = $request->get('category_id');
        if ($category_id=="") return new Response("category $category_id ?");
        
        $category = $this->getDoctrine()->getRepository("AriiCoreBundle:Category")->find($id);
        $db = $this->getDoctrine()->getRepository("AriiCoreBundle:Category")->find($category_id);
        $category->setCategory($db);            

        $em = $this->getDoctrine()->getManager();
        $em->persist($category);
        $em->flush();
        
        return new Response("success");
    }

}
