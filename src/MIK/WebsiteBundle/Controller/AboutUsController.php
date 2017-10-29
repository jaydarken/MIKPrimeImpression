<?php

namespace MIK\WebsiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class AboutUsController extends Controller
{
    /**
     * @Route("/aboutus")
     */
    public function aboutUsAction()
    {
        return $this->render('MIKWebsiteBundle:AboutUs:about_us.html.twig', array(
            // ...
        ));
    }

}
