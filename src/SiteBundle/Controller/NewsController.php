<?php

namespace SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class NewsController extends Controller
{
    public function newsAction()
    {
        return $this->render('SiteBundle:News:news.html.twig', array(
                // ...
            ));    }

}
