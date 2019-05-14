<?php

namespace Arii\JIDBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ProcessesController extends Controller
{
    protected $images;
    protected $Done;
    
    public function __construct( )
    {
          $request = Request::createFromGlobals();
          $this->images = $request->getUriForPath('/../arii/images/wa');
    }

    public function indexAction()
    {
        return $this->render('AriiJIDBundle:Processes:index.html.twig');
    }

    public function treeAction() {
        // en attendant le cache
        $request = Request::createFromGlobals();
        $stopped = $request->get('stopped');
        
        $folder = 'live';
        // $this->syncAction($folder);
        $dhtmlx = $this->container->get('arii_core.dhtmlx');
        $data = $dhtmlx->Connector('data');
   /* On prend l'historique */
        $Fields = array (
           '{spooler}'    => 'SPOOLER_ID', 
            '{job_chain}'   => 'JOB_CHAIN',
            '{start_time}' => 'START_TIME',
            'ORDER_ID'   => '%.%' );

        $sql = $this->container->get('arii_core.sql');
        $tools = $this->container->get('arii_core.tools');

        $qry = $sql->Select(array('ORDER_ID','HISTORY_ID','SPOOLER_ID','JOB_CHAIN','START_TIME','END_TIME','STATE' ))
                .$sql->From(array('SCHEDULER_ORDER_HISTORY'))
                .$sql->Where($Fields)
                .$sql->OrderBy(array('SPOOLER_ID','JOB_CHAIN','START_TIME desc'));  
   
        $res = $data->sql->query( $qry );
        $Chains = $Orders = array();
        
        while ( $line = $data->sql->get_next($res) ) {

            $id  =  $line['HISTORY_ID'];
            // La chaine est le prefix de l'ordre
            list($job_chain,$order) = explode('.',$line['ORDER_ID']);
            $chain = "/".$line['SPOOLER_ID'].'/'.dirname($line['JOB_CHAIN']).'/'.$job_chain;
            
            $dir = $chain.'/'.$order;
            
            if (!isset($Chains[$chain])) {
                $key_files[$chain] = $chain;
                $Chains[$chain]=1; 
            }
            
            if (isset($Orders[$dir])) continue;
            $Orders[$dir] = $line; 
            
            // On ccompte les erreurs
            $key_files[$dir] = $dir;
        }

        // Prend on en compte les suspended ?
            $Fields = array (
                '{spooler}'    => 'SPOOLER_ID', 
                '{job_chain}'   => 'PATH',
                'STOPPED'   => 1 );
            $qry = $sql->Select(array('SPOOLER_ID','PATH' ))
                    .$sql->From(array('SCHEDULER_JOB_CHAINS'))
                    .$sql->Where($Fields);  

              $res = $data->sql->query( $qry );
              while ( $line = $data->sql->get_next($res) ) {
                $dir = '/'.$line['SPOOLER_ID'].'/'.$line['PATH'];
                $Chains[$dir]='STOPPED';
            }
        
        $tools = $this->container->get('arii_core.tools');
        $tree = $tools->explodeTree($key_files, "/");
        
        $response = new Response();
        $response->headers->set('Content-Type', 'text/xml');
        $list = '<?xml version="1.0" encoding="UTF-8"?>';
        $list .= "<tree id='0'>\n";
        
        $list .= $this->Folder2XML( $tree, '', $Chains, $Orders );
        $list .= "</tree>\n";
        $response->setContent( $list );
        return $response;
    }
 
   function Folder2XML( $leaf, $id = '', $Chains, $Orders ) {
            $return = '';
            if (is_array($leaf)) {
                    foreach (array_keys($leaf) as $k) {
                            $Ids = explode('/',$k);
                            $here = array_pop($Ids);
                            $i  = "$id/$k";
                            # On ne prend que l'historique
                            // Chains ?
                            if (isset($Chains[$i])) {
                                if ($Chains[$i]=='STOPPED')
                                    $return .= '<item style="background-color: red;" id="'.$i.'" text="'.basename($i).'" im1="job_chain.png" im0="job_chain.png"  open="1">';
                                else 
                                    $return .= '<item id="'.$i.'" text="'.basename($i).'" im1="job_chain.png" im0="job_chain.png"  open="1">';
                                    
                            }
                            elseif (isset($Orders[$i])) {
                                $detail = ' ('.$Orders[$i]['STATE'].')';
                                if (substr($Orders[$i]['STATE'],0,1)=='!') {
                                    $style =  ' style="background-color: red;"';
                                }
                                else {
                                    // Statut
                                    switch ($Orders[$i]['STATE']) {
                                        case 'SUCCESS':
                                            $style =  ' style="background-color: #ccebc5;"';
                                            break;
                                        case 'FAILURE':
                                            $style =  ' style="background-color: #fbb4ae;"';
                                            break;
                                        default:
                                            $style = '';
                                            break;
                                    }
                                    $detail = '';
                                }
                                $return .= '<item'.$style.' id="O:'.$Orders[$i]['HISTORY_ID'].'" text="'.basename($i).$detail.'" im0="order.png">';
                            }
                            elseif ($id == '' ) {                                
                                $return .= '<item id="'.$i.'" text="'.$id.basename($i).'" im0="cog.png" im1="cog.png"  open="1">';
                            }
                            else {
                                $return .=  '<item id="'.$i.'" text="'.basename($i).'" im0="folderClosed.gif">';
                            }
                           $return .= $this->Folder2XML( $leaf[$k], $id.'/'.$k, $Chains, $Orders);
                           $return .= '</item>';
                    }
            }
            return $return;
    }

    // version synthetique
    public function stepsAction()
    {
        $request = Request::createFromGlobals();
        $id = $request->get('id');
        
        $dhtmlx = $this->container->get('arii_core.dhtmlx');
        $sql = $this->container->get('arii_core.sql');                  
        $date = $this->container->get('arii_core.date');        
        
        $data = $dhtmlx->Connector('data');        

        // On recupere le contexte
        $qry = $sql->Select(array(  'ORDER_ID' ))
                .$sql->From(array('SCHEDULER_ORDER_HISTORY'))
                .$sql->Where(array( 'HISTORY_ID' => $id ));
        $res = $data->sql->query( $qry );
        $State = array();
        if ($line = $data->sql->get_next($res)) {
            $order_id = $line['ORDER_ID'];
        }
        else {
            // l'ordre a disparu ?!
            exit();
        }
        
        $qry = $sql->Select(array(  'soh.SPOOLER_ID','soh.JOB_CHAIN',
                                    'sosh.HISTORY_ID','sosh.STEP','sosh.TASK_ID','sosh.STATE','sosh.START_TIME','sosh.END_TIME','sosh.ERROR','sosh.ERROR_CODE','sosh.ERROR_TEXT'))
                .$sql->From(array('SCHEDULER_ORDER_STEP_HISTORY sosh'))
                .$sql->LeftJoin('SCHEDULER_ORDER_HISTORY soh',array('sosh.HISTORY_ID','soh.HISTORY_ID'))
                .$sql->Where(array( 'soh.HISTORY_ID>=' => $id,  'soh.ORDER_ID' => $order_id  ));
        
        $res = $data->sql->query( $qry );
        $State = array();
        while ($line = $data->sql->get_next($res)) {
            $scheduler_id = $line['SPOOLER_ID'];
            $job_chain = $line['JOB_CHAIN'];
            $chain_id = $scheduler_id.'/'.$line['JOB_CHAIN'];
            $state_id = $chain_id.'/'.$line['STATE'];
            
            $State[$state_id] = $line;
            $State[$state_id]['JOB_CHAIN'] =  basename($job_chain);
            $State[$state_id]['ACTION'] = '';
        }
        
        // Etat des noeuds
        $qry =  $sql->Select(array('SPOOLER_ID','JOB_CHAIN','ORDER_STATE','ACTION'))
                .$sql->From(array('SCHEDULER_JOB_CHAIN_NODES')) 
                .$sql->Where(array('SPOOLER_ID' => $scheduler_id, 'JOB_CHAIN' => $job_chain ));

        $res = $data->sql->query( $qry );

        while ($line = $data->sql->get_next($res)) {
            $step_id = $chain_id.'/'.$line['ORDER_STATE'];
            // Si non defini 
            if (!isset($State[$step_id])) {
                $State[$step_id]['STATE']= $line['ORDER_STATE'];
                $State[$step_id]['TASK_ID']= $line['ORDER_STATE'];
                $State[$step_id]['STEP'] = '?';
            }
            $State[$step_id]['ACTION']= $line['ACTION'];
        }
        
        $res = $data->sql->query( $qry );
        while ($line = $data->sql->get_next($res)) {
        }
        
        $xml = "<?xml version='1.0' encoding='utf-8' ?>";
        $xml .= "<rows>";
        $xml .= '<head>
            <afterInit>
                <call command="clearAll"/>
            </afterInit>
        </head>';        
        foreach ($State as $state_id=>$line) { 
            $s = $line['STATE'];
            
            if ($line['ACTION']=='stop') {
                $color = "red";
                $status = "STOPPED";
            }
            elseif ($line['ACTION']=='next_state') {
                $color = "orange";
                $status = "SKIPPED";
            }
            elseif ($line['END_TIME']=='') {
                $color = "#ffffcc";
                $status = "RUNNING";
            }
            elseif ($line['ERROR']>0) {
                $color = "#fbb4ae";
                $status = "FAILURE";
            }
            else {
                $color = "#ccebc5";
                $status = "SUCCESS";
            }
            if (isset($line['ERROR_CODE'])) 
                $line['ERROR_CODE'] = substr($line['ERROR_CODE'],15);
            else 
                $line['ERROR_CODE'] = '';
            $xml .= "<row id='".$line['TASK_ID']."' bgColor='$color'>";
            $xml .= "<cell>".$line['JOB_CHAIN']."</cell>";
            $xml .= "<cell>".$line['STEP']."</cell>";
            $xml .= "<cell><![CDATA[".$line['STATE']."]]></cell>";
            $xml .= "<cell><![CDATA[".$status."]]></cell>";
            if (isset($line['START_TIME'])) {
                $line['START_TIME'] = $date->ShortDate( $date->Date2Local( $line['START_TIME'],  $line['SPOOLER_ID'] ) );
                $xml .= "<cell><![CDATA[".$line['START_TIME']."]]></cell>";
                $xml .= "<cell><![CDATA[".$line['END_TIME']."]]></cell>";
            }
            else {
                $xml .= "<cell/><cell/>";
            }
            if (isset($line['ERROR'])) {
                $xml .= "<cell><![CDATA[".$line['ERROR']."]]></cell><cell><![CDATA[]]></cell>";
                $xml .= "<cell><![CDATA[".$line['ERROR_CODE']."]]></cell>";
                $xml .= "<cell><![CDATA[".$line['ERROR_TEXT']."]]></cell>";
                $xml .= "<cell/><cell/><cell/>";
            }
            $xml .= "</row>";
        }
        $xml .= "</rows>";
        
        $response = new Response();
        $response->headers->set('Content-Type', 'text/xml');
        $response->setContent( $xml );
        return $response;        
    }

    // Chaque noeud est un step
    public function graphvizAction()
    {
        $request = Request::createFromGlobals();
        $return = 0;
        
        $tmp = sys_get_temp_dir();
        $images = '/bundles/ariigraphviz/images/silk';
        $this->images = $this->get('kernel')->getRootDir().'/../web'.$images;
        $images_url = $this->container->get('assets.packages')->getUrl($images);        

        $this->graphviz_dot = $this->container->getParameter('graphviz_dot');
        $session = $this->get('request_stack')->getCurrentRequest()->getSession();
        $id = $request->query->get( 'id' );

        if ($id==0) exit();
        
        $file = '.*';
        $rankdir = 'LR';
        $splines = 'polyline';
        $show_params = 'n';
        $show_events = 'n';

        if ($request->query->get( 'splines' ))
            $splines = $request->query->get( 'splines' );
        if ($request->query->get( 'show_params' ))
            $show_params = $request->query->get( 'show_params' );
        if ($show_params == 'true') {
            $show_params = 'y';
        }
        else {            
            $show_params = 'n';
        }
        if ($request->query->get( 'show_events' ))
            $show_events = $request->query->get( 'show_events' );
        if ($show_events == 'true') {
            $show_events = 'y';
        }
        else {            
            $show_events = 'n';
        }
        
        if ($request->query->get( 'output' ))
            $output = $request->query->get( 'output' );
        else {
            $output = "svg";        
        }
        
        $svg = "digraph arii {\n";
        $svg .= "fontname=arial\n";
        $svg .= "fontsize=12\n";
        $svg .= "splines=$splines\n";
        $svg .= "randkir=$rankdir\n";
        $svg .= "node [shape=plaintext,fontname=arial,fontsize=8]\n";
        $svg .= "edge [shape=plaintext,fontname=arial,fontsize=8]\n";
        $svg .= "bgcolor=transparent\n";
        
        $this->Done = array();
        $svg .= $this->GraphOrder($id);
        $svg .= "}\n"; // fin de graph
        
        
// print $svg; exit();
        $tmpfile = $tmp.'/arii.dot';
        file_put_contents($tmpfile, $svg);
        $cmd = '"'.$this->graphviz_dot.'" "'.$tmpfile.'" -T '.$output;

        // $base = "/arii/images";
        if ($output == 'svg') {
            // exec($cmd,$out,$return);
            $out = `$cmd`;
            header('Content-type: image/svg+xml');
            // integration du script svgpan
            $head = strpos($out,'<g id="graph');
            $xml = '<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1">
<script xlink:href="'.$this->container->get('assets.packages')->getUrl("bundles/ariigraphviz/js/SVGPan.js").'"/>
<g id="viewport"';
            $xml .= substr($out,$head+14);
            print str_replace('xlink:href="'.$this->images,'xlink:href="'.$images_url,$xml);
            
        }
        elseif ($output == 'pdf') {
            header('Content-type: application/pdf');
            print system($cmd);
        }
        else {
            header('Content-type: image/'.$output);
            print system($cmd);
        }
        exit();
        
    }
    
    function GraphOrder($id,$order_id='',$job_chain='') {
        
        // on commence par recuperer le statut de l'ordre
        $dhtmlx = $this->container->get('arii_core.dhtmlx');
        $data = $dhtmlx->Connector('data');
        
        $SOS = $this->container->get('arii_core.sos');
        $date = $this->container->get('arii_core.date');
        $sql = $this->container->get('arii_core.sql');

        $gvz = $this->container->get('arii_jid.graphviz');

        // Si on n'a pas d'ordre, c'est une chaine principale
        if ($order_id=='') {
            $qry = $sql->Select(array(  'ORDER_ID' ))
                    .$sql->From(array('SCHEDULER_ORDER_HISTORY'))
                    .$sql->Where(array( 'HISTORY_ID' => $id ));
            $res = $data->sql->query( $qry );
            $State = array();
            if ($line = $data->sql->get_next($res)) {
                $order_id = $line['ORDER_ID'];
            }
            else {
                // l'ordre a disparu ?!
                exit();
            }
            list($META_CHAIN,$ORDER)=explode('.',$order_id);
        }
        else {
            $META_CHAIN=$job_chain;
            $ORDER = $order_id;
        }
        
        $qry = $sql->Select(array('soh.JOB_CHAIN','soh.ORDER_ID','soh.SPOOLER_ID','soh.TITLE as ORDER_TITLE','soh.STATE as CURRENT_STATE','soh.START_TIME as ORDER_START_TIME','soh.END_TIME as ORDER_END_TIME',
            'sosh.TASK_ID','sosh.STATE','sosh.STEP','sosh.START_TIME','sosh.END_TIME','sosh.ERROR','sosh.ERROR_TEXT'))
        .$sql->From(array('SCHEDULER_ORDER_HISTORY soh')) 
        .$sql->LeftJoin('SCHEDULER_ORDER_STEP_HISTORY sosh',array('soh.HISTORY_ID','sosh.HISTORY_ID'))
        .$sql->Where(array( 'soh.HISTORY_ID>=' => $id,  'soh.ORDER_ID' => $order_id  ))
        .$sql->OrderBy(array('sosh.START_TIME','sosh.TASK_ID'));

        $res = $data->sql->query( $qry );
        $Steps = $OrderInfo = array();
        $job_chain='UNKNOWN ?';
        while ($line = $data->sql->get_next($res)) {
            $scheduler_id = $line['SPOOLER_ID'];
            $chain_id = $scheduler_id.'/'.$line['JOB_CHAIN'];            

            $line['START_TIME']=$date->ShortDate( $date->Date2Local($line['START_TIME'],$scheduler_id));
            $line['END_TIME']=$date->ShortDate( $date->Date2Local($line['END_TIME'],$scheduler_id));
            
            // Ordres
            $order = $line['ORDER_ID'];
            $order_id = $chain_id.'/'.$line['ORDER_ID'];

            $step_id = $chain_id.'/'.$line['STATE'];                    
            $Steps[$step_id] = $line;

            $job_chain = $line['JOB_CHAIN'];
            $OrderInfo[$order_id] = $line;             
        }

        $svg = '';
        // Dessin des étapes
        $last = '';
        $etape=0;
        foreach ($Steps as $step_id=>$line) {
            
            $s='/'.$line['JOB_CHAIN'].'/'.$line['STATE'];
            
            $svg .= $gvz->Node($this->images, $line);
            $Done[$s]=1; 
            
            if ($last !='') 
                $svg .= "\"$last\" -> \"$s\" [label=$etape,color=$color]\n";
            // On relie avec le noeud précédent
            // donc la couleur est pour le prochain lien
            if (!isset($line['ERROR'])) {
                $color= "grey";
            }
            elseif ($line['ERROR']==0 )
                $color= "green";
            else 
                $color= "red";
                
            $last = $s;
            $etape++;
        }
        if (isset($OrderInfo[$order_id])) {
            $svg .= $gvz->Order($this->images,$OrderInfo[$order_id]);
            $svg .= '"/'.$job_chain.'/'.$OrderInfo[$order_id]['CURRENT_STATE'].'" [label="'.$OrderInfo[$order_id]['CURRENT_STATE'].'"]'."\n";
            $svg .= '"O.'.$OrderInfo[$order_id]['ORDER_ID'].'" -> "/'.$job_chain.'/'.$OrderInfo[$order_id]['CURRENT_STATE'].'" [style=dashed]'."\n";        

            $current = '/'.$job_chain.'/'.$OrderInfo[$order_id]['STATE'];
            if (!isset($Done[$current])) {       
                $svg .= "\"$current\" [shape=record,color=$color,style=filled,fillcolor=\"".$this->ColorNode($current,$OrderInfo[$order_id]['ERROR'],$OrderInfo[$order_id]['END_TIME'])."\"]\n";    
                // on le relie au dernier
                $svg .= "\"$last\" -> \"$current\" [label=$etape,shape=ellipse,color=$color]\n";
            }
            else {
                $svg .= "\"$last\" -> \"/$job_chain/".$OrderInfo[$order_id]['CURRENT_STATE']."\" [label=$etape,shape=ellipse,color=$color]\n";
            }
        }
        // Schema de base 
        $tmp = sys_get_temp_dir();
        $cache = $tmp.'/'.$scheduler_id.',job_chains,job_commands.'.$scheduler_id.'.xml';
        $I =  @stat( $cache );
        $modif = $I[9];
        $SOS = $this->container->get('arii_jid.sos');
        if ((time() - $I[9])>300) {            
            $cmd = '<show_state what="job_chains,job_commands"/>';
            $xml = $SOS->Command($scheduler_id,$cmd, 'xml');
            file_put_contents($cache, $xml);
        }
        else {
            $xml = file_get_contents($cache);          
        }
        $result = $SOS->xml2array($xml,1,'value');
        
        // On ajoute les
       $JobChains = $result['spooler']['answer']['state']['job_chains']['job_chain'];
       // Information sur les jobs pour les split&merge
       $XMLJobs = $result['spooler']['answer']['state']['jobs']['job'];
       // On ne conserve que le significatif
       $n=0;
       $Jobs = array();
       while (isset($XMLJobs[$n]['attr']['job'])) {           
           $job = $XMLJobs[$n]['attr']['path'];
           // successeurs
           if (isset($XMLJobs[$n]['commands'])) {
                if (isset($XMLJobs[$n]['commands']['attr'])) {
                   $XMLJobs[$n]['commands'][0]['attr'] = $XMLJobs[$n]['commands']['attr'];
                   $XMLJobs[$n]['commands'][0]['order'] = $XMLJobs[$n]['commands']['order'];
                }
                // Commandes
                $c = 0;
                $Commands = array();
                while (isset($XMLJobs[$n]['commands'][$c]['attr']['on_exit_code'])) {
                    $next = $XMLJobs[$n]['commands'][$c]['attr']['on_exit_code'];
                    if (isset($XMLJobs[$n]['commands'][$c]['attr'])) {
                        // mise en tableau forcée
                        $o = 0;
                        if (isset($XMLJobs[$n]['commands'][$c]['order']['attr']))
                            $XMLJobs[$n]['commands'][$c]['order'][$o]['attr'] = $XMLJobs[$n]['commands'][$c]['order']['attr'];
                        while (isset($XMLJobs[$n]['commands'][$c]['order'][$o])) {
                            $XMLJobs[$n]['commands'][$c]['order'][$o]['attr']['on_exit_code'] = $next;
                            array_push($Commands,$XMLJobs[$n]['commands'][$c]['order'][$o]);
                            $o++;
                        }
                    }
                    $c++;
                }
                $Jobs[$job] = $Commands;               
           }           
           // Next ? 
           elseif (substr($XMLJobs[$n]['attr']['job'],0,1)=='_') {
               $Jobs[$job][0]['synchro']=1;
           }
           $n++;
       }
        // 
        // On retrouve la chaine principale
        $find = -1;
        $n = 0;
        $search = '/'.dirname($job_chain).'/'.$META_CHAIN;
        while (isset($JobChains[$n])) {
            if ($JobChains[$n]['attr']['path']==$search) {
                $find = $n;
                break;
            }
            $n++; 
        }
        
        if ($find>=0) {
    //        $svg .= "subgraph \"clusterMETACHAIN\" {\n";
            
            $svg .= $gvz->Chain($this->images,$scheduler_id, "/$job_chain", $order_id, $Steps, $JobChains, $Jobs, basename($job_chain)  );

            $MetaChain = $JobChains[$find];
            $n = 0;
            while (isset($MetaChain['job_chain_node'][$n]['attr'])) {
                $Infos = $MetaChain['job_chain_node'][$n]['attr'];
                $state = $Infos['state'];

                if (isset($Infos['next_state']))
                    $next = $Infos['next_state'];
                else 
                    $next = '';
                if (isset($Infos['error_state']))
                    $error = $Infos['error_state'];
                else
                    $error = '';

                if (isset($Infos['job_chain'])) {
                    $chain = $Infos['job_chain'];
                    $Node[$state] = $chain;
                    $svg .= $gvz->Chain($this->images, $scheduler_id, $chain,$order_id, $Steps, $JobChains, $Jobs, $state, $next, $error );  
                }
                elseif (isset($Infos['job'])) {                
                    $job = $Infos['job'];
                    // Sous-chaine ?
                    if (isset($Jobs[$job])) {
                        $c = 0;
                        while (isset($Jobs[$job][$c])) { 
                            if (isset($Jobs[$job][$c]['attr']['on_exit_code'])) {
                                $exit = $Jobs[$job][$c]['attr']['on_exit_code'];
                                if ($exit == 'success')
                                    $color = 'green';
                                elseif ($exit == 'error')
                                    $color = 'red';
                                else 
                                    $color = 'blue';
                                $jc   = $Jobs[$job][$c]['attr']['job_chain'];
                                $o    = $Jobs[$job][$c]['attr']['id'];
                                // Lien 
                                $svg .= '"/'.$job_chain.'/'.$state.'" -> "'.$jc.'" [label="'.$o.'",color='.$color.',style=dashed]'."\n";

                                // appel recursif
                                if (!isset($this->Done[$o])) {
                                    $this->Done[$o]=1;
                                    $svg .= $this->GraphOrder($id,$o,$jc);
                                }
                            }
                            // on dessine la sous-chaine
                            /*
                            if (!isset($Done[$jc])) {
                                $svg .= $gvz->Chain($this->images,$scheduler_id, $jc, $o, $Steps, $JobChains, basename($jc) );
                                $Done[$jc]=1;
                            }                        
                             */
                            $c++;
                        }
                    }
                }   
                else {
                    $Node[$state] = $state;
                }
                $n++;
            }            
    //        $svg .= 'label="'.$META_CHAIN."\"\n";                                        
    //        $svg .= "}\n";
        }
        else {
            // Chaine simple
            $svg .= $gvz->Chain($this->images,$scheduler_id, "/$job_chain", $order_id, $Steps, $JobChains, $Jobs, basename($job_chain) );
        }
        
        return $svg;
    }

}
