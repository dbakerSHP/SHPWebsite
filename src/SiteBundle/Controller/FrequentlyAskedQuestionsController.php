<?php

namespace SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FrequentlyAskedQuestionsController extends Controller
{
    public function faqAction()
    {
        return $this->render('SiteBundle:FrequentlyAskedQuestions:faq.html.twig', array(
                // ...
            ));    }

}
