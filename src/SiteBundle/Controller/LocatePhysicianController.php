<?php

namespace SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LocatePhysicianController extends Controller
{
    public function locatePhysicianAction()
    {
        return $this->render('SiteBundle:LocatePhysician:locatePhysician.html.twig', array(
                // ...
            ));    }

}
