<?php
// src/AppBundle/Entity/Image.php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
//use Symfony\Component\Validator\Constraints as Assert;
//use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @ORM\Entity
 * @ORM\Table(name="image")
 */
class Image
{
    /**
     * @ORM\Id
     * @ORM\Column(type="guid")
     * @ORM\GeneratedValue(strategy="UUID")
     */
    protected $guid;
    
    /**
     * @ORM\Column(type="integer")
     * @ORM\OneToMany(targetEntity="Post")
     * @ORM\JoinColumn(name="post_guid", referencedColumnName="guid")
     */
    protected $post_guid;
}