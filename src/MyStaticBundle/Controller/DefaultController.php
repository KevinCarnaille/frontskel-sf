<?php

namespace MyStaticBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {

        //SEO Sonata override//
        $seoPage = $this->container->get('sonata.seo.page');
        $seoPage
            ->setTitle("Homepage - Front-End Skeleton")
            ->addMeta('name', 'keywords', "Front-end, symfony2")
            ->addMeta('name', 'description', "Front-End Skeleton demo for new projects")
            ->addMeta('property', 'og:title', "Homepage - Front-End Skeleton")
            ->addMeta('property', 'og:type', 'blog')
            ->addMeta('property', 'og:url',  $this->generateUrl('homepage',array(),true))
            ->addMeta('property', 'og:description', "Front-End Skeleton demo for new projects")
        ;
        // END //
        return $this->render('MyStaticBundle:Default:index.html.twig');
    }
}
