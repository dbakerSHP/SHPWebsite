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

		/**
		 * Home
		 */
		$menu->addChild('Home', array('route' => 'homepage'));

		/**
		 * About Us
		 */
		$menu->addChild('About Us', array('route' => 'about'))
			->addChild('SHP Members', array('route' => 'shp_members'))->getParent()
			->addChild('SHP & HonorHealth', array('route' => 'shp_honor_health'))->getParent()
		;

		/**
		 * About Us > Scottsdale Health Partners & Honor Health
		 */
		$menu['About Us']['SHP & HonorHealth']
			->addChild('Physician Directory', array('route' => 'physician_directory'))->getParent()
			->addChild('Learn More', array('route' => 'shp_honor_health'))->getParent()
		;

		/**
		 * Clinical Integration
		 */
		$menu->addChild('Clinical Integration', array('route' => 'clinical_integration'))
			->addChild('What is Clinical Integration', array('route' => 'clinical_integration'))->getParent()
			->addChild('SHP Clinical Integration Success', array('route' => 'shp_clinical_integration_success'))->getParent()
		;

		/**
		 * ACO
		 */
		$menu->addChild('ACO', array('route' => '_a_c_o'))
			->addChild('What is and ACO', array('route' => 'what_is_an_a_c_o'))->getParent()
			->addChild('SHP ACO', array('route' => '_a_c_o'))->getParent()
		;

		/**
		 * Technology
		 */
		$menu->addChild('Technology', array('route' => 'technology'));

		/**
		 * News
		 */
		$menu->addChild('News', array('route' => 'news'));

		/**
		 * Contact Us
		 */
		$menu->addChild('Contact Us', array('route' => 'contact'));

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

}