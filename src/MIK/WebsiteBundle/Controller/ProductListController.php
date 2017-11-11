<?php

namespace MIK\WebsiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ProductListController extends Controller
{
    /**
     * @Route("/product/{productName}/{productType}")
     */
    public function showProductAction()
    {
        return $this->render('MIKWebsiteBundle:ProductList:show_product.html.twig', array(
            // ...
        ));
    }

}
