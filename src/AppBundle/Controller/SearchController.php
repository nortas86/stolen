<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class SearchController extends Controller
{
    /**
     * @Route("/search", name="search")
     */
    public function showAction()
    {
        return $this->render('AppBundle:Search:main.html.twig', array(
            // ...
        ));
    }


}
