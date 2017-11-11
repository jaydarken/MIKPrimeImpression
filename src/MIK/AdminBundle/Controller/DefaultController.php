<?php

namespace MIK\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use MIK\WebsiteBundle\Entity\Product;
use MIK\AdminBundle\Form\ProductType;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/auth/admin")
     */
    public function indexAction()
    {
        return $this->render('MIKAdminBundle:Default:index.html.twig');
    }

    /**
     * @Route("/auth/admin/add_product", name="addProduct")
     */
    public function addProductAction(Request $request)
    {
        $product = new Product(); 
        $form = $this->createForm(ProductType::class, $product);

        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $product = $form->getData();
    
            $em = $this->getDoctrine()->getManager();
            $em->persist($product);
            $em->flush();
    
            return $this->redirectToRoute('addProduct');
        }

        return $this->render('MIKAdminBundle:Default:add_product.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
