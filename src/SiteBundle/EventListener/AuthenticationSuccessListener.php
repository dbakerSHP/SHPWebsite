<?php

namespace SiteBundle\EventListener;

/**
 * Created by PhpStorm.
 * User: jstgermain
 * Date: 10/2/15
 * Time: 1:35 PM
 */

class AuthenticationSuccessListener
{

	/**
	 * @param AuthenticationSuccessEvent $event
	 */
	public function onAuthenticationSuccessResponse(AuthenticationSuccessEvent $event)
	{
		$data = $event->getData();
		$user = $event->getUser();

		if (!$user instanceof Acme\Bundle\UserBundle\Entity\User) {
			return;
		}

		$data['profile'] = [
			'firstname' => $user->getFirstName(),
			'lastname'  => $user->getLastName(),
			'roles'     => $user->getRoles(),
		];

		$event->setData($data);
	}
}