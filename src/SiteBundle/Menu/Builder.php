<?php
/**
 * Created by Justin St. Germain
 * Date: 7/9/15
 * Time: 8:26 AM
 */

namespace SiteBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAware;

class Builder extends ContainerAware
{
	/**
	 * Main Top Navigation
	 */
	public function mainMenu(FactoryInterface $factory, array $options)
	{

		$menu = $factory->createItem('root');
		$menu->setChildrenAttributes(array('class' => 'nav navbar-nav'));

		/**
		 * Home
		 */
		$menu->addChild('Home', array('route' => 'homepage'));

		/**
		 * About Us
		 */
		$menu->addChild('About Us', array('route' => 'about'))->setAttribute('dropdown', true)->setChildrenAttributes(array('class' => 'dropdown-menu'))
			->addChild('Who is SHP', array('route' => 'about'))->getParent()->setAttribute('dropdown', true)
			->addChild('What We Do', array('route' => 'what_we_do'))->getParent()
		;

		/**
		 * About Us > Who is SHP
		 */
		$menu['About Us']['Who is SHP']->setChildrenAttributes(array('class' => 'dropdown-menu'))
			->addChild('Mission / Vision / Values', array('route' => 'mission_vision_values'))->getParent()
			->addChild('Executive Team', array('route' => 'executive_team'))->getParent()
			->addChild('Board of Managers', array('route' => 'board_of_managers'))->getParent()
		;

		/**
		 * For Patients
		 */
		$menu->addChild('For Patients', array('route' => 'for_patients'))->setAttribute('dropdown', true)->setChildrenAttributes(array('class' => 'dropdown-menu'))
//			->addChild('Our Philosophy', array('route' => 'our_philosophy'))->getParent()
			->addChild('Our Physicians', array('route' => 'our_physicians'))->getParent()
//			->addChild('Our Physicians', array('route' => 'our_physicians'))->getParent()->setAttribute('dropdown', true)
			->addChild('Insurance Plans', array('route' => 'insurance_plans'))->getParent()
			->addChild('Care Management', array('route' => 'care_management'))->getParent()
			->addChild('Hospitals', array('route' => 'hospitals'))->getParent()
		;

		/**
		 * For Patients > Our Physicians
		 */
//		$menu['For Patients']['Our Physicians']->setChildrenAttributes(array('class' => 'dropdown-menu'))
//			->addChild('Physician Directory', array('route' => 'physician_directory'))->getParent()
//		;

		/**
		 * For Physicians
		 */
		$menu->addChild('For Physicians', array('route' => 'for_physicians'));

		/**
		 * Contact Us
		 */
		$menu->addChild('Contact Us', array('route' => 'contact'));

		/**
		 * Contact Icon Toggle
		 */
		$menu->addChild('<span><i class="fa fa-phone"></i></span>', array(
			'uri' => '#',
			'extras' => array(
				'safe_label' => true
			)
		))
			->setLinkAttribute('class', 'header-contact')
			->setAttributes(array('class' => 'hidden-767'));

		/**
		 * Search Link / Icon
		 */
//		$menu->addChild('<span><i class="fa fa-search"></i></span>', array(
//			'uri' => '#',
//			'extras' => array(
//				'safe_label' => true
//			)
//		))
//			->setLinkAttribute('class', 'header-search')
//			->setAttributes(array('class' => 'hidden-767'));


		// access services from the container!
		$em = $this->container->get('doctrine')->getManager();
		// findMostRecent and Blog are just imaginary examples
//		$blog = $em->getRepository('AppBundle:Blog')->findMostRecent();

//		$menu->addChild('Latest Blog Post', array(
//			'route' => 'blog_show',
//			'routeParameters' => array('id' => $blog->getId())
//		));


		// you can also add sub level's to your menu's as follows
//		$menu['About Me']->addChild('Edit profile', array('route' => 'edit_profile'));

		// ... add more children

		return $menu;

	}

	/**
	 * Footer Navigation
	 */
	public function footerMenu(FactoryInterface $factory, array $options)
	{

		$menu = $factory->createItem('root');

		/**
		 * Contact Us
		 */
		$menu->addChild('Contact Us', array('route' => 'contact'));

		/**
		 * Frequently Asked Questions
		 */
//		$menu->addChild('Frequently Asked Questions', array('route' => 'faq'));

		/**
		 * Request Access
		 */
//		$menu->addChild('Request Access', array('route' => 'request_access'));

		/**
		 * Client Portal
		 */
//		$menu->addChild('Client Portal', array('uri' => '#'));

		/**
		 * Locate a Physician
		 */
//		$menu->addChild('Locate a Physician', array('route' => 'physician_directory'));
		$menu->addChild('Locate a Physician', array('route' => 'our_physicians'));

		/**
		 * Terms of Use
		 */
//		$menu->addChild('Terms of Use', array('route' => 'tos'));

		/**
		 * Privacy Policy
		 */
//		$menu->addChild('Privacy Policy', array('route' => 'privacy_policy'));


		/**
		 * Physician Member Login
		 */
		$menu->addChild('Physician Member Login', array('uri' => 'http://www.scottsdalehealthpartners.com'));
		return $menu;

	}

}