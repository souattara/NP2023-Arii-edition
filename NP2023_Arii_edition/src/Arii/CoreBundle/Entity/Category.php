<?php

namespace Arii\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Category
 *
 * @ORM\Table(name="ARII_CATEGORY")
 * @ORM\Entity(repositoryClass="Arii\CoreBundle\Entity\CategoryRepository")
 */
class Category
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
     * @ORM\Column(name="name", type="string", length=24)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=128)
     */
    private $description;

    /**
    * @ORM\ManyToOne(targetEntity="Arii\CoreBundle\Entity\Category")
    * @ORM\JoinColumn(nullable=true)
    */
    private $category;

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
     * @return Category
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
     * @return Category
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
     * Set category
     *
     * @param \Arii\CoreBundle\Entity\Category $category
     * @return Category
     */
    public function setCategory(\Arii\CoreBundle\Entity\Category $category = null)
    {
        $this->category = $category;
    
        return $this;
    }

    /**
     * Get category
     *
     * @return \Arii\CoreBundle\Entity\Category 
     */
    public function getCategory()
    {
        return $this->category;
    }

}