<?php

namespace Win8\LayoutBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('Win8LayoutBundle:Default:index.html.twig', array('name' => $name));
    }
}
