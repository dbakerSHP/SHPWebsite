<?php

namespace SiteBundle\Controller;

use SiteBundle\Entity\Contact;
use SiteBundle\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class FormProcessController extends Controller
{
    public function contactProcessAction(Request $request)
    {

        //This is optional. Do not do this check if you want to call the same action using a regular request.
//        if (!$request->isXmlHttpRequest()) {
//            return new JsonResponse(array('message' => 'You can access this only using Ajax!'), 400);
//        }

        $entity = new Contact();
        $form = $this->createForm(new ContactType(), $entity);
        $form->handleRequest($request);

        $name = $form->get('fullName')->getData();
        $email = $form->get('email')->getData();
        $phone = $form->get('phone')->getData();
        $message = $form->get('message')->getData();

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity->setFullName($name);
            $entity->setEmail($email);
            $entity->setPhone($phone);
            $entity->setMessage($message);
            $entity->setCreatedDate(new \DateTime());
            $em->persist($entity);
            $em->flush();

            //Redirect the user and add a thank you message
            $email_message = \Swift_Message::newInstance()
                ->setSubject($this->container->getParameter('company_name') . ' - Contact')
                ->setTo($this->container->getParameter('send_emails_to'))
                ->setFrom(array($this->container->getParameter('swiftmailer.sender_address') => $this->container->getParameter('company_name')))
                ->setBody(
                    $this->renderView(
                        'SiteBundle:Mail:contact.html.twig',
                        array(
                            'ip' => $request->getClientIp(),
                            'fullName' => $name,
                            'email' => $email,
                            'phone' => $phone,
                            'message' => $message
                        )
                    )
                );

            $this->get('mailer')->send($email_message);

            return new JsonResponse(array('status' => 'true', 'data' => 'Thank you ' . $name . '. Your email was successfully sent!'), 200);
        }

        return new JsonResponse(array('status' => 'true', 'data' => 'Sorry ' . $name . '. Your email was not sent. Please re-submit the form.'), 400);

    }

}
