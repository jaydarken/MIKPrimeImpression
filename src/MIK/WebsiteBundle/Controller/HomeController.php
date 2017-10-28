<?php

namespace MIK\WebsiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use FOS\UserBundle\Controller\SecurityController as BaseController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends BaseController 
{
    /**
     * @Route("/")
     */
    public function homeAction()
    {
        return $this->render('MIKWebsiteBundle:Home:home.html.twig', array(
        ));
    }

}
