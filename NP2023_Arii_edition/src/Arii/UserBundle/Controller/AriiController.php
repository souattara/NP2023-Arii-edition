<?php

namespace Arii\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class AriiController extends Controller
{
    public function loginAction()
    {
        $response = new Response();
        $response->headers->set('Content-Type', 'application/json');        
        return $this->render('AriiUserBundle:Security:login.json.twig',array(), $response );
    }  
    
    public function menuAction()
    {
        $request = $this->container->get('request_stack')->getCurrentRequest();
        $route = $request->get('route');
                
        $locale =  $this->get('request_stack')->getCurrentRequest()->getLocale();
        foreach (array('en','fr') as $l ) {
            if ($l == $locale) continue;            
            $lang[$l]['string'] = $this->get('translator')->trans("lang.$l");     
            $lang[$l]['url'] = $this->generateUrl($route,array('_locale' => $l)); 
        }
                        
        $response = new Response();
        $response->headers->set('Content-Type', 'text/xml');        
        return $this->render('AriiUserBundle:Security:menu.xml.twig',array( 'LANG' => $lang ), $response );
    }  
    
    public function toolbarAction()
    {
        $request = $this->container->get('request_stack')->getCurrentRequest();
        $route = $request->get('route');
                
        $locale =  $this->get('request_stack')->getCurrentRequest()->getLocale();
        foreach (array('en','fr') as $l ) {
            if ($l == $locale) continue;            
            $lang[$l]['string'] = $this->get('translator')->trans("lang.$l");     
            $lang[$l]['url'] = $this->generateUrl($route,array('_locale' => $l)); 
        }
                        
        $response = new Response();
        $response->headers->set('Content-Type', 'text/xml');        
        return $this->render('AriiUserBundle:Security:toolbar.xml.twig',array( 'LANG' => $lang ), $response );
    }  

    public function ribbonAction()
    {
        $response = new Response();
        $response->headers->set('Content-Type', 'application/json');
        
        return $this->render('AriiUserBundle:Security:ribbon.json.twig',array(), $response );
    }

}
