<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class CarController extends Controller
{
    /**
     * @Route("/car", name="car")
     */
    public function showAction()
    {
        return $this->render('AppBundle:Car:main.html.twig', array(
            // ...
        ));
    }


}
