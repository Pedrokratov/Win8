<?php

namespace Win8\EnrolBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Win8\EnrolBundle\Entity\Register;
use Win8\EnrolBundle\Entity\Termin;
use Win8\EnrolBundle\Form\EnrolType;

class EnrolController extends Controller
{
    public function showAllAction()
    {

        return $this->render('Win8EnrolBundle:Enrol:showAll.html.twig', array(
            // ...
        ));    }


    public function registerAction()
    {
        $freeTermins = $this->getDoctrine()
            ->getRepository('Win8EnrolBundle:Termin')->findAll();

        $termins=new \Doctrine\Common\Collections\ArrayCollection();
        foreach($freeTermins as $obj)
        {
            if($obj->getRegisters()->count() < $obj->getAvailableplaceno())
            {
                $termins->add($obj);
            }
        }
        $register = new Register();
        $request = $this->getRequest();
        $form = $this->createForm(new EnrolType($termins),$register);
        $form->handleRequest($request);
        if($form->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($register);
            $em->flush();
            $this->get('session')->getFlashBag()
                ->add('notice', "Rejestracja została pomyślnie zapisana");

            return $this->redirect($this->generateUrl('register_participant'));

        }

        return $this->render('Win8EnrolBundle:Enrol:register.html.twig', array(
                'form'=>$form->createView(),
            ));

    }
    public function listAction()
    {

        $registrations = $this->getDoctrine()
            ->getRepository('Win8EnrolBundle:Register')->findAll();


        return $this->render('Win8EnrolBundle:Enrol:showAll.html.twig', array(
            'registrations'=>$registrations
        ));
    }
    public function deleteAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $guest = $em->getRepository('Win8EnrolBundle:Register')->find($id);

        if (!$guest) {
            throw $this->createNotFoundException('No guest found for id '.$id);
        }

        $em->remove($guest);
        $em->flush();
        $registrations = $this->getDoctrine()
            ->getRepository('Win8EnrolBundle:Register')->findAll();
        return $this->render('Win8EnrolBundle:Enrol:showAll.html.twig', array(
            'registrations'=>$registrations
        ));
    }
    public function summaryAction()
    {

        return $this->render('Win8EnrolBundle:Enrol:report.html.twig', array(
            'registration'=>$this->registration
        ));

    }
}

