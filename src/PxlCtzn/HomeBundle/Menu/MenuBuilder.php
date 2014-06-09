<?php

namespace PxlCtzn\HomeBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAware;

class MenuBuilder extends ContainerAware
{

    /**
     * @param FactoryInterface $factory
     * @param array $options
     * @return \Knp\Menu\ItemInterface
     */
    public function homeMenu(FactoryInterface $factory, array $options){
		$menu = $factory->createItem('root');
		$menu->setChildrenAttribute('class', 'nav');

        $menu->addChild('Pxl Ctzn', array('route' => 'blog_homepage'))
             ->setAttribute('id', 'brand');

		$menu->addChild('Blog', array('route' => 'blog_homepage'))
             ->setAttribute('class', 'menu-item')
			 ->setAttribute('icon', 'fa-file-text-o');
			 
		$menu->addChild('Projects', array('route' => 'blog_homepage'))
             ->setAttribute('class', 'menu-item')
			 ->setAttribute('icon', 'fa-wrench');
			 
		$menu->addChild('Git', array('route' => 'blog_homepage'))
             ->setAttribute('class', 'menu-item')
			 ->setAttribute('icon', 'fa-github');
			 
		$menu->addChild('Calendar', array('route' => 'blog_homepage'))
            ->setAttribute('class', 'menu-item')
			 ->setAttribute('icon', 'fa-calendar-o');
			 
		return $menu;
	}
}