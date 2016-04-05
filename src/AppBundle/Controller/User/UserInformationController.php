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
     * Lists all UserInformation entities.
     *
     * @Route("/", name="userinformation_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $userInformations = $em->getRepository('AppBundle:UserInformation')->findAll();
        
        return $this->render('AppBundle:UserInformation:index.html.twig', array(
            'userInformations' => $userInformations,
        ));
    }

    /**
     * Creates a new UserInformation entity.
     *
     * @Route("/new", name="userinformation_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $userInformation = new UserInformation();
        $form = $this->createForm('AppBundle\Form\UserInformationType', $userInformation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($userInformation);
            $em->flush();

            return $this->redirectToRoute('userinformation_show', array('id' => $userInformation->getId()));
        }

        return $this->render('AppBundle:UserInformation:new.html.twig', array(
            'userInformation' => $userInformation,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a UserInformation entity.
     *
     * @Route("/{id}", name="userinformation_show")
     * @Method("GET")
     */
    public function showAction(UserInformation $userInformation)
    {
        $deleteForm = $this->createDeleteForm($userInformation);

        return $this->render('AppBundle:UserInformation:show.html.twig', array(
            'userInformation' => $userInformation,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing UserInformation entity.
     *
     * @Route("/{id}/edit", name="userinformation_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, UserInformation $userInformation)
    {
        $deleteForm = $this->createDeleteForm($userInformation);
        $editForm = $this->createForm('AppBundle\Form\UserInformationType', $userInformation);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($userInformation);
            $em->flush();

            return $this->redirectToRoute('userinformation_edit', array('id' => $userInformation->getId()));
        }

        return $this->render('AppBundle:UserInformation:edit.html.twig', array(
            'userInformation' => $userInformation,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a UserInformation entity.
     *
     * @Route("/{id}", name="userinformation_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, UserInformation $userInformation)
    {
        $form = $this->createDeleteForm($userInformation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($userInformation);
            $em->flush();
        }

        return $this->redirectToRoute('userinformation_index');
    }

    /**
     * Creates a form to delete a UserInformation entity.
     *
     * @param UserInformation $userInformation The UserInformation entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(UserInformation $userInformation)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('userinformation_delete', array('id' => $userInformation->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
