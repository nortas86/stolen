<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Bike;
use AppBundle\Form\BikeType;

/**
 * Bike controller.
 *
 * @Route("/bike")
 */
class BikeController extends Controller
{
    /**
     * Lists all Bike entities.
     *
     * @Route("/", name="bike_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $bikes = $em->getRepository('AppBundle:Bike')->findAll();

        return $this->render('bike/index.html.twig', array(
            'bikes' => $bikes,
        ));
    }

    /**
     * Creates a new Bike entity.
     *
     * @Route("/new", name="bike_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $bike = new Bike();
        $form = $this->createForm('AppBundle\Form\BikeType', $bike);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($bike);
            $em->flush();

            return $this->redirectToRoute('bike_show', array('id' => $bike->getId()));
        }

        return $this->render('bike/new.html.twig', array(
            'bike' => $bike,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Bike entity.
     *
     * @Route("/{id}", name="bike_show")
     * @Method("GET")
     */
    public function showAction(Bike $bike)
    {
        $deleteForm = $this->createDeleteForm($bike);

        return $this->render('bike/show.html.twig', array(
            'bike' => $bike,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Bike entity.
     *
     * @Route("/{id}/edit", name="bike_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Bike $bike)
    {
        $deleteForm = $this->createDeleteForm($bike);
        $editForm = $this->createForm('AppBundle\Form\BikeType', $bike);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($bike);
            $em->flush();

            return $this->redirectToRoute('bike_edit', array('id' => $bike->getId()));
        }

        return $this->render('bike/edit.html.twig', array(
            'bike' => $bike,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Bike entity.
     *
     * @Route("/{id}", name="bike_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Bike $bike)
    {
        $form = $this->createDeleteForm($bike);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($bike);
            $em->flush();
        }

        return $this->redirectToRoute('bike_index');
    }

    /**
     * Creates a form to delete a Bike entity.
     *
     * @param Bike $bike The Bike entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Bike $bike)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('bike_delete', array('id' => $bike->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
