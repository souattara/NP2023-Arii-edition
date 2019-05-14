<?php

namespace Arii\ReportBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Audit
 *
 * @ORM\Table(name="IMPORT_IPAM")
 * @ORM\Entity(repositoryClass="Arii\ReportBundle\Entity\IPAMRepository")
 */
class IPAM
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
     * @var \DateTime
     *
     * @ORM\Column(name="discovered", type="datetime")
     */
    private $discovered;

    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=15)
     */
    private $ip;

    /**
     * @var string
     *
     * @ORM\Column(name="mac_address", type="string", length=17)
     */
    private $mac_address;

    /**
     * @var string
     *
     * @ORM\Column(name="mac_vendor", type="string", length=128)
     */
    private $mac_vendor;
    

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
     * @return IPAM
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
     * Set discovered
     *
     * @param \DateTime $discovered
     * @return IPAM
     */
    public function setDiscovered($discovered)
    {
        $this->discovered = $discovered;

        return $this;
    }

    /**
     * Get discovered
     *
     * @return \DateTime 
     */
    public function getDiscovered()
    {
        return $this->discovered;
    }

    /**
     * Set ip
     *
     * @param string $ip
     * @return IPAM
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * Get ip
     *
     * @return string 
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Set mac_address
     *
     * @param string $macAddress
     * @return IPAM
     */
    public function setMacAddress($macAddress)
    {
        $this->mac_address = $macAddress;

        return $this;
    }

    /**
     * Get mac_address
     *
     * @return string 
     */
    public function getMacAddress()
    {
        return $this->mac_address;
    }

    /**
     * Set mac_vendor
     *
     * @param string $macVendor
     * @return IPAM
     */
    public function setMacVendor($macVendor)
    {
        $this->mac_vendor = $macVendor;

        return $this;
    }

    /**
     * Get mac_vendor
     *
     * @return string 
     */
    public function getMacVendor()
    {
        return $this->mac_vendor;
    }
}
