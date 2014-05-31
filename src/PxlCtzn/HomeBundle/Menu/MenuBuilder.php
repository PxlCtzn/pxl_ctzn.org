<?php

namespace PxlCtzn\HomeBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAware;

class MenuBuilder extends ContainerAware
{
    public function homeMenu(FactoryInterface $factory, array $options){
		$menu = $factory->createItem('root');
		$menu->setChildrenAttribute('class', 'nav');
		
		$menu->addChild('Blog', array('route' => 'blog_homepage'))
			 ->setAttribute('icon', 'icon-file-text-o')
			 ->setAttribute('color','red');
			 
		$menu->addChild('Projects', array('route' => 'blog_homepage'))
			 ->setAttribute('icon', 'icon-wrench')
			 ->setAttribute('color','green');
			 
		$menu->addChild('Git', array('route' => 'blog_homepage'))
			 ->setAttribute('icon', 'icon-github')
			 ->setAttribute('color','orange');
			 
		$menu->addChild('Calendar', array('route' => 'blog_homepage'))
			 ->setAttribute('icon', 'icon-calendar-o')
			 ->setAttribute('color','pink');
			 
		return $menu;
	}
}