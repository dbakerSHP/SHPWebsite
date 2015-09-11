<?php

namespace SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ForPatientsController extends Controller
{
    public function forPatientsAction()
    {
        return $this->render('SiteBundle:ForPatients:forPatients.html.twig', array(
                // ...
            ));
    }

    public function ourPhilosophyAction()
    {
        return $this->render('SiteBundle:ForPatients:ourPhilosophy.html.twig', array(
                // ...
            ));
    }

    public function ourPhysiciansAction()
    {
        return $this->render('SiteBundle:ForPatients:ourPhysicians.html.twig', array(
                // ...
            ));
    }

    public function physicianDirectoryAction()
    {
        return $this->render('SiteBundle:ForPatients:physicianDirectory.html.twig', array(
                // ...
            ));
    }

    public function insurancePlansAction()
    {
        return $this->render('SiteBundle:ForPatients:insurancePlans.html.twig', array(
                // ...
            ));
    }

    public function careManagementAction()
    {
        return $this->render('SiteBundle:ForPatients:careManagement.html.twig', array(
                // ...
            ));
    }

    public function hospitalsAction()
    {
        return $this->render('SiteBundle:ForPatients:hospitals.html.twig', array(
                // ...
            )
        );
    }

}
