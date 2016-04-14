<?php
// src/AppBundle/Entity/Bike.php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @ORM\Entity
 * @ORM\Table(name="bike")
 */
class Bike
{
    /**
     * @ORM\Id
     * @ORM\Column(type="guid")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $guid;

    /**
     * @ORM\Column(type="string", length=50)
     */
    protected $category;
    
    /**
     * @ORM\Column(type="string", length=50)
     */
    protected $brand;
    
    /**
     * @ORM\Column(type="date", nullable=true)
     */
    protected $year;
    
    /**
     * @ORM\Column(type="string", length=2)
     */
    protected $size;
    
    /**
     * @ORM\Column(type="string", length=20)
     */
    protected $color;
    
    /**
     * @ORM\Column(type="string", length=2)
     */
    protected $gears;
    
    /**
     * @ORM\Column(type="string", length=20)
     */
    protected $brakes;
    
    
    public function __construct()
    {
        //parent::__construct();
        // your own logic
    }

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
     * Set category
     *
     * @param string $category
     *
     * @return Bike
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set brand
     *
     * @param string $brand
     *
     * @return Bike
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * Get brand
     *
     * @return string
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Set year
     *
     * @param \Date $year
     *
     * @return Bike
     */
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Get year
     *
     * @return \Date
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set size
     *
     * @param string $size
     *
     * @return Bike
     */
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Get size
     *
     * @return string
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Set color
     *
     * @param string $color
     *
     * @return Bike
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get color
     *
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set gears
     *
     * @param string $gears
     *
     * @return Bike
     */
    public function setGears($gears)
    {
        $this->gears = $gears;

        return $this;
    }

    /**
     * Get gears
     *
     * @return string
     */
    public function getGears()
    {
        return $this->gears;
    }

    /**
     * Set brakes
     *
     * @param string $brakes
     *
     * @return Bike
     */
    public function setBrakes($brakes)
    {
        $this->brakes = $brakes;

        return $this;
    }

    /**
     * Get brakes
     *
     * @return string
     */
    public function getBrakes()
    {
        return $this->brakes;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return Bike
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set updated
     *
     * @param \DateTime $updated
     *
     * @return Bike
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get updated
     *
     * @return \DateTime
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Get guid
     *
     * @return guid
     */
    public function getGuid()
    {
        return $this->guid;
    }
}
