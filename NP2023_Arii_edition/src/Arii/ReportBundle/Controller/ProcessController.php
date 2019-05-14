<?php

namespace Arii\ReportBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ProcessController extends Controller
{
    public function indexAction()
    {
        return $this->render('AriiReportBundle:Process:index.html.twig' );
    }
    
    public function treeAction($path='report')
    {        
        $session = $this->container->get('arii_core.session');
        $engine = $session->getSpoolerByName('arii');
        
        
        # On retrouve le chemin des rapports
        $path = $engine[0]['shell']['data'].'/config/live/Arii/Reports';

        $response = new Response();
        $response->headers->set('Content-Type', 'text/xml');
        $xml = "<?xml version='1.0' encoding='utf-8'?>";                
        $xml .= '<tree id="0">';        
        $xml .= $this->TreeXML($path,'');
        $xml .= '</tree>';        
        $response->setContent($xml);
        return $response;
    }

    public function TreeXML($basedir,$dir ) {
        $xml ='';
        if ($dh = @opendir($basedir.'/'.$dir)) {
            $Dir = array();
            $Files = array();
            while (($file = readdir($dh)) !== false) {
                $sub = $basedir.'/'.$dir.'/'.$file;
                if (($file != '.') and ($file != '..')) {
                    if (is_dir($sub)) {
                        array_push($Dir, $file );
                    }
                    else {
                        array_push($Files, $file );                
                    }
                }
            }
            closedir($dh);
            
            sort($Files);
            foreach ($Files as $file) {
                // on ne s'intéresse qu'aux ordres
                if (substr($file,-10)=='.order.xml') {
                    $f = substr($file,0,strlen($file)-10);
                    $xml .= '<item id="'.utf8_encode("$basedir/$dir/$file").'" text="'.utf8_encode($f).'" im0="order.png"/>';
                }
            }

            sort($Dir);
            foreach ($Dir as $file) {
                $xml .= '<item id="'.utf8_encode("$dir/$file/").'" text="'.utf8_encode($file).'" im0="folder.gif">';
                $xml .= $this->TreeXML($basedir,"$dir/$file");
                $xml .= '</item>';
            }
            
        }
        else {
            exit();
        }
        return $xml;
    }

    public function ordersAction()
    {
        $session = $this->container->get('arii_core.session');
        $engine = $session->setDatabaseByName('arii');
        
        $request = Request::createFromGlobals();
        $id = $request->query->get( 'id' );
        
        $dhtmlx = $this->container->get('arii_core.dhtmlx');
                
        $data = $dhtmlx->Connector('grid');
        $sql = $this->container->get('arii_core.sql');
        
        $Fields = array( 'JOB_CHAIN' => 'Arii/Reports/%' );
        
        $qry =  $sql->Select(array('HISTORY_ID','ORDER_ID','JOB_CHAIN','TITLE','STATE','START_TIME','END_TIME'))
                .$sql->From(array('SCHEDULER_ORDER_HISTORY'))
                .$sql->Where($Fields)
                .$sql->OrderBy(array('HISTORY_ID desc'));

        $data->event->attach("beforeRender",array($this,"setStatus"));
        $data->render_sql($qry,"HISTORY_ID","ORDER_ID,JOB_CHAIN,TITLE,STATE,END_TIME,DURATION");
    }
    
    public function setStatus($row)
    {
        $start = strtotime($row->get_value("START_TIME"));
	$end = $row->get_value("END_TIME");
	$row->set_value("DURATION",strtotime($end)-$start );
        
        if ($row->get_value('END_TIME')=='') {
            $row->set_row_color("#ffffcc");
        }
        elseif ($row->get_value('STATE')=='SUCCESS') {
            $row->set_row_color("#ccebc5");
        }
        else {
            $row->set_row_color("#fbb4ae");
        }
    }
    
}
