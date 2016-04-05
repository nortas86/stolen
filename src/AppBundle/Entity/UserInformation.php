<?php
// src/AppBundle/Entity/UserInformation.php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="user_information")
 */
class UserInformation
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\OneToOne(targetEntity="User")
     * @ORM\JoinColumn(name="id", referencedColumnName="id")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=50)
     * @Assert\NotBlank()
     * @Assert\Length(min=3)
     */
    protected $first_name;
    
    /**
     * @ORM\Column(type="string", length=50)
     * @Assert\NotBlank()
     * @Assert\Length(min=3)
     */
    protected $last_name;
    
    /**
     * @ORM\Column(type="string", length=10)
     * @Assert\Language()
     */
    protected $language;
    
    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $country;
    
    /**
     * @ORM\Column(type="string", length=20)
     */
    protected $phone;
    
    /**
     * @ORM\Column(type="string", length=20)
     */
    protected $mobile;
    
    /**
     * @ORM\Column(type="string", length=50)
     */
    protected $city;
    
    /**
     * @ORM\Column(type="string", length=50)
     */
    protected $address;
    
    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
}