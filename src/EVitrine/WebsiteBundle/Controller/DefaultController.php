<?php

namespace EVitrine\WebsiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EVitrineWebsiteBundle:Default:index.html.twig');
    }
    public function productsAction()
    {
        $em= $this->getDoctrine()->getManager();
        $products= $em->getRepository("EVitrineDashboardBundle:Product")->findBy(array("isVisible"=>true));
        return $this->render('EVitrineWebsiteBundle:Default:products.html.twig',array("products"=>$products));
    }
    public function productAction($id)
    {
        $em= $this->getDoctrine()->getManager();
        $product= $em->getRepository("EVitrineDashboardBundle:Product")->find($id);
        return $this->render('EVitrineWebsiteBundle:Default:product.html.twig',array("product"=>$product));
    }
}
