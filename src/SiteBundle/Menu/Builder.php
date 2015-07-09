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

		$menu->addChild('Home', array('route' => 'homepage'));

		// access services from the container!
		$em = $this->container->get('doctrine')->getManager();
		// findMostRecent and Blog are just imaginary examples
//		$blog = $em->getRepository('AppBundle:Blog')->findMostRecent();

//		$menu->addChild('Latest Blog Post', array(
//			'route' => 'blog_show',
//			'routeParameters' => array('id' => $blog->getId())
//		));

		// create another menu item
//		$menu->addChild('About Me', array('route' => 'about'));
		// you can also add sub level's to your menu's as follows
//		$menu['About Me']->addChild('Edit profile', array('route' => 'edit_profile'));

		// ... add more children

		return $menu;
	}

}