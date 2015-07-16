<?php

namespace SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ForPhysiciansController extends Controller
{
    public function forPhysiciansAction()
    {
        return $this->render('SiteBundle:ForPhysicians:forPhysicians.html.twig', array(
                // ...
            ));    }

}
