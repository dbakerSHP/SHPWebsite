<?php

namespace SiteBundle\Controller;

use SiteBundle\Entity\Contact;
use SiteBundle\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ContactController extends Controller
{

    public function contactAction()
    {


        //Create a new user details entity instance
        $contact = new Contact();
        $contact_form = $this->createForm(new ContactType(), $contact);

        return $this->render('SiteBundle:Contact:contact.html.twig', array(
            'contact' => $contact_form->createView()
        ));

    }

}
