<?php

namespace AppBundle\Controller\Motorcycle;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class MainController extends Controller
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
