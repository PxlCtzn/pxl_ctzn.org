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
             ->setAttribute('bg-color', '#43CA67')
             ->setAttribute('icon', 'fa-github');

        $menu->addChild('Calendar', array('route' => 'blog_homepage'))
             ->setAttribute('class', 'menu-item')
             ->setAttribute('icon', 'fa-calendar-o');

        $menu->addChild('type2', array('route' => 'blog_homepage'))
             ->setAttribute('desc', 'Lorem ipsum')
             ->setAttribute('class', 'menu-item');

        $menu->addChild('background only', array('route' => 'blog_homepage'))
             ->setAttribute('class', 'menu-item')
             ->setAttribute('no-text', true)
             ->setAttribute('bg-img', 'http://www.joomlaworks.net/images/demos/galleries/abstract/7.jpg');

        $this->orderByName($menu);

        return $menu;
    }

    /**
     * Order the first level of children by their names.
     * @param ItemInterface $menu The menu to order
     */
    protected function orderByName(ItemInterface $menu){
        $order = array();
        foreach($menu->getChildren() as $name => $data){
            $order[] = $name;
        }
        if(sort($order))
            $menu->reoder($order);
    }
}