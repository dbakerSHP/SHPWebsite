<?php

namespace SiteBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\View\View;
use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\Annotations\Post;

class PhysicianAPIController extends FOSRestController
{

	/**
	 * @Get("/physician-directory")
	 */
	public function apiAllPracticesAction()
	{
		$practices = $this->getDoctrine()
			->getRepository('SiteBundle:Practices')
//			->getAllPracticesAndPhysicians();
			->getAllPractices();

		$view = View::create()
			->setFormat('json')
			->setStatusCode(200)
			->setData(['practices' => $practices])
		;

		return $this->get('fos_rest.view_handler')->handle($view);
	}

	/**
	 * @Get("/physician-directory/{practiceId}/{practiceLocationId}")
	 */
	public function apiAllPhysiciansByBusinessAction($practiceId, $practiceLocationId)
	{
		$practices = $this->getDoctrine()
			->getRepository('SiteBundle:PracticesHasPhysicians')
			->getPracticebyLocationId($practiceId, $practiceLocationId);

		$view = View::create()
			->setFormat('json')
			->setStatusCode(200)
			->setData(['practices' => $practices])
		;

		return $this->get('fos_rest.view_handler')->handle($view);
	}

}
