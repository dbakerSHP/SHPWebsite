<?php

namespace SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TermsOfUseController extends Controller
{
    public function tosAction()
    {
        return $this->render('SiteBundle:TermsOfUse:tos.html.twig', array(
                // ...
            ));    }

}
