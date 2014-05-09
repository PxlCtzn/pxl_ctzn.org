<?php

namespace PxlCtzn\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    public function indexAction()
    {
        return $this->render('PxlCtznHomeBundle:Default:index.html.twig');
    }
}