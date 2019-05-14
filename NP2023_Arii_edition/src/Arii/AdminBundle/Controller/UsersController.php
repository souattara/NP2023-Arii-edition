<?php

namespace Arii\AdminBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Arii\CoreBundle\Entity\TeamFilter;

class UsersController extends Controller {
    
    public function indexAction()
    {
        return $this->render('AriiAdminBundle:Users:index.html.twig');
    }
    
    public function menuAction()
    {
        $response = new Response();
        $response->headers->set('Content-Type', 'text/xml');
        return $this->render("AriiAdminBundle:Users:menu.xml.twig", array(), $response);
    }
    
    public function toolbarAction()
    {
        $response = new Response();
        $response->headers->set('Content-Type', 'text/xml');
        return $this->render("AriiAdminBundle:Users:toolbar.xml.twig", array(), $response);
    }

    public function gridAction()
    {
        $session = $this->container->get('arii_core.session');

        $sql = $this->container->get('arii_core.sql');
        $qry = $sql->Select(array(
                    't.NAME as TEAM',
                    'u.ID','USERNAME','EMAIL','ENABLED','LAST_LOGIN','ROLES','LAST_NAME','FIRST_NAME'))
                .$sql->From(array('ARII_USER u'))
                .$sql->LeftJoin('ARII_TEAM t',array('u.TEAM_ID','t.ID'))
                .$sql->GroupBy(array('USERNAME'));
        
        $db = $this->container->get('arii_core.db');
        $data = $db->Connector('grid');
        $data->event->attach("beforeRender",array($this,"user_render"));
        $data->render_sql($qry,"ID","USERNAME,NAME,EMAIL,TEAM,ROLE,LAST_LOGIN,ENABLED");
    }

    function user_render ($data){
        $data->set_value( 'NAME', $data->get_value('LAST_NAME').' '.$data->get_value('FIRST_NAME') );
        $roles =  $data->get_value('ROLES');
        if (($b = strpos($roles,'"'))>0) {
            $b += 1;
            $e = strpos($roles,'"',$b);
            $data->set_value('ROLE',str_replace('ROLE_','',substr($roles,$b,$e-$b)));
        }
        else {
            $data->set_value('ROLE','');
        }
    }
    
}
?>
