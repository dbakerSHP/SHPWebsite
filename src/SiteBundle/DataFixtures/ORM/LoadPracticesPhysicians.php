<?php

/**
 * Created by PhpStorm.
 * User: jstgermain
 * Date: 9/28/15
 * Time: 2:03 PM
 */

namespace SiteBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use SiteBundle\Entity\Practices;
use SiteBundle\Entity\PracticesLocations;
use SiteBundle\Entity\Physicians;
use SiteBundle\Entity\PracticesHasPhysicians;
use SiteBundle\Entity\Specialties;
use SiteBundle\Entity\PhysiciansHasSpecialties;

class LoadPracticesPhysicians extends AbstractFixture implements OrderedFixtureInterface
{
	
	public function getOrder()
	{
		return 4;
	}


	public function load(ObjectManager $manager)
	{

		/**
		 * 21st Century Oncology of Arizona
		 */

		$physician = new Physicians();
		$physician->setFirstName("Ajay")->setLastName("Bhatnagar");
		$manager->persist($physician);
		
		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "21st Century Oncology of Arizona")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.57170", "longitude" => "-112.06798")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians2 = new PracticesHasPhysicians();
		$practicesHasPhysicians2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "21st Century Oncology of Arizona")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.48080", "longitude" => "-111.92263")));
		$manager->persist($practicesHasPhysicians2);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Radiation-Oncology")));
		$manager->persist($physicianHasSpecialties);

		$manager->flush();


		$physician = new Physicians();
		$physician->setFirstName("Vershalee")->setLastName("Shukla");
		$manager->persist($physician);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "21st Century Oncology of Arizona")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.57170", "longitude" => "-112.06798")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians2 = new PracticesHasPhysicians();
		$practicesHasPhysicians2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "21st Century Oncology of Arizona")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.48080", "longitude" => "-111.92263")));
		$manager->persist($practicesHasPhysicians2);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Radiation-Oncology")));
		$manager->persist($physicianHasSpecialties);

		$manager->flush();


		/**
		 * 4C Medical Group
		 */

		$physician_1 = new Physicians();
		$physician_1->setFirstName("Saeed")->setLastName("Behbahani");
		$manager->persist($physician_1);

		$physician_2 = new Physicians();
		$physician_2->setFirstName("Shruti")->setLastName("Chaurasia");
		$manager->persist($physician_2);

		$physician_3 = new Physicians();
		$physician_3->setFirstName("Richard")->setLastName("Ernst");
		$manager->persist($physician_3);

		$physician_4 = new Physicians();
		$physician_4->setFirstName("Rajesh")->setLastName("Soni");
		$manager->persist($physician_4);

		$physician_5 = new Physicians();
		$physician_5->setFirstName("Mark")->setLastName("Stivers");
		$manager->persist($physician_5);

		$physician_1_HasSpecialties = new PhysiciansHasSpecialties();
		$physician_1_HasSpecialties->setPhysician($physician_1)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Hospitalist")));
		$manager->persist($physician_1_HasSpecialties);

		$physician_2_HasSpecialties = new PhysiciansHasSpecialties();
		$physician_2_HasSpecialties->setPhysician($physician_2)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Internal Medicine")));
		$manager->persist($physician_2_HasSpecialties);

		$physician_3_HasSpecialties = new PhysiciansHasSpecialties();
		$physician_3_HasSpecialties->setPhysician($physician_3)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Internal Medicine")));
		$manager->persist($physician_3_HasSpecialties);

		$physician_4_HasSpecialties = new PhysiciansHasSpecialties();
		$physician_4_HasSpecialties->setPhysician($physician_4)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Family Medicine")));
		$manager->persist($physician_4_HasSpecialties);

		$physician_5_HasSpecialties = new PhysiciansHasSpecialties();
		$physician_5_HasSpecialties->setPhysician($physician_5)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Hospitalist")));
		$manager->persist($physician_5_HasSpecialties);

		$practicesHasPhysicians_1 = new PracticesHasPhysicians();
		$practicesHasPhysicians_1->setPhysician($physician_1)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "4C Medical Group")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.58693", "longitude" => "-111.92674")));
		$manager->persist($practicesHasPhysicians_1);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician_2)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "4C Medical Group")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.58693", "longitude" => "-111.92674")));
		$manager->persist($practicesHasPhysicians_2);

		$practicesHasPhysicians_3 = new PracticesHasPhysicians();
		$practicesHasPhysicians_3->setPhysician($physician_3)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "4C Medical Group")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.58693", "longitude" => "-111.92674")));
		$manager->persist($practicesHasPhysicians_3);

		$practicesHasPhysicians_4 = new PracticesHasPhysicians();
		$practicesHasPhysicians_4->setPhysician($physician_4)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "4C Medical Group")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.58693", "longitude" => "-111.92674")));
		$manager->persist($practicesHasPhysicians_4);

		$practicesHasPhysicians_5 = new PracticesHasPhysicians();
		$practicesHasPhysicians_5->setPhysician($physician_5)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "4C Medical Group")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.58693", "longitude" => "-111.92674")));
		$manager->persist($practicesHasPhysicians_5);

		$manager->flush();


		/**
		 * A.O.A. Paradise Valley OBGYN
		 */

		$physician_1 = new Physicians();
		$physician_1->setFirstName("Chelsea")->setLastName("Crum");
		$manager->persist($physician_1);

		$physician_2 = new Physicians();
		$physician_2->setFirstName("Mary")->setLastName("Deka");
		$manager->persist($physician_2);

		$physician_3 = new Physicians();
		$physician_3->setFirstName("Janice")->setLastName("Donnelly");
		$manager->persist($physician_3);

		$physician_4 = new Physicians();
		$physician_4->setFirstName("Robert")->setLastName("Newman");
		$manager->persist($physician_4);

		$physician_1_HasSpecialties = new PhysiciansHasSpecialties();
		$physician_1_HasSpecialties->setPhysician($physician_1)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "OB/GYN")));
		$manager->persist($physician_1_HasSpecialties);

		$physician_2_HasSpecialties = new PhysiciansHasSpecialties();
		$physician_2_HasSpecialties->setPhysician($physician_2)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "OB/GYN")));
		$manager->persist($physician_2_HasSpecialties);

		$physician_3_HasSpecialties = new PhysiciansHasSpecialties();
		$physician_3_HasSpecialties->setPhysician($physician_3)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "OB/GYN")));
		$manager->persist($physician_3_HasSpecialties);

		$physician_4_HasSpecialties = new PhysiciansHasSpecialties();
		$physician_4_HasSpecialties->setPhysician($physician_4)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "OB/GYN")));
		$manager->persist($physician_4_HasSpecialties);

		$practicesHasPhysicians_1 = new PracticesHasPhysicians();
		$practicesHasPhysicians_1->setPhysician($physician_1)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "A.O.A. Paradise Valley OBGYN")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.57900", "longitude" => "-111.87908")));
		$manager->persist($practicesHasPhysicians_1);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician_2)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "A.O.A. Paradise Valley OBGYN")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.57900", "longitude" => "-111.87908")));
		$manager->persist($practicesHasPhysicians_2);

		$practicesHasPhysicians_3 = new PracticesHasPhysicians();
		$practicesHasPhysicians_3->setPhysician($physician_3)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "A.O.A. Paradise Valley OBGYN")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.57900", "longitude" => "-111.87908")));
		$manager->persist($practicesHasPhysicians_3);

		$practicesHasPhysicians_4 = new PracticesHasPhysicians();
		$practicesHasPhysicians_4->setPhysician($physician_4)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "A.O.A. Paradise Valley OBGYN")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.57900", "longitude" => "-111.87908")));
		$manager->persist($practicesHasPhysicians_4);

		$manager->flush();


		/**
		 * Admire Plastic Surgery
		 */

		$physician = new Physicians();
		$physician->setFirstName("Anthony")->setLastName("Admire");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Plastic Surgery")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Admire Plastic Surgery")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.64671", "longitude" => "-111.92208")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Advanced Fertility Care
		 */

		$physician = new Physicians();
		$physician->setFirstName("Frederick")->setLastName("Larsen");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Fertility")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Advanced Fertility Care")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.38791", "longitude" => "-111.85828")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Advanced Fertility Care")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.47995", "longitude" => "-112.04486")));
		$manager->persist($practicesHasPhysicians_2);

		$practicesHasPhysicians_3 = new PracticesHasPhysicians();
		$practicesHasPhysicians_3->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Advanced Fertility Care")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.57561", "longitude" => "-111.87506")));
		$manager->persist($practicesHasPhysicians_3);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Nathaniel")->setLastName("Zoneraich");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Fertility")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Advanced Fertility Care")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.38791", "longitude" => "-111.85828")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Advanced Fertility Care")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.57561", "longitude" => "-111.87506")));
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();


		/**
		 * Affiliated Allergy & Pulmonary Associates
		 */

		$physician = new Physicians();
		$physician->setFirstName("George")->setLastName("Gwinn");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Allergy")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Affiliated Allergy & Pulmonary Associates")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.79867", "longitude" => "-111.95135")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Affiliated Dermatology
		 */

		$physician = new Physicians();
		$physician->setFirstName("Jason")->setLastName("Barr");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Dermatology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Affiliated Dermatology")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.62871", "longitude" => "-112.36137")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Affiliated Dermatology")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.67300", "longitude" => "-111.92368")));
		$manager->persist($practicesHasPhysicians_2);

		$practicesHasPhysicians_3 = new PracticesHasPhysicians();
		$practicesHasPhysicians_3->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Affiliated Dermatology")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.86411", "longitude" => "-112.14240")));
		$manager->persist($practicesHasPhysicians_3);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Richard")->setLastName("Averitte");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Dermatology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Affiliated Dermatology")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.66550", "longitude" => "-112.11826")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Affiliated Dermatology")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.67300", "longitude" => "-111.92368")));
		$manager->persist($practicesHasPhysicians_2);

		$practicesHasPhysicians_3 = new PracticesHasPhysicians();
		$practicesHasPhysicians_3->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Affiliated Dermatology")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.86411", "longitude" => "-112.14240")));
		$manager->persist($practicesHasPhysicians_3);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Christine")->setLastName("Lin");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Dermatology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Affiliated Dermatology")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.67300", "longitude" => "-111.92368")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Affiliated Dermatology")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.86411", "longitude" => "-112.14240")));
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();


		/**
		 * Agave Pediatrics
		 */

		$physician = new Physicians();
		$physician->setFirstName("Rajeev")->setLastName("Agarwal");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Nephrology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Agave Pediatrics")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.65186", "longitude" => "-111.92970")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Agave Pediatrics")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.48019", "longitude" => "-111.92278")));
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Leslie")->setLastName("Mortland");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Nephrology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Agave Pediatrics")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.65186", "longitude" => "-111.92970")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Agave Pediatrics")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.48019", "longitude" => "-111.92278")));
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Nichole")->setLastName("Thomas");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Pediatrics")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Agave Pediatrics")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.65186", "longitude" => "-111.92970")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Agave Pediatrics")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.48019", "longitude" => "-111.92278")));
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();


		/**
		 * Ali Ghazanfare MD PLLC
		 */

		$physician = new Physicians();
		$physician->setFirstName("Ali")->setLastName("Ghazanfari");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "General Surgery")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Ali Ghazanfare MD PLLC")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.3086789", "longitude" => "-111.8755867")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Ali Ghazanfare MD PLLC")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.41370", "longitude" => "-111.69850")));
		$manager->persist($practicesHasPhysicians_2);

		$practicesHasPhysicians_3 = new PracticesHasPhysicians();
		$practicesHasPhysicians_3->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Ali Ghazanfare MD PLLC")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.49146", "longitude" => "-111.91811")));
		$manager->persist($practicesHasPhysicians_3);

		$manager->flush();


		/**
		 * Allergy & Environmental Treatment Center, LLC
		 */

		$physician = new Physicians();
		$physician->setFirstName("Lawrence")->setLastName("Liszewski");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Family Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Allergy & Environmental Treatment Center, LLC")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.58560", "longitude" => "-111.88839")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Allergy, Asthma, and Immunology Associates
		 */

		$physician = new Physicians();
		$physician->setFirstName("Aaron")->setLastName("Davis");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Allergy")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Allergy, Asthma, and Immunology Associates")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.57833", "longitude" => "-111.88141")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Michael")->setLastName("Manning");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Allergy")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Allergy, Asthma, and Immunology Associates")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.57833", "longitude" => "-111.88141")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Allergy, Asthma, and Immunology Associates")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.48617", "longitude" => "-111.91872")));
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();


		/**
		 * Allergy, Ear, Nose, and Throat Center Ltd.
		 */

		$physician = new Physicians();
		$physician->setFirstName("Brian")->setLastName("Lee");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Ear")));
		$manager->persist($physicianHasSpecialties);

		$physicianHasSpecialties_2 = new PhysiciansHasSpecialties();
		$physicianHasSpecialties_2->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Nose")));
		$manager->persist($physicianHasSpecialties_2);

		$physicianHasSpecialties_3 = new PhysiciansHasSpecialties();
		$physicianHasSpecialties_3->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Throat")));
		$manager->persist($physicianHasSpecialties_3);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Allergy, Ear, Nose, and Throat Center Ltd.")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.48736", "longitude" => "-111.92507")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * American Advanced Surgery
		 */

		$physician = new Physicians();
		$physician->setFirstName("Babak")->setLastName("Rashidi");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "General Surgery")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "American Advanced Surgery")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.48898", "longitude" => "-111.92584")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Arizona Arrhythmia Consultants
		 */

		$physician = new Physicians();
		$physician->setFirstName("Renzo")->setLastName("Cataldo");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Cardiac Electrophysiology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Arrhythmia Consultants")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.57821", "longitude" => "-111.88016")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Thomas")->setLastName("Mattioni");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Cardiac Electrophysiology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Arrhythmia Consultants")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.57821", "longitude" => "-111.88016")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("David")->setLastName("Riggio");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Cardiac Electrophysiology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Arrhythmia Consultants")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.57821", "longitude" => "-111.88016")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Arrhythmia Consultants")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.48517", "longitude" => "-111.92141")));
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Michael")->setLastName("Zawaneh");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Cardiac Electrophysiology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Arrhythmia Consultants")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.57821", "longitude" => "-111.88016")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Arrhythmia Consultants")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.48517", "longitude" => "-111.92141")));
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();


		/**
		 * Arizona Asthma and Allergy Institute
		 */

		$physician = new Physicians();
		$physician->setFirstName("Levente")->setLastName("Erdos");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Allergy")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Asthma and Allergy Institute")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.61185", "longitude" => "-111.89742")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Asthma and Allergy Institute")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.37854", "longitude" => "-111.89359")));
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Ronald")->setLastName("Jorgensen");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Allergy")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Asthma and Allergy Institute")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.61185", "longitude" => "-111.89742")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Asthma and Allergy Institute")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.60708", "longitude" => "-112.18150")));
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Joseph")->setLastName("Mittel");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Allergy")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Asthma and Allergy Institute")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.61185", "longitude" => "-111.89742")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Asthma and Allergy Institute")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.51071", "longitude" => "-112.01162")));
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();


		/**
		 * Arizona Bone and Joint Specialists
		 */

		$physician = new Physicians();
		$physician->setFirstName("Philip")->setLastName("To");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Orthopedic Surgeon")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Bone and Joint Specialists")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.61099", "longitude" => "-112.06601")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Bone and Joint Specialists")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.64081", "longitude" => "-111.95928")));
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Brad")->setLastName("Bruns");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Orthopedic Surgeon")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Bone and Joint Specialists")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.61099", "longitude" => "-112.06601")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("David")->setLastName("Camarata");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Orthopedic Surgeon")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Bone and Joint Specialists")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.61099", "longitude" => "-112.06601")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Richard")->setLastName("Martin");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Orthopedic Surgeon")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Bone and Joint Specialists")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.61099", "longitude" => "-112.06601")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Brian")->setLastName("Shafer");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Orthopedic Surgeon")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Bone and Joint Specialists")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.61099", "longitude" => "-112.06601")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Arizona Cardiology Group
		 */

		$physician = new Physicians();
		$physician->setFirstName("Youngsoo")->setLastName("Cho");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Cardiology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Cardiology Group")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.37909", "longitude" => "-111.90104")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Cardiology Group")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.46994", "longitude" => "-112.06835")));
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Mitchell")->setLastName("Ross");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Cardiology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Cardiology Group")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.46994", "longitude" => "-112.06835")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Wazhma")->setLastName("Aslamy");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Cardiology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Cardiology Group")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.67102", "longitude" => "-111.92038")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Gregory")->setLastName("Sanders");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Cardiology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Cardiology Group")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.67102", "longitude" => "-111.92038")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Christina")->setLastName("Reuss");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Cardiology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Cardiology Group")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.67102", "longitude" => "-111.92038")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Daniel")->setLastName("Storch");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Cardiology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Cardiology Group")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.67102", "longitude" => "-111.92038")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Arizona Cardiovascular and Thoracic Surgeons
		 */

		$physician = new Physicians();
		$physician->setFirstName("Rajeev")->setLastName("Kathuria");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Cardiovascular Surgery")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Cardiovascular and Thoracic Surgeons")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.58246", "longitude" => "-111.87362")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Robert")->setLastName("Riley");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Cardiovascular Surgery")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Cardiovascular and Thoracic Surgeons")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.58246", "longitude" => "-111.87362")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Arizona Center for Cancer Care
		 */

		$physician = new Physicians();
		$physician->setFirstName("Ivor")->setLastName("Benjamin");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Gynecologic Oncology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Center for Cancer Care")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.58115", "longitude" => "-111.88368")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Center for Cancer Care")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.61281", "longitude" => "-112.23679")));
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Luci")->setLastName("Chen");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Radiation-Oncology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Center for Cancer Care")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.58115", "longitude" => "-111.88368")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Robert")->setLastName("Kuske");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Radiation-Oncology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Center for Cancer Care")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.58115", "longitude" => "-111.88368")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("James")->setLastName("Marsh");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Radiation-Oncology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Center for Cancer Care")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.58115", "longitude" => "-111.88368")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Annushka")->setLastName("Patel");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Radiation-Oncology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Center for Cancer Care")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.58115", "longitude" => "-111.88368")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Center for Cancer Care")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.67602", "longitude" => "-112.12079")));
		$manager->persist($practicesHasPhysicians_2);

		$practicesHasPhysicians_3 = new PracticesHasPhysicians();
		$practicesHasPhysicians_3->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Center for Cancer Care")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.49120", "longitude" => "-111.92369")));
		$manager->persist($practicesHasPhysicians_3);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Dennis")->setLastName("Scribner");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Gynecologic Oncology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Center for Cancer Care")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.58115", "longitude" => "-111.88368")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Center for Cancer Care")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.61281", "longitude" => "-112.23679")));
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Scott")->setLastName("Tannehill");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Radiation-Oncology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Center for Cancer Care")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.58115", "longitude" => "-111.88368")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Farley")->setLastName("Yang");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Radiation-Oncology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Center for Cancer Care")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.58115", "longitude" => "-111.88368")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Christopher")->setLastName("Biggs");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Radiation-Oncology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Center for Cancer Care")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.61281", "longitude" => "-112.23679")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Terry")->setLastName("Lee");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Radiation-Oncology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Center for Cancer Care")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.61281", "longitude" => "-112.23679")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Marianne")->setLastName("Mildenberger");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Radiation-Oncology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Center for Cancer Care")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.61281", "longitude" => "-112.23679")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Center for Cancer Care")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.65542", "longitude" => "-112.37668")));
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Daniel")->setLastName("Reed");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Hematology-Oncology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Center for Cancer Care")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.61281", "longitude" => "-112.23679")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Center for Cancer Care")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.65542", "longitude" => "-112.37668")));
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Coral")->setLastName("Quiet");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Radiation-Oncology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Center for Cancer Care")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.67602", "longitude" => "-112.12079")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Patrick")->setLastName("Donovan");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Hematology-Oncology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Center for Cancer Care")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.49120", "longitude" => "-111.92369")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("James")->setLastName("Marsh");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Radiation-Oncology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Center for Cancer Care")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.49120", "longitude" => "-111.92369")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Paul")->setLastName("Wassermann");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Hematology-Oncology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Center for Cancer Care")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.49120", "longitude" => "-111.92369")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Scott")->setLastName("Tannehill");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Radiation-Oncology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Center for Cancer Care")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.28478", "longitude" => "-111.75031")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Gregory")->setLastName("Maggass");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Radiation-Oncology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Center for Cancer Care")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.28478", "longitude" => "-111.75031")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Arizona Center for Pain Relief
		 */

		$physician = new Physicians();
		$physician->setFirstName("Julian")->setLastName("Grove");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Pain Management")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Center for Pain Relief")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.67619", "longitude" => "-111.97836")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Peter")->setLastName("Kubitz");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Pain Management")));
		$manager->persist($physicianHasSpecialties);

		$physicianHasSpecialties_2 = new PhysiciansHasSpecialties();
		$physicianHasSpecialties_2->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Pain Management")));
		$manager->persist($physicianHasSpecialties_2);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Center for Pain Relief")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.67619", "longitude" => "-111.97836")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Mark")->setLastName("Rubin");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Pain Management")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Center for Pain Relief")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.67619", "longitude" => "-111.97836")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Arizona Digestive Health
		 */

		$physician = new Physicians();
		$physician->setFirstName("Linda")->setLastName("Shields");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Gastroenterology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Digestive Health")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.58024", "longitude" => "-111.88379")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Bradford")->setLastName("Gelzayd");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Gastroenterology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Digestive Health")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.55708", "longitude" => "-111.89074")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("John")->setLastName("Yalam");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Gastroenterology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Digestive Health")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.57460", "longitude" => "-111.88569")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Daniel")->setLastName("Meline");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Gastroenterology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Digestive Health")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.57394", "longitude" => "-111.88239")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Arizona Eye Specialists
		 */

		$physician = new Physicians();
		$physician->setFirstName("Joseph")->setLastName("Aiello");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Ophthalmology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Eye Specialists")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.48799", "longitude" => "-112.06880")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Eye Specialists")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.48736", "longitude" => "-111.92507")));
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("James")->setLastName("Goldman");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Ophthalmology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Eye Specialists")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.48799", "longitude" => "-112.06880")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Eye Specialists")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.37887", "longitude" => "-111.83471")));
		$manager->persist($practicesHasPhysicians_2);

		$practicesHasPhysicians_3 = new PracticesHasPhysicians();
		$practicesHasPhysicians_3->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Eye Specialists")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.48736", "longitude" => "-111.92507")));
		$manager->persist($practicesHasPhysicians_3);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Thomas")->setLastName("McPhee");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Ophthalmology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Eye Specialists")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.48799", "longitude" => "-112.06880")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Eye Specialists")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.61167", "longitude" => "-112.17987")));
		$manager->persist($practicesHasPhysicians_2);

		$practicesHasPhysicians_3 = new PracticesHasPhysicians();
		$practicesHasPhysicians_3->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Eye Specialists")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.48736", "longitude" => "-111.92507")));
		$manager->persist($practicesHasPhysicians_3);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Craig")->setLastName("Suiter");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Ophthalmology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Eye Specialists")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.48799", "longitude" => "-112.06880")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Eye Specialists")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.48736", "longitude" => "-111.92507")));
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();


		/**
		 * Arizona Gastrointestinal Associates
		 */

		$physician = new Physicians();
		$physician->setFirstName("Jaffrey")->setLastName("Kazi");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Gastroenterology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Gastrointestinal Associates")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.63918", "longitude" => "-111.89318")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Nizar")->setLastName("Ramzan");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Gastroenterology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Gastrointestinal Associates")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.63918", "longitude" => "-111.89318")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Arizona Hand and Wrist Specialists
		 */

		$physician = new Physicians();
		$physician->setFirstName("Mark")->setLastName("Leber");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Hand Surgery")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Hand and Wrist Specialists")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.38416", "longitude" => "-111.72574")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Hand and Wrist Specialists")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.45551", "longitude" => "-111.99031")));
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Scott")->setLastName("Frankel");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Hand Surgery")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Hand and Wrist Specialists")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.45551", "longitude" => "-111.99031")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Hand and Wrist Specialists")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.55411", "longitude" => "-111.89538")));
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();


		/**
		 * Arizona Heart and Lung Surgery
		 */

		$physician = new Physicians();
		$physician->setFirstName("Andrew")->setLastName("Goldstein");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Cardiovascular Surgery")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Heart and Lung Surgery")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.57821", "longitude" => "-111.88016")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Arizona Kidney Disease and Hypertension Center
		 */

		$physician = new Physicians();
		$physician->setFirstName("Esmat")->setLastName("Mustafa");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Nephrology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Kidney Disease and Hypertension Center")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.640261", "longitude" => "-111.999902")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Kidney Disease and Hypertension Center")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.48764", "longitude" => "-111.92426")));
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Hui")->setLastName("Zhao");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Nephrology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Kidney Disease and Hypertension Center")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.640261", "longitude" => "-111.999902")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("David")->setLastName("Burstein");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Nephrology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Kidney Disease and Hypertension Center")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.48764", "longitude" => "-111.92426")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Alejandro")->setLastName("Morales");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Nephrology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Kidney Disease and Hypertension Center")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.48764", "longitude" => "-111.92426")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Yogesh")->setLastName("Amin");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Nephrology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Kidney Disease and Hypertension Center")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.48764", "longitude" => "-111.92426")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Javier")->setLastName("Bibb");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Nephrology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Kidney Disease and Hypertension Center")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.48764", "longitude" => "-111.92426")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Romanita")->setLastName("Nica");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Nephrology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Kidney Disease and Hypertension Center")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.48764", "longitude" => "-111.92426")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Savas")->setLastName("Petrides");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Nephrology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Kidney Disease and Hypertension Center")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.48764", "longitude" => "-111.92426")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Jatinder")->setLastName("Soni");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Nephrology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Kidney Disease and Hypertension Center")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.48764", "longitude" => "-111.92426")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Ann")->setLastName("Thomas");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Nephrology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Kidney Disease and Hypertension Center")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.48764", "longitude" => "-111.92426")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Arizona Neurological Institute
		 */

		$physician = new Physicians();
		$physician->setFirstName("As'ad")->setLastName("Ehtisham");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Neurology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Neurological Institute")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.605566", "longitude" => "-112.283898")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Arizona Neurology and Sleep Center
		 */

		$physician = new Physicians();
		$physician->setFirstName("Jose")->setLastName("De Ocampo");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Neurology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Neurology and Sleep Center")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.58024", "longitude" => "-111.88379")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Arizona Ocular and Facial Plastic Surgery
		 */

		$physician = new Physicians();
		$physician->setFirstName("Dustin")->setLastName("Heringer");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Plastic Surgery")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Ocular and Facial Plastic Surgery")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.48898", "longitude" => "-111.92584")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Arizona Oculoplastic Specialists
		 */

		$physician = new Physicians();
		$physician->setFirstName("Ali")->setLastName("Ghafouri");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Ophthalmology")));
		$manager->persist($physicianHasSpecialties);

		$physicianHasSpecialties_2 = new PhysiciansHasSpecialties();
		$physicianHasSpecialties_2->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Plastic Surgery")));
		$manager->persist($physicianHasSpecialties_2);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Oculoplastic Specialists")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.61537", "longitude" => "-111.89242")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Oculoplastic Specialists")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.37833", "longitude" => "-111.89361")));
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();


		/**
		 * Arizona Oncology Associates
		 */

		$physician = new Physicians();
		$physician->setFirstName("Tania")->setLastName("Cortas");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Hematology-Oncology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Oncology Associates")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.57820", "longitude" => "-111.87864")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Mike")->setLastName("Janicek");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Gynecologic Oncology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Oncology Associates")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.57820", "longitude" => "-111.87864")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Lanny")->setLastName("Hecker");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Hematology-Oncology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Oncology Associates")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.61537", "longitude" => "-111.89242")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Michael")->setLastName("Roberts");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Hematology-Oncology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Oncology Associates")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.61537", "longitude" => "-111.89242")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Mahesh")->setLastName("Seetharam");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Hematology-Oncology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Oncology Associates")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.61537", "longitude" => "-111.89242")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("John")->setLastName("Bibb");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Hematology-Oncology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Oncology Associates")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.50634", "longitude" => "-112.03388")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Arizona Oncology Services
		 */

		$physician = new Physicians();
		$physician->setFirstName("David")->setLastName("Beyer");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Radiation-Oncology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Oncology Services")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.66550", "longitude" => "-112.11826")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Arizona Orthopedic and Sports Medicine Specialists
		 */

		$physician = new Physicians();
		$physician->setFirstName("Michael")->setLastName("Brennan");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Orthopedic Surgeon")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Orthopedic and Sports Medicine Specialists")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.50634", "longitude" => "-112.03388")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Arizona Pain Specialists
		 */

		$physician = new Physicians();
		$physician->setFirstName("Paul")->setLastName("Lynch");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Pain Management")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Pain Specialists")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.67568", "longitude" => "-111.97936")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Pain Specialists")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.57463", "longitude" => "-111.88249")));
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Tory")->setLastName("McJunkin");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Pain Management")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Pain Specialists")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.67568", "longitude" => "-111.97936")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Pain Specialists")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.57463", "longitude" => "-111.88249")));
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();


		/**
		 * Arizona Prostate Cancer Center
		 */

		$physician = new Physicians();
		$physician->setFirstName("Thomas")->setLastName("Canty");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Radiation-Oncology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Prostate Cancer Center")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.58693", "longitude" => "-111.92674")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Arizona Pulmonary Specialists
		 */

		$physician = new Physicians();
		$physician->setFirstName("Lorie")->setLastName("Loreman");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Pulmonology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Pulmonary Specialists")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.57369", "longitude" => "-111.88347")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Ewa")->setLastName("Lupa-Laskus");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Pulmonology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Pulmonary Specialists")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.57369", "longitude" => "-111.88347")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Bridgett")->setLastName("Ronan");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Pulmonology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Pulmonary Specialists")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.57369", "longitude" => "-111.88347")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Jonathan")->setLastName("Ruzi");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Pulmonology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Pulmonary Specialists")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.57369", "longitude" => "-111.88347")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Sabitha")->setLastName("Setty");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Pulmonology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Pulmonary Specialists")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.57369", "longitude" => "-111.88347")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Lawrence")->setLastName("Slama");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Pulmonology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Pulmonary Specialists")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.57369", "longitude" => "-111.88347")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Paul")->setLastName("Steinmetz");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Pulmonary-Critical Care")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Pulmonary Specialists")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.57369", "longitude" => "-111.88347")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Judson")->setLastName("Tillinghast");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Pulmonary-Critical Care")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Pulmonary Specialists")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.57369", "longitude" => "-111.88347")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Arizona State Urology
		 */

		$physician = new Physicians();
		$physician->setFirstName("Daniel")->setLastName("Gilbert");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Urology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona State Urology")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.67102", "longitude" => "-111.92038")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Roscoe")->setLastName("Nelson");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Urology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona State Urology")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.67102", "longitude" => "-111.92038")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Howard")->setLastName("Tay");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Urology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona State Urology")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.67102", "longitude" => "-111.92038")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Arizona Transplant Associates
		 */

		$physician = new Physicians();
		$physician->setFirstName("Jeffrey")->setLastName("Brink");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Transplant Surgery")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Transplant Associates")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.47188", "longitude" => "-112.06993")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Arizona Urology Specialists
		 */

		$physician = new Physicians();
		$physician->setFirstName("Erik")->setLastName("Alexander");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Urology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Urology Specialists")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.57954", "longitude" => "-111.88126")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Yasmin")->setLastName("Bootwala");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Urology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Urology Specialists")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.57954", "longitude" => "-111.88126")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Urology Specialists")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.671015", "longitude" => "-111.920379")));
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Gilberto")->setLastName("Brito");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Urology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Urology Specialists")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.57954", "longitude" => "-111.88126")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("James")->setLastName("Daitch");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Urology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Urology Specialists")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.57954", "longitude" => "-111.88126")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Micheal")->setLastName("Darson");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Urology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Urology Specialists")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.57954", "longitude" => "-111.88126")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Farshid")->setLastName("Sadeghi");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Urology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Urology Specialists")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.57954", "longitude" => "-111.88126")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Urology Specialists")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.671015", "longitude" => "-111.920379")));
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Robert")->setLastName("Shapiro");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Urology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Urology Specialists")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.57954", "longitude" => "-111.88126")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Urology Specialists")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.671015", "longitude" => "-111.920379")));
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Anthony")->setLastName("Woodruff");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Urology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Urology Specialists")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.57954", "longitude" => "-111.88126")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Adrian")->setLastName("Feng");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Urology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Urology Specialists")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.487005", "longitude" => "-112.054081")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Scott")->setLastName("Kalinowski");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Urology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Urology Specialists")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.487005", "longitude" => "-112.054081")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Eric")->setLastName("Zeidman");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Urology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Urology Specialists")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.487005", "longitude" => "-112.054081")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Bernard")->setLastName("Gburek");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Urology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Urology Specialists")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.671015", "longitude" => "-111.920379")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * GyneMedic
		 */

		$physician = new Physicians();
		$physician->setFirstName("Armity")->setLastName("Simon");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "OB/GYN")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "GyneMedic")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.63598", "longitude" => "-111.97742")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "GyneMedic")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.58561", "longitude" => "-111.88497")));
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Elizabeth")->setLastName("Mahour-Moyer");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "OB/GYN")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "GyneMedic")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.63598", "longitude" => "-111.97742")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "GyneMedic")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.58561", "longitude" => "-111.88497")));
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();



		/**
		 * Arrow Surgical Associates
		 */

		$physician = new Physicians();
		$physician->setFirstName("Vikram")->setLastName("Deka");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "General Surgery")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arrow Surgical Associates")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.58175", "longitude" => "-111.97753")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Andrew")->setLastName("Smith");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "General Surgery")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arrow Surgical Associates")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.58175", "longitude" => "-111.97753")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Associated Retina Consultants
		 */

		$physician = new Physicians();
		$physician->setFirstName("Benjamin")->setLastName("Bakall");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Ophthalmology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Associated Retina Consultants")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.62364", "longitude" => "-112.25404")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Associated Retina Consultants")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.53888", "longitude" => "-112.04424")));
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Mary")->setLastName("Champion");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Ophthalmology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Associated Retina Consultants")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.62364", "longitude" => "-112.25404")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Associated Retina Consultants")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.53888", "longitude" => "-112.04424")));
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Jamie")->setLastName("Gaitan");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Ophthalmology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Associated Retina Consultants")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.62364", "longitude" => "-112.25404")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Associated Retina Consultants")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.53888", "longitude" => "-112.04424")));
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("James")->setLastName("Singer");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Ophthalmology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Associated Retina Consultants")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.62364", "longitude" => "-112.25404")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Associated Retina Consultants")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.53888", "longitude" => "-112.04424")));
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Matthew")->setLastName("Welch");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Ophthalmology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Associated Retina Consultants")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.62364", "longitude" => "-112.25404")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Associated Retina Consultants")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.53888", "longitude" => "-112.04424")));
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Shepard")->setLastName("Bryan");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Ophthalmology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Associated Retina Consultants")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.53888", "longitude" => "-112.04424")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Stephen")->setLastName("De Souza");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Ophthalmology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Associated Retina Consultants")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.53888", "longitude" => "-112.04424")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Alan")->setLastName("Gordon");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Ophthalmology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Associated Retina Consultants")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.53888", "longitude" => "-112.04424")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Henry")->setLastName("Kwong Jr.");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Ophthalmology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Associated Retina Consultants")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.53888", "longitude" => "-112.04424")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Rahul")->setLastName("Reddy");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Ophthalmology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Associated Retina Consultants")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.53888", "longitude" => "-112.04424")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Atria Heart, PPL
		 */

		$physician = new Physicians();
		$physician->setFirstName("Maulik")->setLastName("Shah");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Internal Medicine")));
		$manager->persist($physicianHasSpecialties);

		$physicianHasSpecialties_2 = new PhysiciansHasSpecialties();
		$physicianHasSpecialties_2->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Cardiology")));
		$manager->persist($physicianHasSpecialties_2);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Atria Heart, PPL")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.63679", "longitude" => "-111.92356")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Wesley")->setLastName("Tyree");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Internal Medicine")));
		$manager->persist($physicianHasSpecialties);

		$physicianHasSpecialties_2 = new PhysiciansHasSpecialties();
		$physicianHasSpecialties_2->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Cardiology")));
		$manager->persist($physicianHasSpecialties_2);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Atria Heart, PPL")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.63679", "longitude" => "-111.92356")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * BCG Oncology
		 */

		$physician = new Physicians();
		$physician->setFirstName("Donald")->setLastName("Lamm");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Urology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "BCG Oncology")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.63850", "longitude" => "-111.99909")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Berardi Aesthetics and Plastic Surgery
		 */

		$physician = new Physicians();
		$physician->setFirstName("Joseph")->setLastName("Berardi");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Plastic Surgery")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Berardi Aesthetics and Plastic Surgery")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.58693", "longitude" => "-111.92674")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Bertrand P Kaper, MD PC
		 */

		$physician = new Physicians();
		$physician->setFirstName("Bertrand")->setLastName("Kaper");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Orthopedic Surgeon")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Bertrand P Kaper, MD PC")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.67300", "longitude" => "-111.92368")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Bertrand P Kaper, MD PC")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "34.59663", "longitude" => "-112.46709")));
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();


		/**
		 * Bruce Freedman M.D.
		 */

		$physician = new Physicians();
		$physician->setFirstName("Bruce")->setLastName("Freedman");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "General Surgery")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Bruce Freedman M.D.")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.58047", "longitude" => "-111.88277")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Cactus Pediatrics Orthopaedics
		 */

		$physician = new Physicians();
		$physician->setFirstName("Greg")->setLastName("Hrasky");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Pediatric Orthopedics")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Cactus Pediatrics Orthopaedics")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.38739", "longitude" => "-111.87628")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Cactus Pediatrics Orthopaedics")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.58095", "longitude" => "-111.88525")));
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();


		/**
		 * Cardiologists of Scottsdale
		 */

		$physician = new Physicians();
		$physician->setFirstName("Lawrence")->setLastName("Cook");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Cardiology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Cardiologists of Scottsdale")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.67149", "longitude" => "-111.90994")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Cardiovascular Consultants
		 */

		$physician = new Physicians();
		$physician->setFirstName("Pradeep")->setLastName("Bhat");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Cardiology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Cardiovascular Consultants")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.57927", "longitude" => "-111.88255")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Cardiovascular Consultants")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.33392", "longitude" => "-111.89129")));
		$manager->persist($practicesHasPhysicians_2);

		$practicesHasPhysicians_3 = new PracticesHasPhysicians();
		$practicesHasPhysicians_3->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Cardiovascular Consultants")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.48898", "longitude" => "-111.92584")));
		$manager->persist($practicesHasPhysicians_3);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Rahool")->setLastName("Karnik");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Cardiology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Cardiovascular Consultants")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.57927", "longitude" => "-111.88255")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Cardiovascular Consultants")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.48898", "longitude" => "-111.92584")));
		$manager->persist($practicesHasPhysicians_2);

		$practicesHasPhysicians_3 = new PracticesHasPhysicians();
		$practicesHasPhysicians_3->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Cardiovascular Consultants")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.64026", "longitude" => "-111.99990")));
		$manager->persist($practicesHasPhysicians_3);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("George")->setLastName("Paik");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Cardiology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Cardiovascular Consultants")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.57927", "longitude" => "-111.88255")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Stephen")->setLastName("Smith");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Vascular Surgery")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Cardiovascular Consultants")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.33392", "longitude" => "-111.89129")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Andy")->setLastName("Tran");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Cardiac Electrophysiology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Cardiovascular Consultants")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.33392", "longitude" => "-111.89129")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Aye")->setLastName("win");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Cardiology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Cardiovascular Consultants")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.33392", "longitude" => "-111.89129")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Cardiovascular Consultants")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.52577", "longitude" => "-112.10059")));
		$manager->persist($practicesHasPhysicians_2);

		$practicesHasPhysicians_3 = new PracticesHasPhysicians();
		$practicesHasPhysicians_3->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Cardiovascular Consultants")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.42648", "longitude" => "-111.84034")));
		$manager->persist($practicesHasPhysicians_3);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Mayurkumar")->setLastName("Bhakta");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Cardiology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Cardiovascular Consultants")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.64026", "longitude" => "-111.99990")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("David")->setLastName("Lin");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Cardiology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Cardiovascular Consultants")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.64026", "longitude" => "-111.99990")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Cardiovascular Consultants")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.42648", "longitude" => "-111.84034")));
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Kent")->setLastName("Chen");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Cardiology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Cardiovascular Consultants")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.52577", "longitude" => "-112.10059")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Andrei")->setLastName("Damian");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Cardiology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Cardiovascular Consultants")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.52577", "longitude" => "-112.10059")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Curtis")->setLastName("Erickson");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Vascular Surgery")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Cardiovascular Consultants")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.52577", "longitude" => "-112.10059")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Renee")->setLastName("Espinosa");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Cardiology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Cardiovascular Consultants")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.52577", "longitude" => "-112.10059")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Camille")->setLastName("Le");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Cardiology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Cardiovascular Consultants")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.52577", "longitude" => "-112.10059")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Nirav")->setLastName("Mehta");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Cardiology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Cardiovascular Consultants")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.52577", "longitude" => "-112.10059")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Allan")->setLastName("Reinfeld");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Cardiology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Cardiovascular Consultants")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.52577", "longitude" => "-112.10059")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Cardiovascular Institute of Scottsdale
		 */

		$physician = new Physicians();
		$physician->setFirstName("Nassim")->setLastName("Haddad");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Cardiology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Cardiovascular Institute of Scottsdale")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.57763", "longitude" => "-111.87763")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Care MD PLC
		 */

		$physician = new Physicians();
		$physician->setFirstName("Katayoun")->setLastName("Baniriah");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Family Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Care MD PLC")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.48010", "longitude" => "-111.89216")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Care MD PLC")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.61109", "longitude" => "-111.97554")));
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Vafa")->setLastName("Matin");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Family Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Care MD PLC")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.48010", "longitude" => "-111.89216")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Care MD PLC")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.61109", "longitude" => "-111.97554")));
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();


		/**
		 * Center for Dermatology, PC
		 */

		$physician = new Physicians();
		$physician->setFirstName("Clay")->setLastName("Forsberg");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Plastic Surgery")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Center for Dermatology, PC")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.61537", "longitude" => "-111.89242")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Center for Dermatology, PC")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.50599", "longitude" => "-112.06338")));
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Gary")->setLastName("McCracken");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Dermatology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Center for Dermatology, PC")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.61537", "longitude" => "-111.89242")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Center for Dermatology, PC")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.60797", "longitude" => "-111.71666")));
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Anthony")->setLastName("Nuara");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Dermatology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Center for Dermatology, PC")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.61537", "longitude" => "-111.89242")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("James")->setLastName("Young");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Dermatology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Center for Dermatology, PC")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.61537", "longitude" => "-111.89242")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Center for Dermatology, PC")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.21740", "longitude" => "-111.88403")));
		$manager->persist($practicesHasPhysicians_2);

		$practicesHasPhysicians_3 = new PracticesHasPhysicians();
		$practicesHasPhysicians_3->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Center for Dermatology, PC")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.50599", "longitude" => "-112.06338")));
		$manager->persist($practicesHasPhysicians_3);

		$manager->flush();


		/**
		 * Center for Pain and Supportive Care
		 */

		$physician = new Physicians();
		$physician->setFirstName("Ann Cheri")->setLastName("Fox");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Pain Management")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Center for Pain and Supportive Care")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.58236", "longitude" => "-111.98187")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Lisa")->setLastName("Stearns");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Pain Management")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Center for Pain and Supportive Care")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.58236", "longitude" => "-111.98187")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Clear Dermatology and Aesthetics Center
		 */

		$physician = new Physicians();
		$physician->setFirstName("Brenda")->setLastName("LaTowsky");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Dermatology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Clear Dermatology and Aesthetics Center")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.67102", "longitude" => "-111.92038")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Colon and Rectal Clinic of Scottsdale
		 */

		$physician = new Physicians();
		$physician->setFirstName("Susan")->setLastName("Garand");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Colorectal Surgery")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Colon and Rectal Clinic of Scottsdale")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.55709", "longitude" => "-111.89074")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Andrew")->setLastName("Kassir");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Colorectal Surgery")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Colon and Rectal Clinic of Scottsdale")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.55709", "longitude" => "-111.89074")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * DC Ranch Family Medicine, PLLC
		 */

		$physician = new Physicians();
		$physician->setFirstName("Arneyo")->setLastName("Perez");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Family Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "DC Ranch Family Medicine, PLLC")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.67614", "longitude" => "-111.88881")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Deborah D. Wilson, MD
		 */

		$physician = new Physicians();
		$physician->setFirstName("Deborah")->setLastName("Wilson");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "OB/GYN")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Deborah D. Wilson, MD")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.58047", "longitude" => "-111.88277")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Thomas")->setLastName("Waliser");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Gynecology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Deborah D. Wilson, MD")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.58047", "longitude" => "-111.88277")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Deborah Trojanowski, MD
		 */

		$physician = new Physicians();
		$physician->setFirstName("Deborah")->setLastName("Trojanowski");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Plastic Surgery")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Deborah Trojanowski, MD")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.58047", "longitude" => "-111.88277")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Deer Valley OB/GYN
		 */

		$physician = new Physicians();
		$physician->setFirstName("Victor")->setLastName("Kissil");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "OB/GYN")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Deer Valley OB/GYN")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.68340", "longitude" => "-112.09976")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Deer Valley OB/GYN
		 */

		$physician = new Physicians();
		$physician->setFirstName("Victor")->setLastName("Kissil");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "OB/GYN")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Deer Valley OB/GYN")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("latitude" => "33.68340", "longitude" => "-112.09976")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

	}

}