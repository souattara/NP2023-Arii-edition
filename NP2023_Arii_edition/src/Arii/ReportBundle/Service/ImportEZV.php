<?php
namespace Arii\ReportBundle\Service;

class ImportEZV {
    
    
    public function __construct(\Doctrine\ORM\EntityManager $em, $Parameters) {
        $this->em = $em;        
        if (isset($Parameters['EZV']))
            $this->Parameters = $Parameters['EZV'];
    }

    public function Import() {
        return $this->get();
    }
    
    private function get() {
        // Replace the value of these variables with your own data
        $server = $this->Parameters['server'];
        $user =   $this->Parameters['login'];
        $pass =   $this->Parameters['password'];

        // No changes needed from now on
        $connection_string = "DRIVER={SQL Server};SERVER=$server";
        $conn = odbc_connect("EasyVista",$user,$pass);

        if ($conn) {
            echo "Connection established.";
        } else{
            print "((".odbc_errormsg();
            die("Connection could not be established.");
        }
        /*
         $sql = "SELECT * FROM  sys.objects"
            . " WHERE type_desc='USER_TABLE'";
        */ 
        $cols = "INSTALLATION_DATE,REMOVED_DATE,ASSET_TAG,SERIAL_NUMBER,LAST_UPDATE,E_CMDB_BKPSTATUS,E_CMDB_BKPPLATF,E_CMDB_BKPTYPE,E_CMDB_BKPPOL,E_CMDB_BKPAGENT,E_CMDB_BKPALARM,E_CMDB_BKPSELECT,E_CMDB_BKPSETDATE,E_CMDB_RAISONNOBKP,E_CMDB_RDI,E_CMDB_RDA,E_CMDB_RDM,E_CMDB_ALIAS,E_AM_FUNCTION,STATUS_FR";
        $sql = "SELECT $cols "
            . " FROM AM_ASSET a "
            . " left join AM_STATUS s on a.STATUS_ID=s.STATUS_ID"
            . " where ((ASSET_TAG like 'xx%') or (ASSET_TAG like 'sg%')) and not(ASSET_TAG like '%_OLD%')"
            . " order by ASSET_TAG";
        //  $sql = "SELECT * FROM AM_ASSET";
        //  $sql = "SELECT * FROM AM_STATUS";
          $res = odbc_exec($conn, $sql);

          $Columns = explode(",",$cols);
        
        if (false) {
            for ($j = 1; $j <= odbc_num_fields($res); $j++) {
                $field_name = odbc_field_name($res, $j);
                print "(($j $field_name))";
            }
            exit();
        }
        
        $Asset = array();
        while (odbc_fetch_row($res)) {
            $id = strtolower(odbc_result($res,"ASSET_TAG"));
            foreach ($Columns as $c) {
                $Asset[$id][$c] = odbc_result($res,$c);
            }
/*
            for ($j = 1; $j <= odbc_num_fields($res); $j++) {        
                $c = $Columns[$j-1];
                $r = odbc_result($res,$j);
                if ($r)
                    $Asset[$id][$c] = $r;
                else
                    $Asset[$id][$c] = '';
            }
 */
        }
        odbc_free_result($res);
        odbc_close($conn); 
        
        // print "<pre>";
        // print_r($Asset);
        foreach ($Asset as $name => $asset) {
            // print_r($asset);
            
            $EZV = $this->em->getRepository("AriiReportBundle:EZV")->findOneBy(array('name'=> $name));        
            if (!$EZV)
                $EZV= new \Arii\ReportBundle\Entity\EZV();
            
            $EZV->setName($name);
            $EZV->setStatus(utf8_encode($asset['STATUS_FR']));
            $EZV->setInstallation(new \DateTime($asset['INSTALLATION_DATE']));
            $EZV->setRemoved(new \DateTime($asset['REMOVED_DATE']));
            $EZV->setLastUpdate(new \DateTime($asset['LAST_UPDATE']));

            $EZV->setRole($asset['E_AM_FUNCTION']);
            
            $EZV->setSerial($asset['SERIAL_NUMBER']);
            
            $EZV->setRdi(str_replace(' ','',$asset['E_CMDB_RDI']));
            $EZV->setRda(str_replace(' ','',$asset['E_CMDB_RDA']));
            $EZV->setRdm(str_replace(' ','',$asset['E_CMDB_RDM']));
            
            $date = sprintf("%04d-%02d-%02d 00:00:00",substr($asset['E_CMDB_BKPSETDATE'],6,4),substr($asset['E_CMDB_BKPSETDATE'],3,2),substr($asset['E_CMDB_BKPSETDATE'],0,2));
            $EZV->setBackupDate(new \DateTime($date));
            
            $EZV->setBackupStatus(utf8_encode($asset['E_CMDB_BKPSTATUS']));
            $EZV->setBackupPlatform($asset['E_CMDB_BKPPLATF']);
            $EZV->setBackupType($asset['E_CMDB_BKPTYPE']);
            $EZV->setBackupPolicy(utf8_encode($asset['E_CMDB_BKPPOL']));
            $EZV->setBackupAgent($asset['E_CMDB_BKPAGENT']);
            switch (substr($asset['E_CMDB_BKPALARM'],0,1)) {
                case 1: 
                    $EZV->setBackupAlarm();
                    break;
                case 2:
                    $EZV->setBackupAlarm(2);
                    break;
                case 3:
                    $EZV->setBackupAlarm(180);
                    break;
                case 4:
                    $EZV->setBackupAlarm(-1);
                    break;
                case 5:
                    $EZV->setBackupAlarm(30);
                    break;
                case 6:
                    $EZV->setBackupAlarm(7);
                    break;
                default:
                    // print $asset['E_CMDB_BKPALARM'];                
            }
            
            $EZV->setBackupSelect($asset['E_CMDB_BKPSELECT']);
            $EZV->setBackupNo(utf8_encode($asset['E_CMDB_RAISONNOBKP']));
            
            $this->em->persist($EZV);
        }
        $this->em->flush();            
        return "success";
    }
    
    private function status() {
        // Replace the value of these variables with your own data
        $server = $this->Parameters['server'];
        $user =   $this->Parameters['login'];
        $pass =   $this->Parameters['password'];

        // No changes needed from now on
        $connection_string = "DRIVER={SQL Server};SERVER=$server";
        $conn = odbc_connect("EasyVista",$user,$pass);

        if ($conn) {
            echo "Connection established.";
        } else{
            print "((".odbc_errormsg();
            die("Connection could not be established.");
        }
        $sql = "SELECT * FROM AM_STATUS";
        
        $res = odbc_exec($conn, $sql);

        $Columns = array();
        for ($j = 1; $j <= odbc_num_fields($res); $j++) {
            $field_name = odbc_field_name($res, $j);
            array_push($Columns,$field_name);
        }
        $Asset = array();
        while (odbc_fetch_row($res)) {
            $id = strtolower(odbc_result($res,"STATUS_ID"));
            for ($j = 1; $j <= odbc_num_fields($res); $j++) {        
                $c = $Columns[$j-1];
                $Asset[$id][$c] = odbc_result($res,$j);
            }
        }
        odbc_free_result($res);
        odbc_close($conn); 

        print_r($Asset);
    }
    
}