<?php
/**
 * Created by Justin St. Germain
 * Date: 6/9/15
 * Time: 8:29 PM
 */

namespace SiteBundle\Bundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use SiteBundle\Entity\Practices;

class LoadDefaultBusinesses implements FixtureInterface
{

	public function load(ObjectManager $manager)
	{

		// Initiate the Practices Entity
		$practice = new Practices();
		
		$practice->setPractice("21st Century Oncology of Arizona")->setAddress1("334 E. Hatcher Road")->setCity("Phoenix")->setState("AZ")->setZip("85020")->setLatitude("33.57170")->setLongitude("-112.06798")->setPhone("(602) 944-0677");
		$manager->persist($practice);

		$practice->setPractice("21st Century Oncology of Arizona")->setAddress1("7340 E. Thomas Road")->setState("Scottsdale")->setCity("AZ")->setZip("85251")->setLatitude("33.48080")->setLongitude("-111.92263")->setPhone("(480) 945-6896");
		$manager->persist($practice);

		$practice->setPractice("4C Medical Group")->setAddress1("11000 N. Scottsdale Rd.")->setAddress2("Ste. 120")->setCity("Scottsdale")->setState("AZ")->setZip("85254")->setLatitude("33.58693")->setLongitude("-111.92674")->setPhone("(480) 455-3000");
		$manager->persist($practice);

		$practice->setPractice("4C Medical Group")->setAddress1("4045 E Bell Road")->setAddress2("Suite 105")->setCity("Phoenix")->setState("AZ")->setZip("85032")->setLatitude("33.63991")->setLongitude("-111.99474")->setPhone("(602)923-6666");
		$manager->persist($practice);

		$practice->setPractice("A.O.A. Paradise Valley OBGYN")->setAddress1("10261 N. 92nd St.")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.57900")->setLongitude("-111.87908")->setPhone("(480) 443-4437");
		$manager->persist($practice);

		$practice->setPractice("Admire Plastic Surgery")->setAddress1("7231 E. Princess Blvd")->setAddress2("Suite 211")->setCity("Scottsdale")->setState("AZ")->setZip("85255")->setLatitude("33.64671")->setLongitude("-111.92208")->setPhone("(480) 946-3155");
		$manager->persist($practice);

		$practice->setPractice("Advanced Fertility Care")->setAddress1("1550 S Alma School Rd")->setAddress2("Ste. 100")->setCity("Mesa")->setState("AZ")->setZip("85210")->setLatitude("33.38791")->setLongitude("-111.85828")->setPhone("(480) 874-2229");
		$manager->persist($practice);



		// RUN ALL QUERIES
		$manager->flush();

	}

}
