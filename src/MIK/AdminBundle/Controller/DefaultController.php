<?php

namespace MIK\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/auth/admin")
     */
    public function indexAction()
    {
        return $this->render('MIKAdminBundle:Default:index.html.twig');
    }
}
