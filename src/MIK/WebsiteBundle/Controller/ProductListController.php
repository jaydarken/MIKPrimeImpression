<?php

namespace MIK\WebsiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use MIK\WebsiteBundle\Entity\Product;

class ProductListController extends Controller
{
    /**
     * @Route("/product/{productName}/{productType}")
     */
    public function showProductWithTypeAction($productName, $productType)
    {
        $products = $this->getDoctrine()
        ->getRepository(Product::class)
        ->findRequestProductWithType($productName, $productType);

        return $this->render('MIKWebsiteBundle:ProductList:show_product_with_type.html.twig', [ 
            'products' => $products
        ]);
    }

    /**
     * @Route("/product/{productName}")
     */
    public function showProductAction($productName)
    {
        $products = $this->getDoctrine()
        ->getRepository(Product::class)
        ->findRequestProduct($productName);

        return $this->render('MIKWebsiteBundle:ProductList:show_product.html.twig', [ 
            'products' => $products
        ]);
    }


}
