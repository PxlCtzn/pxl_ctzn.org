<?php

namespace PxlCtzn\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('PxlCtznBlogBundle:Default:index.html.twig', array('name' => $name));
    }
}
