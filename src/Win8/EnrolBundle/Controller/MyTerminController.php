<?php

namespace Win8\EnrolBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Win8\EnrolBundle\Entity\Termin;
use Win8\EnrolBundle\Form\TerminType;

class MyTerminController extends Controller
{
    public function newTerminAction()
    {
        $user = $this->getUser();
        if (!$user || !$user->hasRole('ROLE_ADMIN')) {
            return $this->redirect($this->generateUrl('register_participant'));
        }
        $this->get('session')->getFlashBag()->clear();
        $termin = new Termin();
        $request = $this->getRequest();
        $form = $this->createForm(new TerminType(),$termin);
        $form->handleRequest($request);
        if ($form->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($termin);
            $em->flush();
            $this->get('session')->getFlashBag()
                ->add('notice', "Termin został pomyslnie dodany");

            return $this->redirect($this->generateUrl('show_all_termins'));
        }
        return $this->render('Win8EnrolBundle:Termin:newTermin.html.twig', array(
                'form'=>$form->createView()
            ));    }

    public function showAllTerminsAction()
    {
        $user = $this->getUser();
        if (!$user || !$user->hasRole('ROLE_ADMIN')) {
            return $this->redirect($this->generateUrl('register_participant'));
        }

        $allTermins = $this->getDoctrine()
            ->getRepository('Win8EnrolBundle:Termin')->findAll();


        return $this->render('Win8EnrolBundle:Termin:list.html.twig', array(
                'termins'=>$allTermins
            ));    }

    public function deleteAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $guest = $em->getRepository('Win8EnrolBundle:Termin')->find($id);
        $usersAssigned=$guest->getRegisters();
        foreach($usersAssigned as $item)
        {
            $em->remove($item);
            $em->flush();
        }

        if (!$guest) {
            throw $this->createNotFoundException('No guest found for id '.$id);
        }

        $em->remove($guest);
        $em->flush();
        $allTermins = $this->getDoctrine()
            ->getRepository('Win8EnrolBundle:Termin')->findAll();
        return $this->render('Win8EnrolBundle:Termin:list.html.twig', array(
            'termins'=>$allTermins
        ));    }

}
