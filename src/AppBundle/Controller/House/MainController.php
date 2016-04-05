<?php

namespace AppBundle\Controller\House;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class MainController extends Controller
{
    /**
     * @Route("/house", name="house")
     */
    public function showAction()
    {
        return $this->render('AppBundle:House:main.html.twig', array(
            // ...
        ));
    }


}
