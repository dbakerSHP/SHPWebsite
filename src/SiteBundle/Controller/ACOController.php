<?php

namespace SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ACOController extends Controller
{
    public function ACOAction()
    {
        return $this->render('SiteBundle:Aco:aco.html.twig', array(
                // ...
            ));
    }



    /**
     * NEW ACTIONS
     */

    public function ACOReportingAction()
    {
        return $this->render('SiteBundle:Aco:acoReporting.html.twig', array(
            // ...
        ));
    }

    public function ACOParticipationAction()
    {
        return $this->render('SiteBundle:Aco:acoParticipation.html.twig', array(
            // ...
        ));
    }

}
