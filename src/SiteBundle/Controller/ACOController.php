<?php

namespace SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ACOController extends Controller
{
    public function ACOAction()
    {
        return $this->render('SiteBundle:Aco:aco.html.twig', array(
                // ...
            ));    }

    public function whatIsAnACOAction()
    {
        return $this->render('SiteBundle:Aco:whatIsAnAco.html.twig', array(
                // ...
            ));    }

}
