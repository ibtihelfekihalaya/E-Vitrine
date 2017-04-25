<?php

namespace EVitrine\DashboardBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EVitrineDashboardBundle:Default:index.html.twig');
    }
}
