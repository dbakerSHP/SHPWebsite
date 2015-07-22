<?php

namespace SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AboutController extends Controller
{
    public function aboutAction()
    {
        return $this->render('SiteBundle:About:about.html.twig', array(
                // ...
            )
        );
    }




    /**
     * NEW ACTIONS
     */

    public function missionVisionValuesAction()
    {
        return $this->render('SiteBundle:About:missionVisionValues.html.twig', array(
                // ...
            )
        );
    }

    public function executiveTeamAction()
    {
        return $this->render('SiteBundle:About:executiveTeam.html.twig', array(
                // ...
            )
        );
    }

    public function boardOfDirectorsAction()
    {
        return $this->render('SiteBundle:About:boardOfDirectors.html.twig', array(
                // ...
            )
        );
    }

    public function whatWeDoAction()
    {
        return $this->render('SiteBundle:About:whatWeDo.html.twig', array(
                // ...
            )
        );
    }

}
