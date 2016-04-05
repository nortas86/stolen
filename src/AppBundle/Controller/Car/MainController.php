<?php

namespace AppBundle\Controller\Car;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class MainController extends Controller
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
