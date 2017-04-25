<?php

namespace EVitrine\DashboardBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EVitrineDashboardBundle:Default:index.html.twig');
    }
    public function catalogueAction()
    {
        $em= $this->getDoctrine()->getManager();
        $products= $em->getRepository("EVitrineDashboardBundle:Product")->findAll();
        return $this->render('EVitrineDashboardBundle:Default:catalogue.html.twig',array("products"=>$products));
    }
    public function headerAction()
    {
        return $this->render('EVitrineDashboardBundle:Default:header.html.twig');
    }
    
    public function sideBarAction()
    {
        $user= $this->getUser();
        return $this->render('EVitrineDashboardBundle:Default:sideBar.html.twig',array("user"=>$user));
    }
}
