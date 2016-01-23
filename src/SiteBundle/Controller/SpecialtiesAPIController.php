<?php
/**
 * Created by PhpStorm.
 * User: jstgermain
 * Date: 1/21/16
 * Time: 11:57 AM
 */

namespace SiteBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\View\View;
use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\Annotations\Post;

class SpecialtiesAPIController extends FOSRestController
{
	
	/**
	 * @Get("/specialties")
	 */
	public function apiAllSpecialtiesAction()
	{
		$specialties = $this->getDoctrine()
			->getRepository('SiteBundle:Specialties')
			->getAllSpecialties();

		$view = View::create()
			->setFormat('json')
			->setStatusCode(200)
			->setData(['specialties' => $specialties])
		;

		return $this->get('fos_rest.view_handler')->handle($view);
	}

}