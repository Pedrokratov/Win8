<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // win8_enrol_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'win8_enrol_homepage');
            }

            return array (  '_controller' => 'Win8\\EnrolBundle\\Controller\\DefaultController::showAction',  '_route' => 'win8_enrol_homepage',);
        }

        // register
        if ($pathinfo === '/register') {
            return array (  '_controller' => 'Win8\\EnrolBundle\\Controller\\EnrolController::registerAction',  '_route' => 'register',);
        }

        // show_all
        if ($pathinfo === '/showAll') {
            return array (  '_controller' => 'Win8\\EnrolBundle\\Controller\\EnrolController::showAllAction',  '_route' => 'show_all',);
        }

        // new_termin
        if ($pathinfo === '/newTermin') {
            return array (  '_controller' => 'Win8\\EnrolBundle\\Controller\\TerminController::newTerminAction',  '_route' => 'new_termin',);
        }

        // show_all_termins
        if ($pathinfo === '/showAllTermins') {
            return array (  '_controller' => 'Win8\\EnrolBundle\\Controller\\TerminController::showAllTerminsAction',  '_route' => 'show_all_termins',);
        }

        // win8_layout_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'win8_layout_homepage')), array (  '_controller' => 'Win8\\LayoutBundle\\Controller\\DefaultController::indexAction',));
        }

        // homepage
        if ($pathinfo === '/app/example') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
