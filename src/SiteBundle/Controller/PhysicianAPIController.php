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
	public function apiAllPhysiciansAction()
	{
		$practices = $this->getDoctrine()
			->getRepository('SiteBundle:Practices')
			->getAllPractices();

		$view = View::create()
			->setFormat('json')
			->setStatusCode(200)
			->setData(['val' => $practices])
		;

		return $this->get('fos_rest.view_handler')->handle($view);
	}

	/**
	 * @Get("/physician-directory/{appleMapId}")
	 */
	public function apiGetBusinessesByIdAction($appleMapId)
	{
		$business = $this->getDoctrine()
			->getRepository('AdminBundle:Business')
			->getBusinessById($appleMapId);

		$view = View::create()
			->setFormat('json')
			->setStatusCode(200)
			->setData(['business' => $business])
		;

		return $this->get('fos_rest.view_handler')->handle($view);
	}


	public function apiGetUsersWithBusinessAction($businessId) {

	}


	/**
	 * @Get("/businesses/{appleMapId}/comment")
	 */
	public function apiGetBusinessCommentByIdAction($appleMapId)
	{

	}

	/**
	 * @Post("/businesses/{appleMapId}/comment")
	 */
	public function apiPostCommentAction($appleMapId)
	{
		$request = $this->get('request_stack')->getCurrentRequest();

		$entityManager = $this->getDoctrine()->getManager();
		$business = $entityManager->getRepository('AdminBundle:Business')
			->findOneBy(['appleMapId' => $appleMapId]);

		if (!$business instanceof Business) {

			$name          = $request->request->get('name');
			$latitude      = $request->request->get('latitude');
			$longitude     = $request->request->get('longitude');
			$address1      = $request->request->get('address1');
			$address2      = $request->request->get('address2');
			$city          = $request->request->get('city');
			$state         = $request->request->get('state');
			$postal        = $request->request->get('postal');
			$phone         = $request->request->get('phone');

			$business      = new Business();

			// REQUIRED
			$business->setAppleMapId($appleMapId);
			$business->setName($name);
			$business->setCreatedDate(new \DateTime());

			// NOT REQUIRED
			if ( $latitude     != null ) { $business->setLatitude($latitude); }
			if ( $longitude    != null ) { $business->setLongitude($longitude); }
			if ( $address1     != null ) { $business->setAddress1($address1); }
			if ( $address2     != null ) { $business->setAddress2($address2); }
			if ( $city         != null ) { $business->setCity($city); }
			if ( $state        != null ) { $business->setState($state); }
			if ( $postal       != null ) { $business->setZip($postal); }
			if ( $phone        != null ) { $business->setPhone($phone); }

			// PREPARE TO SEND BUSINESS INFORMATION TO DATABASE
			$entityManager->persist($business);

			// COMMIT QUERY
			$entityManager->flush();

		}

		$message = $request->request->get('message');

		if ( $message != "/add" ) {
			$comment = new Comment();
			$comment->setBusiness($business);
			$comment->setMessage($message);
			$comment->setCreatedDate(new \DateTime());

			$entityManager->persist($comment);
			$entityManager->flush();


			// GET BUSINESS RATING ENTITY
			$businessRating = new BusinessRatings();
			$businessRating->setBusiness($business);
			$businessRating->setRating($request->request->get('rating'));
			$businessRating->setCreatedDate(new \DateTime());

			$entityManager->persist($businessRating);
			$entityManager->flush();
		} else {
			$comment = 'Business added to database';
			$businessRating = 'No rating given';
		}

		$view = View::create()
			->setFormat('json')
			->setStatusCode(201)
			->setData([
				'business'  => $business,
				'comment'   => $comment,
				'rating'    => $businessRating
			])
		;

		return $this->get('fos_rest.view_handler')->handle($view);
	}

}
