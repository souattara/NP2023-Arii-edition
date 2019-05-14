<?php

namespace Arii\DSBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Yaml\Parser;

class DefaultController extends Controller
{

    public function ribbonAction()
    {
        // On recupère les requetes
        $yaml = new Parser();
        $lang = $this->get('request_stack')->getCurrentRequest()->getLocale();
        $basedir = '../src/Arii/DSBundle/Resources/views/Requests/'.$lang;
        $Requests = array();
        if ($dh = @opendir($basedir)) {
            while (($file = readdir($dh)) !== false) {
                if (substr($file,-4) == '.yml') {
                    $content = file_get_contents("$basedir/$file");
                    $v = $yaml->parse($content);
                    $v['id']=substr($file,0,strlen($file)-4);
                    if (!isset($v['icon'])) $v['icon']='cross';
                    if (!isset($v['title'])) $v['title']='?';
                    array_push($Requests, $v);
                }
            }
        }
        
        // On recupere la liste des base de données
        // si il y en a plus d'une, pour ats, on cree une liste de choix
        $session = $this->container->get('arii_core.session');
        $Databases = array();
        $n=0;
        foreach ($session->getDatabases() as $d) {
            $n++;
            if ($d['type']!='osjs') continue;
            $d['id'] = "DB$n";
            array_push($Databases,$d);
        }
        
        // Est ce que la database par defaut est en osjs
        $database = $session->getDatabase();
        if ($database['type']!='osjs')
            $session->setDatabase($Databases[0]);

        $response = new Response();
        $response->headers->set('Content-Type', 'application/json; charset=utf-8');
        
        return $this->render('AriiDSBundle:Default:ribbon.json.twig',array('Databases' => $Databases, 'Requests' => $Requests ), $response );
    }

    public function readmeAction()
    {
        return $this->render('AriiDSBundle:Default:readme.html.twig');
    }

}
