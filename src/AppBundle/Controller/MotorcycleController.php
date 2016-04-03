<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class MotorcycleController extends Controller
{
    /**
     * @Route("/motorcycle", name="motorcycle")
     */
    public function showAction()
    {
        return $this->render('AppBundle:Motorcycle:main.html.twig', array(
            // ...
        ));
    }


}
