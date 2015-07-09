<?php

namespace SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TechnologyController extends Controller
{
    public function technologyAction()
    {
        return $this->render('SiteBundle:Technology:technology.html.twig', array(
                // ...
            ));    }

}
