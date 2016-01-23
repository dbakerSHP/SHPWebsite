<?php

namespace SiteBundle\Controller;

use Doctrine\DBAL\Types\TextType;
use Proxies\__CG__\SiteBundle\Entity\Practices;
use SiteBundle\Form\PhysicianDirectoryType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use SiteBundle\Entity\Specialties;

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
	    // create a task and give it some dummy data for this example

	    $data = array();
	    $form = $this->createFormBuilder($data)
		    ->add('search_pcp', 'radio', array(
			    'label' => 'Search for PCP',
			    'required' => false,
			    'value' => 'pcp',

		    ))
		    ->add('search_practice', 'text', array(
			    'attr' => array(
				    'placeholder' => 'Practice',
			    ),
			    'required' => false,
		    ))
		    ->add('search_physician', 'text', array(
			    'attr' => array(
				    'placeholder' => 'Physician First Name or Last Name',
			    ),
			    'required' => false,
		    ))
		    ->add('search_specialty', 'entity', array(
			    'class'=>'SiteBundle\Entity\Specialties',
			    'property'=>'specialty',
			    'placeholder' => 'Select a Specialty',
			    'choices_as_values' => true,
			    'required' => false,
		    ))
		    ->add('search_address', 'text', array(
			    'attr' => array(
				    'placeholder' => 'Street Address',
			    ),
			    'required' => false,
		    ))
		    ->add('search_city', 'text', array(
			    'attr' => array(
				    'placeholder' => 'City',
			    ),
			    'required' => false,
		    ))
		    ->add('search_zip', 'text', array(
			    'attr' => array(
				    'placeholder' => 'Zip',
			    ),
			    'required' => false,
		    ))
		    ->add('search_distance', 'choice', array(
			    'choices'  => array(
				    '5' => '5 Miles',
				    '10' => '10 Miles',
				    '25' => '25 Miles',
				    '50' => '50 Miles',
			    ),
			    'choices_as_values' => false,
			    'required' => true,
		    ))
		    ->getForm();

	    return $this->render('SiteBundle:ForPatients:physicianDirectory.html.twig', array(
		    'form' => $form->createView(),
        ));
    }

    public function physiciansInPracticeAction($practiceId, $practiceLocationId)
    {

        $physicians = $this->getDoctrine()
            ->getRepository('SiteBundle:PracticesHasPhysicians')
            ->getPracticebyLocationId($practiceId, $practiceLocationId);

        return $this->render('SiteBundle:ForPatients:physicianDirectory.html.twig', array(
                "physicians"  => $physicians
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
