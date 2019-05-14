<?php

namespace Arii\ReportBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Audit
 *
 * @ORM\Table(name="IMPORT_EZV")
 * @ORM\Entity(repositoryClass="Arii\ReportBundle\Entity\EZVRepository")
 */
class EZV
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=32)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="role", type="string", length=24, nullable=true)
     */
    private $role;
    
    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=64, nullable=true)
     */
    private $status;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_update", type="datetime", nullable=true)
     */
    private $last_update;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="installation", type="datetime", nullable=true)
     */
    private $installation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="removed", type="datetime", nullable=true)
     */
    private $removed;

    /**
     * @var string
     *
     * @ORM\Column(name="serial", type="string", length=64, nullable=true)
     */
    private $serial;

    /**
     * @var string
     *
     * @ORM\Column(name="rdi", type="string", length=64, nullable=true)
     */
    private $rdi;
        
    /**
     * @var string
     *
     * @ORM\Column(name="rda", type="string", length=64, nullable=true)
     */
    private $rda;

    /**
     * @var string
     *
     * @ORM\Column(name="rdm", type="string", length=64, nullable=true)
     */
    private $rdm;

    /**
     * @var string
     *
     * @ORM\Column(name="backup_status", type="string", length=128, nullable=true)
     */
    private $backup_status;
    
    /**
     * @var string
     *
     * @ORM\Column(name="backup_platform", type="string", length=64, nullable=true)
     */
    private $backup_platform;
    
    /**
     * @var string
     *
     * @ORM\Column(name="backup_type", type="string", length=64, nullable=true)
     */
    private $backup_type;

    /**
     * @var string
     *
     * @ORM\Column(name="backup_policy", type="string", length=64, nullable=true)
     */
    private $backup_policy;

    /**
     * @var string
     *
     * @ORM\Column(name="backup_agent", type="string", length=64, nullable=true)
     */
    private $backup_agent;

    /**
     * @var string
     *
     * @ORM\Column(name="backup_select", type="string", length=64, nullable=true)
     */
    private $backup_select;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="backup_date", type="datetime", nullable=true)
     */
    private $backup_date;

    /**
     * @var string
     *
     * @ORM\Column(name="backup_no", type="string", length=128, nullable=true)
     */
    private $backup_no;

    /**
     * @var integer
     *
     * @ORM\Column(name="backup_alarm", type="integer", nullable=true )
     */
    private $backup_alarm;
    

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return EZV
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set function
     *
     * @param string $function
     * @return EZV
     */
    public function setFunction($function)
    {
        $this->function = $function;

        return $this;
    }

    /**
     * Get function
     *
     * @return string 
     */
    public function getFunction()
    {
        return $this->function;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return EZV
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set last_update
     *
     * @param \DateTime $lastUpdate
     * @return EZV
     */
    public function setLastUpdate($lastUpdate)
    {
        $this->last_update = $lastUpdate;

        return $this;
    }

    /**
     * Get last_update
     *
     * @return \DateTime 
     */
    public function getLastUpdate()
    {
        return $this->last_update;
    }

    /**
     * Set installation
     *
     * @param \DateTime $installation
     * @return EZV
     */
    public function setInstallation($installation)
    {
        $this->installation = $installation;

        return $this;
    }

    /**
     * Get installation
     *
     * @return \DateTime 
     */
    public function getInstallation()
    {
        return $this->installation;
    }

    /**
     * Set removed
     *
     * @param \DateTime $removed
     * @return EZV
     */
    public function setRemoved($removed)
    {
        $this->removed = $removed;

        return $this;
    }

    /**
     * Get removed
     *
     * @return \DateTime 
     */
    public function getRemoved()
    {
        return $this->removed;
    }

    /**
     * Set serial
     *
     * @param string $serial
     * @return EZV
     */
    public function setSerial($serial)
    {
        $this->serial = $serial;

        return $this;
    }

    /**
     * Get serial
     *
     * @return string 
     */
    public function getSerial()
    {
        return $this->serial;
    }

    /**
     * Set rdi
     *
     * @param string $rdi
     * @return EZV
     */
    public function setRdi($rdi)
    {
        $this->rdi = $rdi;

        return $this;
    }

    /**
     * Get rdi
     *
     * @return string 
     */
    public function getRdi()
    {
        return $this->rdi;
    }

    /**
     * Set rda
     *
     * @param string $rda
     * @return EZV
     */
    public function setRda($rda)
    {
        $this->rda = $rda;

        return $this;
    }

    /**
     * Get rda
     *
     * @return string 
     */
    public function getRda()
    {
        return $this->rda;
    }

    /**
     * Set rdm
     *
     * @param string $rdm
     * @return EZV
     */
    public function setRdm($rdm)
    {
        $this->rdm = $rdm;

        return $this;
    }

    /**
     * Get rdm
     *
     * @return string 
     */
    public function getRdm()
    {
        return $this->rdm;
    }

    /**
     * Set backup_status
     *
     * @param string $backupStatus
     * @return EZV
     */
    public function setBackupStatus($backupStatus)
    {
        $this->backup_status = $backupStatus;

        return $this;
    }

    /**
     * Get backup_status
     *
     * @return string 
     */
    public function getBackupStatus()
    {
        return $this->backup_status;
    }

    /**
     * Set backup_platform
     *
     * @param string $backupPlatform
     * @return EZV
     */
    public function setBackupPlatform($backupPlatform)
    {
        $this->backup_platform = $backupPlatform;

        return $this;
    }

    /**
     * Get backup_platform
     *
     * @return string 
     */
    public function getBackupPlatform()
    {
        return $this->backup_platform;
    }

    /**
     * Set backup_type
     *
     * @param string $backupType
     * @return EZV
     */
    public function setBackupType($backupType)
    {
        $this->backup_type = $backupType;

        return $this;
    }

    /**
     * Get backup_type
     *
     * @return string 
     */
    public function getBackupType()
    {
        return $this->backup_type;
    }

    /**
     * Set backup_policy
     *
     * @param string $backupPolicy
     * @return EZV
     */
    public function setBackupPolicy($backupPolicy)
    {
        $this->backup_policy = $backupPolicy;

        return $this;
    }

    /**
     * Get backup_policy
     *
     * @return string 
     */
    public function getBackupPolicy()
    {
        return $this->backup_policy;
    }

    /**
     * Set backup_agent
     *
     * @param string $backupAgent
     * @return EZV
     */
    public function setBackupAgent($backupAgent)
    {
        $this->backup_agent = $backupAgent;

        return $this;
    }

    /**
     * Get backup_agent
     *
     * @return string 
     */
    public function getBackupAgent()
    {
        return $this->backup_agent;
    }

    /**
     * Set backup_select
     *
     * @param string $backupSelect
     * @return EZV
     */
    public function setBackupSelect($backupSelect)
    {
        $this->backup_select = $backupSelect;

        return $this;
    }

    /**
     * Get backup_select
     *
     * @return string 
     */
    public function getBackupSelect()
    {
        return $this->backup_select;
    }

    /**
     * Set backup_date
     *
     * @param string $backupDate
     * @return EZV
     */
    public function setBackupDate($backupDate)
    {
        $this->backup_date = $backupDate;

        return $this;
    }

    /**
     * Get backup_date
     *
     * @return string 
     */
    public function getBackupDate()
    {
        return $this->backup_date;
    }

    /**
     * Set backup_no
     *
     * @param string $backupNo
     * @return EZV
     */
    public function setBackupNo($backupNo)
    {
        $this->backup_no = $backupNo;

        return $this;
    }

    /**
     * Get backup_no
     *
     * @return string 
     */
    public function getBackupNo()
    {
        return $this->backup_no;
    }

    /**
     * Set backup_alarm
     *
     * @param integer $backupAlarm
     * @return EZV
     */
    public function setBackupAlarm($backupAlarm)
    {
        $this->backup_alarm = $backupAlarm;

        return $this;
    }

    /**
     * Get backup_alarm
     *
     * @return integer 
     */
    public function getBackupAlarm()
    {
        return $this->backup_alarm;
    }

    /**
     * Set role
     *
     * @param string $role
     * @return EZV
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return string 
     */
    public function getRole()
    {
        return $this->role;
    }
}
