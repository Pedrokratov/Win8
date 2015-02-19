<?php
/**
 * Created by PhpStorm.
 * User: piotr
 * Date: 18.02.15
 * Time: 16:04
 */

namespace Win8\LayoutBundle\Menu;


use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAware;


class Builder extends ContainerAware
{
    public function mainMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');
        $menu->setChildrenAttribute('class', 'nav navbar-nav');
        $menu->addChild('Zgłoszenie', ['route' => 'register_participant']);
        $menu->addChild('Administracja', ['uri' => '#'])
            ->setAttribute('class', 'btn-group')
            ->setLinkAttribute('class', 'btn dropdown-toggle')
            ->setLinkAttribute('data-toggle', 'dropdown')
            ->setChildrenAttribute('class', 'dropdown-menu');
        $menu['Administracja']->addChild('Terminy', ['route' => 'show_all_termins']);
        $menu['Administracja']->addChild('Zgłoszenia', ['route' => 'show_all']);

        return $menu;
    }




}