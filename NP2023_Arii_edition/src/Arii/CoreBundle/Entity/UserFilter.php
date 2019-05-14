<?php

namespace Arii\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Team_Filter
 *
 * @ORM\Table(name="ARII_USER_FILTER")
 * @ORM\Entity
 */
class UserFilter
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
     * @ORM\ManyToOne(targetEntity="Arii\UserBundle\Entity\User")
     */
    private $user;
     
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;
 
    /**
     * @var string
     *
     * @ORM\Column(name="spooler", type="string", length=64, nullable=true)
     */
    private $spooler;

    /**
     * @var string
     *
     * @ORM\Column(name="job", type="string", length=255, nullable=true)
     */
    private $job;

    /**
     * @var string
     *
     * @ORM\Column(name="job_chain", type="string", length=255, nullable=true)
     */
    private $job_chain;

    /**
     * @var string
     *
     * @ORM\Column(name="order_id", type="string", length=255, nullable=true)
     */
    private $order_id;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=128, nullable=true)
     */
    private $status;


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
     * @return UserFilter
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
     * Set description
     *
     * @param string $description
     * @return UserFilter
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set user
     *
     * @param \Arii\UserBundle\Entity\User $user
     * @return UserFilter
     */
    public function setUser(\Arii\UserBundle\Entity\User $user)
    {
        $this->user = $user;
    
        return $this;
    }

    /**
     * Get user
     *
     * @return \Arii\UserBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set filter
     *
     * @param \Arii\CoreBundle\Entity\Filter $filter
     * @return UserFilter
     */
    public function setFilter(\Arii\CoreBundle\Entity\Filter $filter)
    {
        $this->filter = $filter;
    
        return $this;
    }

    /**
     * Get filter
     *
     * @return \Arii\CoreBundle\Entity\Filter 
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Set spooler
     *
     * @param string $spooler
     * @return UserFilter
     */
    public function setSpooler($spooler)
    {
        $this->spooler = $spooler;

        return $this;
    }

    /**
     * Get spooler
     *
     * @return string 
     */
    public function getSpooler()
    {
        return $this->spooler;
    }

    /**
     * Set job
     *
     * @param string $job
     * @return UserFilter
     */
    public function setJob($job)
    {
        $this->job = $job;

        return $this;
    }

    /**
     * Get job
     *
     * @return string 
     */
    public function getJob()
    {
        return $this->job;
    }

    /**
     * Set job_chain
     *
     * @param string $jobChain
     * @return UserFilter
     */
    public function setJobChain($jobChain)
    {
        $this->job_chain = $jobChain;

        return $this;
    }

    /**
     * Get job_chain
     *
     * @return string 
     */
    public function getJobChain()
    {
        return $this->job_chain;
    }

    /**
     * Set order_id
     *
     * @param string $orderId
     * @return UserFilter
     */
    public function setOrderId($orderId)
    {
        $this->order_id = $orderId;

        return $this;
    }

    /**
     * Get order_id
     *
     * @return string 
     */
    public function getOrderId()
    {
        return $this->order_id;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return UserFilter
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
}
