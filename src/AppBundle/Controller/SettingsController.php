<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class SettingsController extends Controller
{
    /**
     * @Route("/setting", name="setting")
     */
    public function showAction()
    {
        return $this->render('AppBundle:Setting:main.html.twig', array(
            // ...
        ));
    }


}
