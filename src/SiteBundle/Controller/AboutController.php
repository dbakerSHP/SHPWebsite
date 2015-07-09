<?php

namespace SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AboutController extends Controller
{
    public function aboutAction()
    {
        return $this->render('SiteBundle:About:about.html.twig', array(
                // ...
            ));    }

    public function shpMembersAction()
    {
        return $this->render('SiteBundle:About:shpMembers.html.twig', array(
                // ...
            ));    }

    public function shpHonorHealthAction()
    {
        return $this->render('SiteBundle:About:shpHonorHealth.html.twig', array(
                // ...
            ));    }

    public function physicianDirectoryAction()
    {
        return $this->render('SiteBundle:About:physicianDirectory.html.twig', array(
                // ...
            ));    }

}
