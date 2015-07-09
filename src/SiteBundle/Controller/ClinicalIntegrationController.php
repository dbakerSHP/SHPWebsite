<?php

namespace SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ClinicalIntegrationController extends Controller
{
    public function clinicalIntegrationAction()
    {
        return $this->render('SiteBundle:ClinicalIntegration:clinicalIntegration.html.twig', array(
                // ...
            ));    }

    public function shpClinicalIntegrationSuccessAction()
    {
        return $this->render('SiteBundle:ClinicalIntegration:shpClinicalIntegrationSuccess.html.twig', array(
                // ...
            ));    }

}
