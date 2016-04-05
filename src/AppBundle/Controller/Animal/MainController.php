<?php

namespace AppBundle\Controller\Animal;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class MainController extends Controller
{
    /**
     * @Route("/animal", name="animal")
     */
    public function showAction()
    {
        return $this->render('AppBundle:Animal:main.html.twig', array(
            // ...
        ));
    }


}
