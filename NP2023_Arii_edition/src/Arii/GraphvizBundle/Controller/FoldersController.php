<?php

namespace Arii\GraphvizBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class FoldersController extends Controller
{
    public function __construct() {
    }
    
    public function treeAction($path='live')
    {
        $session = $this->container->get('arii_core.session');
        $engine = $session->getSpoolerByName('arii');
        if (isset($engine[0]['shell']['data']))
            $config = $engine[0]['shell']['data'].'/config';        
        else 
            exit();
        
        $tools = $this->container->get('arii_core.tools');
        
        $request = Request::createFromGlobals();
        if ($request->get('path') != '') {
            $path = str_replace(':','#', $request->get('path'));            
        }

        $folder = $this->container->get('arii_core.folder');

        $xml = "<?xml version='1.0' encoding='utf-8'?>";                
        $xml .= '<tree id="0">';        
        $xml .= $folder->TreeXML( str_replace('\\','/',$config), $path );
        $xml .= '</tree>';
        $response = new Response();
        $response->headers->set('Content-Type', 'text/xml');
        $response->setContent($xml);
        return $response;
    }

    public function testAction()
    {
        $tools = $this->container->get('arii_core.tools');
        $directory =  $this->container->getParameter('osjs_config');

        header('Content-type: text/xml');
        print "<?xml version='1.0' encoding='utf-8'?>";
        print '<tree id="0">';
        if ($dh = opendir($directory)) {
            while (($file = readdir($dh)) !== false) {
                if (($file != '.') && ($file != '..')) {
                    $this->Tree_dir( $directory, $file, 1 );
                    print $file;
                    
                }
            }
        }
        closedir($dh);
        print '</tree>';
        exit();
    }

    
    public function logsAction()
    {
        $tools = $this->container->get('arii_core.tools');
        $directory = $tools->GetSpoolersPath();
        
        $xml = "<?xml version='1.0' encoding='utf-8'?>";
        $xml .= '<tree id="0">';
        if ($dh = @opendir($directory)) {
            while (($spooler = readdir($dh)) !== false) {
                if (($spooler != '.') && ($spooler != '..')) {
                    $xml .= $this->Tree_dir( $directory.'/'.$spooler,'logs', 1, $spooler );
                }
            }
        }
        $xml .= '</tree>';
        $response = new Response();
        $response->headers->set('Content-Type', 'text/xml');
        $response->setContent($xml);
        return $response;
    }
    
}
