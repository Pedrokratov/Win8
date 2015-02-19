<?php

namespace Win8\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $session=$this->get('session')->clear();
        return $this->render('Win8EnrolBundle:Default:index.html.twig');
    }
}
