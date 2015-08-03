<?php

namespace MyStaticBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{


    public function indexAction()
    {
        return $this->render('MyStaticBundle:Default:index.html.twig');
    }

    public function produitsAction()
    {
        return $this->render('MyStaticBundle:Default:products.html.twig');
    }
}
