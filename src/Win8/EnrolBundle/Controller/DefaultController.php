<?php

namespace Win8\EnrolBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('Win8EnrolBundle:Default:index.html.twig', array('name' => $name));
    }
    public function showAction()
    {
        return $this->render('Win8EnrolBundle:Default:index.html.twig', []);
    }
}
