<?php

namespace SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PrivacyPolicyController extends Controller
{
    public function privacyPolicyAction()
    {
        return $this->render('SiteBundle:PrivacyPolicy:privacyPolicy.html.twig', array(
                // ...
            ));    }

}
