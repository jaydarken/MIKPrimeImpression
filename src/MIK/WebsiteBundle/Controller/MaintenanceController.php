<?php

namespace MIK\WebsiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class MaintenanceController extends Controller
{
    /**
     * @Route("/")
     */
    public function maintenanceAction()
    {
        return $this->render('MIKWebsiteBundle:Maintenance:maintenance.html.twig', array(
            // ...
        ));
    }

}
