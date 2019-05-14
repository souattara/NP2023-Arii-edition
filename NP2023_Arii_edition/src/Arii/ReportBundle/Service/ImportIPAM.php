<?php
namespace Arii\ReportBundle\Service;

class ImportIPAM {
    
    protected $em;
    protected $Parameters;
    
    public function __construct(\Doctrine\ORM\EntityManager $em, $Parameters) {
        $this->em = $em;        
        if (isset($Parameters['IPAM']))
            $this->Parameters = $Parameters['IPAM'];
    }

    public function Import() {
        $log = $this->get();
        return $this->discovery(explode("\n",$log));
    }

    public function get() {
        $mbox = imap_open("{exchrpc:993/imap/ssl}IPAM", $this->Parameters['login'], $this->Parameters['password'], NULL, 1, array('DISABLE_AUTHENTICATOR' => 'GSSAPI'));
        // $check = imap_mailboxmsginfo($mbox); 
        
        $MC = imap_check($mbox);
        $range = "1:".$MC->Nmsgs;
        
        $response = imap_fetch_overview($mbox,$range);
        print "<table>";
        print "<tr><th>Sujet</th><th>De</th><th>Date</th><th>Message</th><th>Size</th><th>N°</th>";        
        foreach ($response as &$msg) {
            $m  = get_object_vars($msg);
            print '<tr>';
            foreach (array('subject','from','date','message_id','size','msgno') as $k) {
                print '<td>'.$m[$k].'</td>';
            }
            $email_number = $m['msgno'];
            
            $message =   imap_fetchbody($mbox,$email_number,2);
            $structure = imap_fetchstructure($mbox,$email_number);
            
            $attachments = array();
              if(isset($structure->parts) && count($structure->parts)) {
                for($i = 0; $i < count($structure->parts); $i++) {
                  $attachments[$i] = array(
                     'is_attachment' => false,
                     'filename' => '',
                     'name' => '',
                     'attachment' => '');

                  if($structure->parts[$i]->ifdparameters) {
                    foreach($structure->parts[$i]->dparameters as $object) {
                      if(strtolower($object->attribute) == 'filename') {
                        $attachments[$i]['is_attachment'] = true;
                        $attachments[$i]['filename'] = $object->value;
                      }
                    }
                  }

                  if($structure->parts[$i]->ifparameters) {
                    foreach($structure->parts[$i]->parameters as $object) {
                      if(strtolower($object->attribute) == 'name') {
                        $attachments[$i]['is_attachment'] = true;
                        $attachments[$i]['name'] = $object->value;
                      }
                    }
                  }

                  if($attachments[$i]['is_attachment']) {
                    $attachments[$i]['attachment'] = imap_fetchbody($mbox, $email_number, $i+1);
                    if($structure->parts[$i]->encoding == 3) { // 3 = BASE64
                      $attachments[$i]['attachment'] = base64_decode($attachments[$i]['attachment']);
                    }
                    elseif($structure->parts[$i]->encoding == 4) { // 4 = QUOTED-PRINTABLE
                      $attachments[$i]['attachment'] = quoted_printable_decode($attachments[$i]['attachment']);
                    }
                  }             
                } // for($i = 0; $i < count($structure->parts); $i++)
              } // if(isset($structure->parts) && count($structure->parts))

            print "<td>";
            if(count($attachments)!=0){
                foreach($attachments as $at){
                    if($at['is_attachment']==1){
                            print $this->discovery(explode("\n",base64_decode($at['attachment'])));
                        }
                    }
            }
            print "</td>";
            
            print '</tr>';
        }
        print "</table>";
        imap_close($mbox);
        exit();
    }
    
    // Traitement du log
    private function discovery($Log = array())
    {
        set_time_limit(300);        
        $head = array_shift($Log);
        
        // deja pris en compte ?
        $Done = array();
        
        // On traite le log
        foreach ($Log as $l) {
            $Infos = explode(',"',$l);
            if (($Infos[0]=='"') || ($Infos[0]=='')) continue;  
            if (!isset($Infos[1])) continue;
            
            $name = str_replace('"','',$Infos[0]); 
            
            if (isset($Done[$name])) continue;
            $Done[$name] = 1;
            
            $d = str_replace('"','',$Infos[1]);
            $date = sprintf("%04d-%02d-%02d",substr($d,6,4),substr($d,3,2),substr($d,0,2));
            $ip = str_replace('"','',$Infos[3]);
            $mac = str_replace('"','',$Infos[8]);
            $vendor = str_replace('"','',$Infos[9]);
            
            $Ipam = $this->em->getRepository("AriiReportBundle:IPAM")->findOneBy(array('name'=> $name));        
            if (!$Ipam) {    
                $Ipam= new \Arii\ReportBundle\Entity\IPAM();
            }

            $Ipam->setName(str_replace('.vaudoise.ch','',$name));
            $Ipam->setDiscovered(new \DateTime($date));
            $Ipam->setIp($ip);
            $Ipam->setMacAddress($mac);
            $Ipam->setMacVendor($vendor);

            $this->em->persist($Ipam);
        }
        $this->em->flush();            
        return "success";
    }
    
}
?>
