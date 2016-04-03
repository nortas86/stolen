<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\User;
use AppBundle\Form\Certification\RegisterType;

class CertificationController extends Controller
{
    /**
     * @Route("/Login", name="login")
     */
    public function LoginAction()
    {
        return $this->render('AppBundle:Certification:login.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/Register", name="register")
     */
    public function RegisterAction()
    {
        
        $user = new User();
        $form = $this->createForm( RegisterType::class, $user );
        
        
        return $this->render('AppBundle:Certification:register.html.twig', array(
           'form' => $form->createView()
        ));
    }

    /**
     * @Route("/Logout", name="logout")
     */
    public function LogoutAction()
    {
        return $this->render('AppBundle:Certification:logout.html.twig', array(
            // ...
        ));
    }
    
    /**
     * @Route("/Help", name="help")
     */
    public function HelpAction()
    {
        return $this->render('AppBundle:Certification:help.html.twig', array(
            // ...
        ));
    }

}
