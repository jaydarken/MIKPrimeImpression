<?php

namespace MIK\WebsiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use MIK\WebsiteBundle\Entity\Product;

class ProductListController extends Controller
{

    /**
     * @Route("/product")
     */
    public function showProductAction()
    {
        $products = [
            'Refrigerator/Freezer' => [
                    'Vertical Type',
                    'Horizontal Type',
                    'Multipurpose',
                    'Table Type',
                    'Side Refrigerator',
                    'Water Storage Refrigerator',

                ],
            'Gas Stove, Fryer, Burner' => [
                    'Commercial Gas',
                    'Grill/Griddle/Oven',
                    'Fryer',
                    'Gas Neutralization',

                ],
            'Sink/Counter' => [

                ],
            'Serving Cart/Moving Cart' => [

                ],
            'Office' => [

                ],
            'Security' => [

                ],
            'Vault' => [

                ],
            'Construction Materials' => [

                ]
        ];
        return $this->render('MIKWebsiteBundle:ProductList:show_product.html.twig', [ 
            'products' => $products
        ]);
    }

    /**
     * @Route("/product/{productName}/{productType}")
     */
    public function showProductNameWithTypeAction($productName, $productType)
    {
        $products = $this->getDoctrine()
        ->getRepository(Product::class)
        ->findRequestProductWithType($productName, $productType);

        return $this->render('MIKWebsiteBundle:ProductList:show_product_name_with_type.html.twig', [ 
            'products' => $products
        ]);
    }

    /**
     * @Route("/product/{productName}")
     */
    public function showProductNameAction($productName)
    {
        $products = $this->getDoctrine()
        ->getRepository(Product::class)
        ->findRequestProduct($productName);

        return $this->render('MIKWebsiteBundle:ProductList:show_product_name.html.twig', [ 
            'products' => $products
        ]);
    }


}
