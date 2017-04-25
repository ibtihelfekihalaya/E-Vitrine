<?php

namespace Evitrine\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EvitrineSiteBundle:Default:index.html.twig');
    }
}
