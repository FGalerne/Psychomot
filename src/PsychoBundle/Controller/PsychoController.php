<?php

namespace PsychoBundle\Controller;

use PsychoBundle\Entity\Psycho;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use PsychoBundle\Form\PsychoType;

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

        return $this->render('PsychoBundle:psycho:index.html.twig', array(
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

        return $this->render('PsychoBundle:psycho:new.html.twig', array(
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

        return $this->render('PsychoBundle:psycho:show.html.twig', array(
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
            $em = $this->getDoctrine()->getManager();
            $em->persist($psycho);
            $em->flush();

            return $this->redirectToRoute('psycho_edit', array('id' => $psycho->getId()));
        }

        return $this->render('PsychoBundle:psycho:edit.html.twig', array(
            'psycho' => $psycho,
            'form' => $editForm->createView(),
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
    public function mailAction()
    {
        $Request = $this->getRequest();
        if ($Request->getMethod() == "POST") {
            $subject = $Request->get("object");

            $message = "Vous avez reçu un message de :". $Request->get("lastname")." ".$Request->get("firstname")
                . "\n". $Request->get("email") ."\n\n".$Request->get("message");

            $message = \Swift_Message::newInstance('Test')
                ->setSubject($subject)
                ->setFrom(array('psychomot72@gmail.com' =>'Site internet'))
                ->setTo(array('mcharrier.psychomot@gmail.com', 'aflorentin.psychomot@gmail.com'))
                ->setBody($message);
            $this->get('mailer')->send($message);

        }
        return $this->render('PsychoBundle:psycho:mail.html.twig');
    }
}
