<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class OtherController extends Controller
{
    /**
     * @Route("/other", name="other")
     */
    public function showAction()
    {
        return $this->render('AppBundle:Other:main.html.twig', array(
            // ...
        ));
    }


}
