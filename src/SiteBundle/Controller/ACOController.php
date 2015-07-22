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

    public function ACORepositoryAction()
    {
        return $this->render('SiteBundle:Aco:acoRepository.html.twig', array(
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
