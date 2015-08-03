<?php

namespace MyStaticBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $pagename = 'Homepage';

        return $this->render('MyStaticBundle:Default:index.html.twig', array(
            'pagename' => $pagename
        ));
    }
}
