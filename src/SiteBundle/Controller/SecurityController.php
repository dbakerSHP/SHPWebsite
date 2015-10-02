<?php
/**
 * Created by PhpStorm.
 * User: jstgermain
 * Date: 10/2/15
 * Time: 2:24 PM
 */

namespace SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class SecurityController extends Controller
{
	
	/**
	 * @Route("/login_check", name="login_check")
	 */
	public function loginCheckAction()
	{
	}

}