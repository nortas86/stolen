<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class BikeController extends Controller
{
    /**
     * @Route("/bike", name="bike")
     */
    public function showAction()
    {
        return $this->render('AppBundle:Bike:main.html.twig', array(
            // ...
        ));
    }


}
