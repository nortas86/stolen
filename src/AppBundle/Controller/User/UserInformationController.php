<?php

namespace AppBundle\Controller\User;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\UserInformation;
use AppBundle\Form\UserInformationType;

/**
 * UserInformation controller.
 *
 * @Route("/userinformation")
 */
class UserInformationController extends Controller
{
    
    /**
     * Creates a new UserInformation entity.
     *
     * @Route("/replace", name="userinformation_replace")
     * @Method({"GET", "POST"})
     */
    public function replaceAction( Request $request ){
        
        $user_id = $this->getUser()->getId();
        
        $em = $this->getDoctrine()->getManager();

        $userInformation = $em->getRepository('AppBundle:UserInformation')->findOneById( $user_id );
        
        if( $userInformation ){
            $editForm = $this->createForm('AppBundle\Form\UserInformationType', $userInformation);
            $editForm->handleRequest($request);

            if ($editForm->isSubmitted() && $editForm->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($userInformation);
                $em->flush();

                return $this->redirectToRoute('userinformation_replace');
            }

            return $this->render('AppBundle:UserInformation:replace.html.twig', array(
                'userInformation' => $userInformation,
                'form' => $editForm->createView(),

            ));
        }else{
            $userInformation = new UserInformation();
            $userInformation->setid( $user_id );
            $form = $this->createForm('AppBundle\Form\UserInformationType', $userInformation);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($userInformation);
                $em->flush();

                return $this->redirectToRoute('userinformation_replace');
            }

            return $this->render('AppBundle:UserInformation:replace.html.twig', array(
                'userInformation' => $userInformation,
                'form' => $form->createView(),
            ));
        } 
    }
    
}
