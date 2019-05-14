<?php

namespace Arii\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * Team
 *
 * @ORM\Table(name="ARII_TEAM")
 * @ORM\Entity(repositoryClass="Arii\CoreBundle\Entity\TeamRepository")
 */
class Team
{
  /**
   * @ORM\ManyToMany(targetEntity="Arii\UserBundle\Entity\User")
   * @ORM\JoinColumn(nullable=true)
   */
  private $user;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * 
     */
    private $id;    

    
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @ORM\ManyToOne(targetEntity="Arii\CoreBundle\Entity\Enterprise")
     * @ORM\JoinColumn(nullable=true)
     *      
     */
    private $enterprise;

    /**
     * Get id
     *
     * @return integer 
     */
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->user = new \Doctrine\Common\Collections\ArrayCollection();
        $this->tf = new \Doctrine\Common\Collections\ArrayCollection();
        $this->filters = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    public function getTf()
    {
        return $this->tf;
    }
    
    public function setTf($tf)
    {
        return $this->tf = $tf;
    }
    
    public function getFilters()
    {
        $filters = new \Doctrine\Common\Collections\ArrayCollection();
        foreach ($this->tf as $tf)
        {
            $filters[] = $tf->getFilter();
        }
        return $filters;
    }
    
    public function setFilters($filters)
    {
        foreach ($filters as $f)
        {
            $teamfilter = new TeamFilter();
            
            $teamfilter->setTeam($this);
            $teamfilter->setFilter($f);
            
            $this->addTf($teamfilter);
        }
    }
    
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Team
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
     * @return Team
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
     * @return Team
     */
    public function setUser(\Arii\UserBundle\Entity\User $user = null)
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
     * Set enterprise
     *
     * @param \Arii\CoreBundle\Entity\Enterprise $enterprise
     * @return Team
     */
    public function setEnterprise(\Arii\CoreBundle\Entity\Enterprise $enterprise = null)
    {
        $this->enterprise = $enterprise;
    
        return $this;
    }

    /**
     * Get enterprise
     *
     * @return \Arii\CoreBundle\Entity\Enterprise 
     */
    public function getEnterprise()
    {
        return $this->enterprise;
    }   
    /**
     * Add user
     *
     * @param \Arii\UserBundle\Entity\User $user
     * @return Team
     */
    public function addUser(\Arii\UserBundle\Entity\User $user)
    {
        $this->user[] = $user;
    
        return $this;
    }

    /**
     * Remove user
     *
     * @param \Arii\UserBundle\Entity\User $user
     */
    public function removeUser(\Arii\UserBundle\Entity\User $user)
    {
        $this->user->removeElement($user);
    }

    public function addTf($tf)
    {
        $this->tf[] = $tf;
    }
    public function removeTf($tf)
    {
        $this->tf->removeElement($tf);
    }

}