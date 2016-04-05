<?php

namespace AppBundle\Controller\Person;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class MainController extends Controller
{
    /**
     * @Route("/person", name="person")
     */
    public function showAction()
    {
        return $this->render('AppBundle:Person:main.html.twig', array(
            // ...
        ));
    }


}
