<?php

namespace PsychoBundle\Controller;

use PsychoBundle\Entity\Psycho;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Psycho controller.
 *
 */
class PsychoController extends Controller
{
    /**
     * Lists all psycho entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $psychos = $em->getRepository('PsychoBundle:Psycho')->findAll();

        return $this->render('@Psycho/psycho/index.html.twig', array(
            'psychos' => $psychos,
        ));
    }

    /**
     * Creates a new psycho entity.
     *
     */
    public function newAction(Request $request)
    {
        $psycho = new Psycho();
        $form = $this->createForm('PsychoBundle\Form\PsychoType', $psycho);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($psycho);
            $em->flush($psycho);

            return $this->redirectToRoute('psycho_show', array('id' => $psycho->getId()));
        }

        return $this->render('@Psycho/psycho/new.html.twig', array(
            'psycho' => $psycho,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a psycho entity.
     *
     */
    public function showAction(Psycho $psycho)
    {
        $deleteForm = $this->createDeleteForm($psycho);

        return $this->render('@Psycho/psycho/show.html.twig', array(
            'psycho' => $psycho,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing psycho entity.
     *
     */
    public function editAction(Request $request, Psycho $psycho)
    {
        $deleteForm = $this->createDeleteForm($psycho);
        $editForm = $this->createForm('PsychoBundle\Form\PsychoType', $psycho);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('psycho_edit', array('id' => $psycho->getId()));
        }

        return $this->render('@Psycho/psycho/edit.html.twig', array(
            'psycho' => $psycho,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a psycho entity.
     *
     */
    public function deleteAction(Request $request, Psycho $psycho)
    {
        $form = $this->createDeleteForm($psycho);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($psycho);
            $em->flush($psycho);
        }

        return $this->redirectToRoute('psycho_index');
    }

    /**
     * Creates a form to delete a psycho entity.
     *
     * @param Psycho $psycho The psycho entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Psycho $psycho)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('psycho_delete', array('id' => $psycho->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
