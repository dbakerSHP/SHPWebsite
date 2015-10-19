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
use SiteBundle\Entity\Physicians;
use SiteBundle\Entity\PracticesHasPhysicians;
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
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "21st Century Oncology of Arizona")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "21st Century Oncology of Arizona")), "latitude" => "33.57170", "longitude" => "-112.06798")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians2 = new PracticesHasPhysicians();
		$practicesHasPhysicians2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "21st Century Oncology of Arizona")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "21st Century Oncology of Arizona")), "latitude" => "33.48080", "longitude" => "-111.92263")));
		$manager->persist($practicesHasPhysicians2);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Radiation-Oncology")));
		$manager->persist($physicianHasSpecialties);

		$manager->flush();


		$physician = new Physicians();
		$physician->setFirstName("Vershalee")->setLastName("Shukla");
		$manager->persist($physician);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "21st Century Oncology of Arizona")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "21st Century Oncology of Arizona")), "latitude" => "33.57170", "longitude" => "-112.06798")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians2 = new PracticesHasPhysicians();
		$practicesHasPhysicians2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "21st Century Oncology of Arizona")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "21st Century Oncology of Arizona")), "latitude" => "33.48080", "longitude" => "-111.92263")));
		$manager->persist($practicesHasPhysicians2);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Radiation-Oncology")));
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
		$practicesHasPhysicians_1->setPhysician($physician_1)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "4C Medical Group")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "4C Medical Group")), "latitude" => "33.58693", "longitude" => "-111.92674")));
		$manager->persist($practicesHasPhysicians_1);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician_2)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "4C Medical Group")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "4C Medical Group")), "latitude" => "33.58693", "longitude" => "-111.92674")));
		$manager->persist($practicesHasPhysicians_2);

		$practicesHasPhysicians_3 = new PracticesHasPhysicians();
		$practicesHasPhysicians_3->setPhysician($physician_3)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "4C Medical Group")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "4C Medical Group")), "latitude" => "33.58693", "longitude" => "-111.92674")));
		$manager->persist($practicesHasPhysicians_3);

		$practicesHasPhysicians_4 = new PracticesHasPhysicians();
		$practicesHasPhysicians_4->setPhysician($physician_4)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "4C Medical Group")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "4C Medical Group")), "latitude" => "33.58693", "longitude" => "-111.92674")));
		$manager->persist($practicesHasPhysicians_4);

		$practicesHasPhysicians_5 = new PracticesHasPhysicians();
		$practicesHasPhysicians_5->setPhysician($physician_5)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "4C Medical Group")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "4C Medical Group")), "latitude" => "33.58693", "longitude" => "-111.92674")));
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
		$practicesHasPhysicians_1->setPhysician($physician_1)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "A.O.A. Paradise Valley OBGYN")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "A.O.A. Paradise Valley OBGYN")), "latitude" => "33.57900", "longitude" => "-111.87908")));
		$manager->persist($practicesHasPhysicians_1);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician_2)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "A.O.A. Paradise Valley OBGYN")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "A.O.A. Paradise Valley OBGYN")), "latitude" => "33.57900", "longitude" => "-111.87908")));
		$manager->persist($practicesHasPhysicians_2);

		$practicesHasPhysicians_3 = new PracticesHasPhysicians();
		$practicesHasPhysicians_3->setPhysician($physician_3)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "A.O.A. Paradise Valley OBGYN")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "A.O.A. Paradise Valley OBGYN")), "latitude" => "33.57900", "longitude" => "-111.87908")));
		$manager->persist($practicesHasPhysicians_3);

		$practicesHasPhysicians_4 = new PracticesHasPhysicians();
		$practicesHasPhysicians_4->setPhysician($physician_4)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "A.O.A. Paradise Valley OBGYN")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "A.O.A. Paradise Valley OBGYN")), "latitude" => "33.57900", "longitude" => "-111.87908")));
		$manager->persist($practicesHasPhysicians_4);

		$manager->flush();


		/**
		 * Admire Plastic Surgery
		 */

		$physician = new Physicians();
		$physician->setFirstName("Anthony")->setLastName("Admire");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Plastic Surgery")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Admire Plastic Surgery")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Admire Plastic Surgery")), "latitude" => "33.64671", "longitude" => "-111.92208")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Advanced Fertility Care
		 */

		$physician = new Physicians();
		$physician->setFirstName("Frederick")->setLastName("Larsen");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Fertility")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Advanced Fertility Care")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Advanced Fertility Care")), "latitude" => "33.38791", "longitude" => "-111.85828")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Advanced Fertility Care")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Advanced Fertility Care")), "latitude" => "33.47995", "longitude" => "-112.04486")));
		$manager->persist($practicesHasPhysicians_2);

		$practicesHasPhysicians_3 = new PracticesHasPhysicians();
		$practicesHasPhysicians_3->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Advanced Fertility Care")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Advanced Fertility Care")), "latitude" => "33.57561", "longitude" => "-111.87506")));
		$manager->persist($practicesHasPhysicians_3);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Nathaniel")->setLastName("Zoneraich");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Fertility")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Advanced Fertility Care")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Advanced Fertility Care")), "latitude" => "33.38791", "longitude" => "-111.85828")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Advanced Fertility Care")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Advanced Fertility Care")), "latitude" => "33.57561", "longitude" => "-111.87506")));
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();


		/**
		 * Affiliated Allergy & Pulmonary Associates
		 */

		$physician = new Physicians();
		$physician->setFirstName("George")->setLastName("Gwinn");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Allergy")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Affiliated Allergy & Pulmonary Associates")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Affiliated Allergy & Pulmonary Associates")), "latitude" => "33.79867", "longitude" => "-111.95135")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Affiliated Dermatology
		 */

		$physician = new Physicians();
		$physician->setFirstName("Jason")->setLastName("Barr");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Dermatology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Affiliated Dermatology")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Affiliated Dermatology")), "latitude" => "33.62871", "longitude" => "-112.36137")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Affiliated Dermatology")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Affiliated Dermatology")), "latitude" => "33.67300", "longitude" => "-111.92368")));
		$manager->persist($practicesHasPhysicians_2);

		$practicesHasPhysicians_3 = new PracticesHasPhysicians();
		$practicesHasPhysicians_3->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Affiliated Dermatology")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Affiliated Dermatology")), "latitude" => "33.86411", "longitude" => "-112.14240")));
		$manager->persist($practicesHasPhysicians_3);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Richard")->setLastName("Averitte");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Dermatology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Affiliated Dermatology")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Affiliated Dermatology")), "latitude" => "33.66550", "longitude" => "-112.11826")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Affiliated Dermatology")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Affiliated Dermatology")), "latitude" => "33.67300", "longitude" => "-111.92368")));
		$manager->persist($practicesHasPhysicians_2);

		$practicesHasPhysicians_3 = new PracticesHasPhysicians();
		$practicesHasPhysicians_3->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Affiliated Dermatology")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Affiliated Dermatology")), "latitude" => "33.86411", "longitude" => "-112.14240")));
		$manager->persist($practicesHasPhysicians_3);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Christine")->setLastName("Lin");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Dermatology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Affiliated Dermatology")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Affiliated Dermatology")), "latitude" => "33.67300", "longitude" => "-111.92368")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Affiliated Dermatology")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Affiliated Dermatology")), "latitude" => "33.86411", "longitude" => "-112.14240")));
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();


		/**
		 * Agave Pediatrics
		 */

		$physician = new Physicians();
		$physician->setFirstName("Rajeev")->setLastName("Agarwal");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Nephrology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Agave Pediatrics")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Agave Pediatrics")), "latitude" => "33.65186", "longitude" => "-111.92970")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Agave Pediatrics")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Agave Pediatrics")), "latitude" => "33.48019", "longitude" => "-111.92278")));
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Leslie")->setLastName("Mortland");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Nephrology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Agave Pediatrics")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Agave Pediatrics")), "latitude" => "33.65186", "longitude" => "-111.92970")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Agave Pediatrics")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Agave Pediatrics")), "latitude" => "33.48019", "longitude" => "-111.92278")));
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Nichole")->setLastName("Thomas");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Pediatrics")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Agave Pediatrics")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Agave Pediatrics")), "latitude" => "33.65186", "longitude" => "-111.92970")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Agave Pediatrics")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Agave Pediatrics")), "latitude" => "33.48019", "longitude" => "-111.92278")));
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();


		/**
		 * Ali Ghazanfare MD PLLC
		 */

		$physician = new Physicians();
		$physician->setFirstName("Ali")->setLastName("Ghazanfari");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "General Surgery")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Ali Ghazanfare MD PLLC")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Ali Ghazanfare MD PLLC")), "latitude" => "33.3086789", "longitude" => "-111.8755867")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Ali Ghazanfare MD PLLC")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Ali Ghazanfare MD PLLC")), "latitude" => "33.41370", "longitude" => "-111.69850")));
		$manager->persist($practicesHasPhysicians_2);

		$practicesHasPhysicians_3 = new PracticesHasPhysicians();
		$practicesHasPhysicians_3->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Ali Ghazanfare MD PLLC")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Ali Ghazanfare MD PLLC")), "latitude" => "33.49146", "longitude" => "-111.91811")));
		$manager->persist($practicesHasPhysicians_3);

		$manager->flush();


		/**
		 * Allergy & Environmental Treatment Center, LLC
		 */

		$physician = new Physicians();
		$physician->setFirstName("Lawrence")->setLastName("Liszewski");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Family Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Allergy & Environmental Treatment Center, LLC")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Allergy & Environmental Treatment Center, LLC")), "latitude" => "33.58560", "longitude" => "-111.88839")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Allergy, Asthma, and Immunology Associates
		 */

		$physician = new Physicians();
		$physician->setFirstName("Aaron")->setLastName("Davis");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Allergy")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Allergy, Asthma, and Immunology Associates")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Allergy, Asthma, and Immunology Associates")), "latitude" => "33.57833", "longitude" => "-111.88141")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Michael")->setLastName("Manning");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Allergy")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Allergy, Asthma, and Immunology Associates")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Allergy, Asthma, and Immunology Associates")), "latitude" => "33.57833", "longitude" => "-111.88141")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Allergy, Asthma, and Immunology Associates")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Allergy, Asthma, and Immunology Associates")), "latitude" => "33.48617", "longitude" => "-111.91872")));
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();


		/**
		 * Allergy, Ear, Nose, and Throat Center Ltd.
		 */

		$physician = new Physicians();
		$physician->setFirstName("Brian")->setLastName("Lee");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Ear, Nose, and Throat")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Allergy, Ear, Nose, and Throat Center Ltd.")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Allergy, Ear, Nose, and Throat Center Ltd.")), "latitude" => "33.4873294", "longitude" => "-111.9251589")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * American Advanced Surgery
		 */

		$physician = new Physicians();
		$physician->setFirstName("Babak")->setLastName("Rashidi");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "General Surgery")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "American Advanced Surgery")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "American Advanced Surgery")), "latitude" => "33.48898", "longitude" => "-111.92584")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Arizona Arrhythmia Consultants
		 */

		$physician = new Physicians();
		$physician->setFirstName("Renzo")->setLastName("Cataldo");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Cardiac Electrophysiology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Arrhythmia Consultants")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Arrhythmia Consultants")), "latitude" => "33.57821", "longitude" => "-111.88016")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Thomas")->setLastName("Mattioni");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Cardiac Electrophysiology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Arrhythmia Consultants")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Arrhythmia Consultants")), "latitude" => "33.57821", "longitude" => "-111.88016")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("David")->setLastName("Riggio");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Cardiac Electrophysiology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Arrhythmia Consultants")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Arrhythmia Consultants")), "latitude" => "33.57821", "longitude" => "-111.88016")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Arrhythmia Consultants")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Arrhythmia Consultants")), "latitude" => "33.48517", "longitude" => "-111.92141")));
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Michael")->setLastName("Zawaneh");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Cardiac Electrophysiology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Arrhythmia Consultants")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Arrhythmia Consultants")), "latitude" => "33.57821", "longitude" => "-111.88016")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Arrhythmia Consultants")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Arrhythmia Consultants")), "latitude" => "33.48517", "longitude" => "-111.92141")));
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();


		/**
		 * Arizona Asthma and Allergy Institute
		 */

		$physician = new Physicians();
		$physician->setFirstName("Levente")->setLastName("Erdos");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Allergy")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Asthma and Allergy Institute")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Asthma and Allergy Institute")), "latitude" => "33.61185", "longitude" => "-111.89742")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Asthma and Allergy Institute")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Asthma and Allergy Institute")), "latitude" => "33.37854", "longitude" => "-111.89359")));
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Ronald")->setLastName("Jorgensen");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Allergy")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Asthma and Allergy Institute")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Asthma and Allergy Institute")), "latitude" => "33.61185", "longitude" => "-111.89742")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Asthma and Allergy Institute")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Asthma and Allergy Institute")), "latitude" => "33.60708", "longitude" => "-112.18150")));
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Joseph")->setLastName("Mittel");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Allergy")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Asthma and Allergy Institute")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Asthma and Allergy Institute")), "latitude" => "33.61185", "longitude" => "-111.89742")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Asthma and Allergy Institute")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Asthma and Allergy Institute")), "latitude" => "33.51071", "longitude" => "-112.01162")));
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();


		/**
		 * Arizona Bone and Joint Specialists
		 */

		$physician = new Physicians();
		$physician->setFirstName("Philip")->setLastName("To");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Orthopedic Surgeon")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Bone and Joint Specialists")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Bone and Joint Specialists")), "latitude" => "33.61099", "longitude" => "-112.06601")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Bone and Joint Specialists")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Bone and Joint Specialists")), "latitude" => "33.64081", "longitude" => "-111.95928")));
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Brad")->setLastName("Bruns");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Orthopedic Surgeon")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Bone and Joint Specialists")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Bone and Joint Specialists")), "latitude" => "33.61099", "longitude" => "-112.06601")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("David")->setLastName("Camarata");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Orthopedic Surgeon")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Bone and Joint Specialists")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Bone and Joint Specialists")), "latitude" => "33.61099", "longitude" => "-112.06601")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Richard")->setLastName("Martin");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Orthopedic Surgeon")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Bone and Joint Specialists")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Bone and Joint Specialists")), "latitude" => "33.61099", "longitude" => "-112.06601")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Brian")->setLastName("Shafer");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Orthopedic Surgeon")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Bone and Joint Specialists")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Bone and Joint Specialists")), "latitude" => "33.61099", "longitude" => "-112.06601")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Arizona Cardiology Group
		 */

		$physician = new Physicians();
		$physician->setFirstName("Youngsoo")->setLastName("Cho");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Cardiology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Cardiology Group")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Cardiology Group")), "latitude" => "33.37909", "longitude" => "-111.90104")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Cardiology Group")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Cardiology Group")), "latitude" => "33.46994", "longitude" => "-112.06835")));
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Mitchell")->setLastName("Ross");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Cardiology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Cardiology Group")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Cardiology Group")), "latitude" => "33.46994", "longitude" => "-112.06835")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Wazhma")->setLastName("Aslamy");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Cardiology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Cardiology Group")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Cardiology Group")), "latitude" => "33.67102", "longitude" => "-111.92038")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Gregory")->setLastName("Sanders");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Cardiology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Cardiology Group")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Cardiology Group")), "latitude" => "33.67102", "longitude" => "-111.92038")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Christina")->setLastName("Reuss");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Cardiology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Cardiology Group")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Cardiology Group")), "latitude" => "33.67102", "longitude" => "-111.92038")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Daniel")->setLastName("Storch");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Cardiology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Cardiology Group")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Cardiology Group")), "latitude" => "33.67102", "longitude" => "-111.92038")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Arizona Cardiovascular and Thoracic Surgeons
		 */

		$physician = new Physicians();
		$physician->setFirstName("Rajeev")->setLastName("Kathuria");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Cardiovascular Surgery")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Cardiovascular and Thoracic Surgeons")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Cardiovascular and Thoracic Surgeons")), "latitude" => "33.58246", "longitude" => "-111.87362")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Robert")->setLastName("Riley");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Cardiovascular Surgery")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Cardiovascular and Thoracic Surgeons")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Cardiovascular and Thoracic Surgeons")), "latitude" => "33.58246", "longitude" => "-111.87362")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Arizona Center for Cancer Care
		 */

		$physician = new Physicians();
		$physician->setFirstName("Ivor")->setLastName("Benjamin");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Gynecologic Oncology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Center for Cancer Care")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Center for Cancer Care")), "latitude" => "33.58115", "longitude" => "-111.88368")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Center for Cancer Care")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Center for Cancer Care")), "latitude" => "33.61281", "longitude" => "-112.23679")));
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Luci")->setLastName("Chen");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Radiation-Oncology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Center for Cancer Care")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Center for Cancer Care")), "latitude" => "33.58115", "longitude" => "-111.88368")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Robert")->setLastName("Kuske");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Radiation-Oncology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Center for Cancer Care")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Center for Cancer Care")), "latitude" => "33.58115", "longitude" => "-111.88368")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("James")->setLastName("Marsh");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Radiation-Oncology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Center for Cancer Care")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Center for Cancer Care")), "latitude" => "33.58115", "longitude" => "-111.88368")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Annushka")->setLastName("Patel");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Radiation-Oncology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Center for Cancer Care")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Center for Cancer Care")), "latitude" => "33.58115", "longitude" => "-111.88368")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Center for Cancer Care")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Center for Cancer Care")), "latitude" => "33.67602", "longitude" => "-112.12079")));
		$manager->persist($practicesHasPhysicians_2);

		$practicesHasPhysicians_3 = new PracticesHasPhysicians();
		$practicesHasPhysicians_3->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Center for Cancer Care")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Center for Cancer Care")), "latitude" => "33.49120", "longitude" => "-111.92369")));
		$manager->persist($practicesHasPhysicians_3);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Dennis")->setLastName("Scribner");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Gynecologic Oncology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Center for Cancer Care")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Center for Cancer Care")), "latitude" => "33.58115", "longitude" => "-111.88368")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Center for Cancer Care")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Center for Cancer Care")), "latitude" => "33.61281", "longitude" => "-112.23679")));
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Scott")->setLastName("Tannehill");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Radiation-Oncology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Center for Cancer Care")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Center for Cancer Care")), "latitude" => "33.58115", "longitude" => "-111.88368")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Farley")->setLastName("Yang");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Radiation-Oncology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Center for Cancer Care")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Center for Cancer Care")), "latitude" => "33.58115", "longitude" => "-111.88368")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Christopher")->setLastName("Biggs");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Radiation-Oncology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Center for Cancer Care")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Center for Cancer Care")), "latitude" => "33.61281", "longitude" => "-112.23679")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Terry")->setLastName("Lee");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Radiation-Oncology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Center for Cancer Care")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Center for Cancer Care")), "latitude" => "33.61281", "longitude" => "-112.23679")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Marianne")->setLastName("Mildenberger");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Radiation-Oncology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Center for Cancer Care")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Center for Cancer Care")), "latitude" => "33.61281", "longitude" => "-112.23679")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Center for Cancer Care")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Center for Cancer Care")), "latitude" => "33.65542", "longitude" => "-112.37668")));
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Daniel")->setLastName("Reed");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Hematology-Oncology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Center for Cancer Care")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Center for Cancer Care")), "latitude" => "33.61281", "longitude" => "-112.23679")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Center for Cancer Care")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Center for Cancer Care")), "latitude" => "33.65542", "longitude" => "-112.37668")));
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Coral")->setLastName("Quiet");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Radiation-Oncology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Center for Cancer Care")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Center for Cancer Care")), "latitude" => "33.67602", "longitude" => "-112.12079")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Patrick")->setLastName("Donovan");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Hematology-Oncology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Center for Cancer Care")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Center for Cancer Care")), "latitude" => "33.49120", "longitude" => "-111.92369")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("James")->setLastName("Marsh");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Radiation-Oncology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Center for Cancer Care")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Center for Cancer Care")), "latitude" => "33.49120", "longitude" => "-111.92369")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Paul")->setLastName("Wassermann");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Hematology-Oncology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Center for Cancer Care")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Center for Cancer Care")), "latitude" => "33.49120", "longitude" => "-111.92369")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Scott")->setLastName("Tannehill");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Radiation-Oncology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Center for Cancer Care")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Center for Cancer Care")), "latitude" => "33.28478", "longitude" => "-111.75031")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Gregory")->setLastName("Maggass");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Radiation-Oncology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Center for Cancer Care")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Center for Cancer Care")), "latitude" => "33.28478", "longitude" => "-111.75031")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Arizona Center for Pain Relief
		 */

		$physician = new Physicians();
		$physician->setFirstName("Julian")->setLastName("Grove");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Pain Management")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Center for Pain Relief")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Center for Pain Relief")), "latitude" => "33.67619", "longitude" => "-111.97836")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Peter")->setLastName("Kubitz");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Pain Management")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Center for Pain Relief")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Center for Pain Relief")), "latitude" => "33.67619", "longitude" => "-111.97836")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Mark")->setLastName("Rubin");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Pain Management")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Center for Pain Relief")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Center for Pain Relief")), "latitude" => "33.67619", "longitude" => "-111.97836")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Arizona Digestive Health
		 */

		$physician = new Physicians();
		$physician->setFirstName("Linda")->setLastName("Shields");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Gastroenterology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Digestive Health")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Digestive Health")), "latitude" => "33.58024", "longitude" => "-111.88379")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Bradford")->setLastName("Gelzayd");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Gastroenterology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Digestive Health")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Digestive Health")), "latitude" => "33.55708", "longitude" => "-111.89074")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("John")->setLastName("Yalam");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Gastroenterology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Digestive Health")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Digestive Health")), "latitude" => "33.57460", "longitude" => "-111.88569")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Daniel")->setLastName("Meline");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Gastroenterology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Digestive Health")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Digestive Health")), "latitude" => "33.57394", "longitude" => "-111.88239")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Arizona Eye Specialists
		 */

		$physician = new Physicians();
		$physician->setFirstName("Joseph")->setLastName("Aiello");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Ophthalmology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Eye Specialists")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Eye Specialists")), "latitude" => "33.48799", "longitude" => "-112.06880")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Eye Specialists")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Eye Specialists")), "latitude" => "33.48736", "longitude" => "-111.92507")));
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("James")->setLastName("Goldman");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Ophthalmology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Eye Specialists")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Eye Specialists")), "latitude" => "33.48799", "longitude" => "-112.06880")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Eye Specialists")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Eye Specialists")), "latitude" => "33.37887", "longitude" => "-111.83471")));
		$manager->persist($practicesHasPhysicians_2);

		$practicesHasPhysicians_3 = new PracticesHasPhysicians();
		$practicesHasPhysicians_3->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Eye Specialists")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Eye Specialists")), "latitude" => "33.48736", "longitude" => "-111.92507")));
		$manager->persist($practicesHasPhysicians_3);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Thomas")->setLastName("McPhee");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Ophthalmology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Eye Specialists")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Eye Specialists")), "latitude" => "33.48799", "longitude" => "-112.06880")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Eye Specialists")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Eye Specialists")), "latitude" => "33.61167", "longitude" => "-112.17987")));
		$manager->persist($practicesHasPhysicians_2);

		$practicesHasPhysicians_3 = new PracticesHasPhysicians();
		$practicesHasPhysicians_3->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Eye Specialists")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Eye Specialists")), "latitude" => "33.48736", "longitude" => "-111.92507")));
		$manager->persist($practicesHasPhysicians_3);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Craig")->setLastName("Suiter");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Ophthalmology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Eye Specialists")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Eye Specialists")), "latitude" => "33.48799", "longitude" => "-112.06880")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Eye Specialists")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Eye Specialists")), "latitude" => "33.48736", "longitude" => "-111.92507")));
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();


		/**
		 * Arizona Gastrointestinal Associates
		 */

		$physician = new Physicians();
		$physician->setFirstName("Jaffrey")->setLastName("Kazi");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Gastroenterology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Gastrointestinal Associates")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Gastrointestinal Associates")), "latitude" => "33.63918", "longitude" => "-111.89318")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Nizar")->setLastName("Ramzan");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Gastroenterology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Gastrointestinal Associates")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Gastrointestinal Associates")), "latitude" => "33.63918", "longitude" => "-111.89318")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Arizona Hand and Wrist Specialists
		 */

		$physician = new Physicians();
		$physician->setFirstName("Mark")->setLastName("Leber");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Hand Surgery")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Hand and Wrist Specialists")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Hand and Wrist Specialists")), "latitude" => "33.38416", "longitude" => "-111.72574")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Hand and Wrist Specialists")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Hand and Wrist Specialists")), "latitude" => "33.45551", "longitude" => "-111.99031")));
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Scott")->setLastName("Frankel");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Hand Surgery")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Hand and Wrist Specialists")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Hand and Wrist Specialists")), "latitude" => "33.45551", "longitude" => "-111.99031")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Hand and Wrist Specialists")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Hand and Wrist Specialists")), "latitude" => "33.55411", "longitude" => "-111.89538")));
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();


		/**
		 * Arizona Heart and Lung Surgery
		 */

		$physician = new Physicians();
		$physician->setFirstName("Andrew")->setLastName("Goldstein");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Cardiovascular Surgery")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Heart and Lung Surgery")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Heart and Lung Surgery")), "latitude" => "33.57821", "longitude" => "-111.88016")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Arizona Kidney Disease and Hypertension Center
		 */

		$physician = new Physicians();
		$physician->setFirstName("Esmat")->setLastName("Mustafa");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Nephrology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Kidney Disease and Hypertension Center")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Kidney Disease and Hypertension Center")), "latitude" => "33.640261", "longitude" => "-111.999902")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Kidney Disease and Hypertension Center")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Kidney Disease and Hypertension Center")), "latitude" => "33.48764", "longitude" => "-111.92426")));
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Hui")->setLastName("Zhao");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Nephrology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Kidney Disease and Hypertension Center")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Kidney Disease and Hypertension Center")), "latitude" => "33.640261", "longitude" => "-111.999902")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("David")->setLastName("Burstein");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Nephrology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Kidney Disease and Hypertension Center")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Kidney Disease and Hypertension Center")), "latitude" => "33.48764", "longitude" => "-111.92426")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Alejandro")->setLastName("Morales");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Nephrology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Kidney Disease and Hypertension Center")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Kidney Disease and Hypertension Center")), "latitude" => "33.48764", "longitude" => "-111.92426")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Yogesh")->setLastName("Amin");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Nephrology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Kidney Disease and Hypertension Center")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Kidney Disease and Hypertension Center")), "latitude" => "33.48764", "longitude" => "-111.92426")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Javier")->setLastName("Bibb");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Nephrology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Kidney Disease and Hypertension Center")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Kidney Disease and Hypertension Center")), "latitude" => "33.48764", "longitude" => "-111.92426")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Romanita")->setLastName("Nica");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Nephrology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Kidney Disease and Hypertension Center")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Kidney Disease and Hypertension Center")), "latitude" => "33.48764", "longitude" => "-111.92426")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Savas")->setLastName("Petrides");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Nephrology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Kidney Disease and Hypertension Center")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Kidney Disease and Hypertension Center")), "latitude" => "33.48764", "longitude" => "-111.92426")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Jatinder")->setLastName("Soni");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Nephrology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Kidney Disease and Hypertension Center")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Kidney Disease and Hypertension Center")), "latitude" => "33.48764", "longitude" => "-111.92426")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Ann")->setLastName("Thomas");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Nephrology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Kidney Disease and Hypertension Center")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Kidney Disease and Hypertension Center")), "latitude" => "33.48764", "longitude" => "-111.92426")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Arizona Neurological Institute
		 */

		$physician = new Physicians();
		$physician->setFirstName("As'ad")->setLastName("Ehtisham");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Neurology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Neurological Institute")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Neurological Institute")), "latitude" => "33.605566", "longitude" => "-112.283898")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Arizona Neurology and Sleep Center
		 */

		$physician = new Physicians();
		$physician->setFirstName("Jose")->setLastName("De Ocampo");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Neurology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Neurology and Sleep Center")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Neurology and Sleep Center")), "latitude" => "33.58024", "longitude" => "-111.88379")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Arizona Ocular and Facial Plastic Surgery
		 */

		$physician = new Physicians();
		$physician->setFirstName("Dustin")->setLastName("Heringer");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Plastic Surgery")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Ocular and Facial Plastic Surgery")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Ocular and Facial Plastic Surgery")), "latitude" => "33.48898", "longitude" => "-111.92584")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Arizona Oculoplastic Specialists
		 */

		$physician = new Physicians();
		$physician->setFirstName("Ali")->setLastName("Ghafouri");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Ophthalmology, Plastic Surgery")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Oculoplastic Specialists")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Oculoplastic Specialists")), "latitude" => "33.61537", "longitude" => "-111.89242")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Oculoplastic Specialists")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Oculoplastic Specialists")), "latitude" => "33.37833", "longitude" => "-111.89361")));
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();


		/**
		 * Arizona Oncology Associates
		 */

		$physician = new Physicians();
		$physician->setFirstName("Tania")->setLastName("Cortas");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Hematology-Oncology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Oncology Associates")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Oncology Associates")), "latitude" => "33.57820", "longitude" => "-111.87864")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Mike")->setLastName("Janicek");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Gynecologic Oncology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Oncology Associates")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Oncology Associates")), "latitude" => "33.57820", "longitude" => "-111.87864")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Lanny")->setLastName("Hecker");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Hematology-Oncology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Oncology Associates")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Oncology Associates")), "latitude" => "33.58115", "longitude" => "-111.88368")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Michael")->setLastName("Roberts");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Hematology-Oncology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Oncology Associates")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Oncology Associates")), "latitude" => "33.58115", "longitude" => "-111.88368")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Mahesh")->setLastName("Seetharam");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Hematology-Oncology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Oncology Associates")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Oncology Associates")), "latitude" => "33.58115", "longitude" => "-111.88368")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("John")->setLastName("Bibb");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Hematology-Oncology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Oncology Associates")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Oncology Associates")), "latitude" => "33.50634", "longitude" => "-112.03388")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Arizona Oncology Services
		 */

		$physician = new Physicians();
		$physician->setFirstName("David")->setLastName("Beyer");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Radiation-Oncology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Oncology Services")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Oncology Services")), "latitude" => "33.66550", "longitude" => "-112.11826")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Arizona Orthopedic and Sports Medicine Specialists
		 */

		$physician = new Physicians();
		$physician->setFirstName("Michael")->setLastName("Brennan");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Orthopedic Surgeon")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Orthopedic and Sports Medicine Specialists")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Orthopedic and Sports Medicine Specialists")), "latitude" => "33.50634", "longitude" => "-112.03388")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Arizona Pain Specialists
		 */

		$physician = new Physicians();
		$physician->setFirstName("Paul")->setLastName("Lynch");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Pain Management")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Pain Specialists")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Pain Specialists")), "latitude" => "33.67568", "longitude" => "-111.97936")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Pain Specialists")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Pain Specialists")), "latitude" => "33.57463", "longitude" => "-111.88249")));
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Tory")->setLastName("McJunkin");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Pain Management")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Pain Specialists")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Pain Specialists")), "latitude" => "33.67568", "longitude" => "-111.97936")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Pain Specialists")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Pain Specialists")), "latitude" => "33.57463", "longitude" => "-111.88249")));
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();


		/**
		 * Arizona Prostate Cancer Center
		 */

		$physician = new Physicians();
		$physician->setFirstName("Thomas")->setLastName("Canty");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Radiation-Oncology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Prostate Cancer Center")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Prostate Cancer Center")), "latitude" => "33.58693", "longitude" => "-111.92674")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Arizona Pulmonary Specialists
		 */

		$physician = new Physicians();
		$physician->setFirstName("Lorie")->setLastName("Loreman");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Pulmonology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Pulmonary Specialists")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Pulmonary Specialists")), "latitude" => "33.57369", "longitude" => "-111.88347")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Ewa")->setLastName("Lupa-Laskus");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Pulmonology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Pulmonary Specialists")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Pulmonary Specialists")), "latitude" => "33.57369", "longitude" => "-111.88347")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Bridgett")->setLastName("Ronan");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Pulmonology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Pulmonary Specialists")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Pulmonary Specialists")), "latitude" => "33.57369", "longitude" => "-111.88347")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Jonathan")->setLastName("Ruzi");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Pulmonology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Pulmonary Specialists")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Pulmonary Specialists")), "latitude" => "33.57369", "longitude" => "-111.88347")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Sabitha")->setLastName("Setty");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Pulmonology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Pulmonary Specialists")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Pulmonary Specialists")), "latitude" => "33.57369", "longitude" => "-111.88347")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Lawrence")->setLastName("Slama");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Pulmonology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Pulmonary Specialists")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Pulmonary Specialists")), "latitude" => "33.57369", "longitude" => "-111.88347")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Paul")->setLastName("Steinmetz");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Pulmonary-Critical Care")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Pulmonary Specialists")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Pulmonary Specialists")), "latitude" => "33.57369", "longitude" => "-111.88347")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Judson")->setLastName("Tillinghast");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Pulmonary-Critical Care")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Pulmonary Specialists")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Pulmonary Specialists")), "latitude" => "33.57369", "longitude" => "-111.88347")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Arizona State Urology
		 */

		$physician = new Physicians();
		$physician->setFirstName("Daniel")->setLastName("Gilbert");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Urology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona State Urology")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona State Urology")), "latitude" => "33.67102", "longitude" => "-111.92038")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Roscoe")->setLastName("Nelson");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Urology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona State Urology")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona State Urology")), "latitude" => "33.67102", "longitude" => "-111.92038")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Howard")->setLastName("Tay");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Urology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona State Urology")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona State Urology")), "latitude" => "33.67102", "longitude" => "-111.92038")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Arizona Transplant Associates
		 */

		$physician = new Physicians();
		$physician->setFirstName("Jeffrey")->setLastName("Brink");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Transplant Surgery")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Transplant Associates")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Transplant Associates")), "latitude" => "33.47188", "longitude" => "-112.06993")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Arizona Urology Specialists
		 */

		$physician = new Physicians();
		$physician->setFirstName("Erik")->setLastName("Alexander");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Urology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Urology Specialists")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Urology Specialists")), "latitude" => "33.57954", "longitude" => "-111.88126")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Yasmin")->setLastName("Bootwala");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Urology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Urology Specialists")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Urology Specialists")), "latitude" => "33.57954", "longitude" => "-111.88126")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Urology Specialists")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Urology Specialists")), "latitude" => "33.671015", "longitude" => "-111.920379")));
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Gilberto")->setLastName("Brito");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Urology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Urology Specialists")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Urology Specialists")), "latitude" => "33.57954", "longitude" => "-111.88126")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("James")->setLastName("Daitch");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Urology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Urology Specialists")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Urology Specialists")), "latitude" => "33.57954", "longitude" => "-111.88126")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Micheal")->setLastName("Darson");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Urology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Urology Specialists")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Urology Specialists")), "latitude" => "33.57954", "longitude" => "-111.88126")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Farshid")->setLastName("Sadeghi");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Urology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Urology Specialists")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Urology Specialists")), "latitude" => "33.57954", "longitude" => "-111.88126")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Urology Specialists")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Urology Specialists")), "latitude" => "33.671015", "longitude" => "-111.920379")));
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Robert")->setLastName("Shapiro");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Urology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Urology Specialists")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Urology Specialists")), "latitude" => "33.57954", "longitude" => "-111.88126")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Urology Specialists")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Urology Specialists")), "latitude" => "33.671015", "longitude" => "-111.920379")));
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Anthony")->setLastName("Woodruff");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Urology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Urology Specialists")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Urology Specialists")), "latitude" => "33.57954", "longitude" => "-111.88126")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Adrian")->setLastName("Feng");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Urology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Urology Specialists")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Urology Specialists")), "latitude" => "33.487005", "longitude" => "-112.054081")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Scott")->setLastName("Kalinowski");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Urology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Urology Specialists")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Urology Specialists")), "latitude" => "33.487005", "longitude" => "-112.054081")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Eric")->setLastName("Zeidman");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Urology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Urology Specialists")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Urology Specialists")), "latitude" => "33.487005", "longitude" => "-112.054081")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Bernard")->setLastName("Gburek");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Urology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Urology Specialists")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Urology Specialists")), "latitude" => "33.671015", "longitude" => "-111.920379")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * GyneMedic
		 */

		$physician = new Physicians();
		$physician->setFirstName("Armity")->setLastName("Simon");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "OB/GYN")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "GyneMedic")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "GyneMedic")), "latitude" => "33.63598", "longitude" => "-111.97742")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "GyneMedic")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "GyneMedic")), "latitude" => "33.58561", "longitude" => "-111.88497")));
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Elizabeth")->setLastName("Mahour-Moyer");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "OB/GYN")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "GyneMedic")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "GyneMedic")), "latitude" => "33.63598", "longitude" => "-111.97742")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "GyneMedic")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "GyneMedic")), "latitude" => "33.58561", "longitude" => "-111.88497")));
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();



		/**
		 * Arrow Surgical Associates
		 */

		$physician = new Physicians();
		$physician->setFirstName("Vikram")->setLastName("Deka");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "General Surgery")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arrow Surgical Associates")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arrow Surgical Associates")), "latitude" => "33.58175", "longitude" => "-111.97753")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Andrew")->setLastName("Smith");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "General Surgery")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arrow Surgical Associates")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arrow Surgical Associates")), "latitude" => "33.58175", "longitude" => "-111.97753")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Associated Retina Consultants
		 */

		$physician = new Physicians();
		$physician->setFirstName("Benjamin")->setLastName("Bakall");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Ophthalmology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Associated Retina Consultants")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Associated Retina Consultants")), "latitude" => "33.62364", "longitude" => "-112.25404")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Associated Retina Consultants")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Associated Retina Consultants")), "latitude" => "33.53888", "longitude" => "-112.04424")));
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Mary")->setLastName("Champion");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Ophthalmology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Associated Retina Consultants")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Associated Retina Consultants")), "latitude" => "33.62364", "longitude" => "-112.25404")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Associated Retina Consultants")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Associated Retina Consultants")), "latitude" => "33.53888", "longitude" => "-112.04424")));
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Jamie")->setLastName("Gaitan");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Ophthalmology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Associated Retina Consultants")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Associated Retina Consultants")), "latitude" => "33.62364", "longitude" => "-112.25404")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Associated Retina Consultants")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Associated Retina Consultants")), "latitude" => "33.53888", "longitude" => "-112.04424")));
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("James")->setLastName("Singer");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Ophthalmology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Associated Retina Consultants")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Associated Retina Consultants")), "latitude" => "33.62364", "longitude" => "-112.25404")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Associated Retina Consultants")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Associated Retina Consultants")), "latitude" => "33.53888", "longitude" => "-112.04424")));
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Matthew")->setLastName("Welch");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Ophthalmology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Associated Retina Consultants")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Associated Retina Consultants")), "latitude" => "33.62364", "longitude" => "-112.25404")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Associated Retina Consultants")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Associated Retina Consultants")), "latitude" => "33.53888", "longitude" => "-112.04424")));
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Shepard")->setLastName("Bryan");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Ophthalmology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Associated Retina Consultants")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Associated Retina Consultants")), "latitude" => "33.53888", "longitude" => "-112.04424")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Stephen")->setLastName("De Souza");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Ophthalmology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Associated Retina Consultants")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Associated Retina Consultants")), "latitude" => "33.53888", "longitude" => "-112.04424")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Alan")->setLastName("Gordon");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Ophthalmology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Associated Retina Consultants")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Associated Retina Consultants")), "latitude" => "33.53888", "longitude" => "-112.04424")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Henry")->setLastName("Kwong Jr.");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Ophthalmology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Associated Retina Consultants")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Associated Retina Consultants")), "latitude" => "33.53888", "longitude" => "-112.04424")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Rahul")->setLastName("Reddy");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Ophthalmology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Associated Retina Consultants")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Associated Retina Consultants")), "latitude" => "33.53888", "longitude" => "-112.04424")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Atria Heart, PPL
		 */

		$physician = new Physicians();
		$physician->setFirstName("Maulik")->setLastName("Shah");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Internal Medicine, Cardiology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Atria Heart, PPL")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Atria Heart, PPL")), "latitude" => "33.63679", "longitude" => "-111.92356")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Wesley")->setLastName("Tyree");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Internal Medicine, Cardiology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Atria Heart, PPL")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Atria Heart, PPL")), "latitude" => "33.63679", "longitude" => "-111.92356")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * BCG Oncology
		 */

		$physician = new Physicians();
		$physician->setFirstName("Donald")->setLastName("Lamm");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Urology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "BCG Oncology")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "BCG Oncology")), "latitude" => "33.63850", "longitude" => "-111.99909")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Berardi Aesthetics and Plastic Surgery
		 */

		$physician = new Physicians();
		$physician->setFirstName("Joseph")->setLastName("Berardi");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Plastic Surgery")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Berardi Aesthetics and Plastic Surgery")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Berardi Aesthetics and Plastic Surgery")), "latitude" => "33.58693", "longitude" => "-111.92674")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Bertrand P Kaper, MD PC
		 */

		$physician = new Physicians();
		$physician->setFirstName("Bertrand")->setLastName("Kaper");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Orthopedic Surgeon")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Bertrand P Kaper, MD PC")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Bertrand P Kaper, MD PC")), "latitude" => "33.67300", "longitude" => "-111.92368")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Bertrand P Kaper, MD PC")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Bertrand P Kaper, MD PC")), "latitude" => "34.59663", "longitude" => "-112.46709")));
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();


		/**
		 * Bruce Freedman M.D.
		 */

		$physician = new Physicians();
		$physician->setFirstName("Bruce")->setLastName("Freedman");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "General Surgery")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Bruce Freedman M.D.")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Bruce Freedman M.D.")), "latitude" => "33.58047", "longitude" => "-111.88277")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Cactus Pediatrics Orthopaedics
		 */

		$physician = new Physicians();
		$physician->setFirstName("Greg")->setLastName("Hrasky");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Pediatric Orthopedics")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Cactus Pediatrics Orthopaedics")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Cactus Pediatrics Orthopaedics")), "latitude" => "33.38739", "longitude" => "-111.87628")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Cactus Pediatrics Orthopaedics")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Cactus Pediatrics Orthopaedics")), "latitude" => "33.58095", "longitude" => "-111.88525")));
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();


		/**
		 * Cardiologists of Scottsdale
		 */

		$physician = new Physicians();
		$physician->setFirstName("Lawrence")->setLastName("Cook");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Cardiology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Cardiologists of Scottsdale")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Cardiologists of Scottsdale")), "latitude" => "33.67149", "longitude" => "-111.90994")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Cardiovascular Consultants
		 */

		$physician = new Physicians();
		$physician->setFirstName("Pradeep")->setLastName("Bhat");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Cardiology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Cardiovascular Consultants")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Cardiovascular Consultants")), "latitude" => "33.57927", "longitude" => "-111.88255")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Cardiovascular Consultants")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Cardiovascular Consultants")), "latitude" => "33.33392", "longitude" => "-111.89129")));
		$manager->persist($practicesHasPhysicians_2);

		$practicesHasPhysicians_3 = new PracticesHasPhysicians();
		$practicesHasPhysicians_3->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Cardiovascular Consultants")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Cardiovascular Consultants")), "latitude" => "33.48898", "longitude" => "-111.92584")));
		$manager->persist($practicesHasPhysicians_3);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Rahool")->setLastName("Karnik");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Cardiology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Cardiovascular Consultants")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Cardiovascular Consultants")), "latitude" => "33.57927", "longitude" => "-111.88255")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Cardiovascular Consultants")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Cardiovascular Consultants")), "latitude" => "33.48898", "longitude" => "-111.92584")));
		$manager->persist($practicesHasPhysicians_2);

		$practicesHasPhysicians_3 = new PracticesHasPhysicians();
		$practicesHasPhysicians_3->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Cardiovascular Consultants")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Cardiovascular Consultants")), "latitude" => "33.64026", "longitude" => "-111.99990")));
		$manager->persist($practicesHasPhysicians_3);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("George")->setLastName("Paik");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Cardiology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Cardiovascular Consultants")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Cardiovascular Consultants")), "latitude" => "33.57927", "longitude" => "-111.88255")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Stephen")->setLastName("Smith");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Vascular Surgery")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Cardiovascular Consultants")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Cardiovascular Consultants")), "latitude" => "33.33392", "longitude" => "-111.89129")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Andy")->setLastName("Tran");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Cardiac Electrophysiology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Cardiovascular Consultants")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Cardiovascular Consultants")), "latitude" => "33.33392", "longitude" => "-111.89129")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Aye")->setLastName("win");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Cardiology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Cardiovascular Consultants")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Cardiovascular Consultants")), "latitude" => "33.33392", "longitude" => "-111.89129")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Cardiovascular Consultants")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Cardiovascular Consultants")), "latitude" => "33.52577", "longitude" => "-112.10059")));
		$manager->persist($practicesHasPhysicians_2);

		$practicesHasPhysicians_3 = new PracticesHasPhysicians();
		$practicesHasPhysicians_3->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Cardiovascular Consultants")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Cardiovascular Consultants")), "latitude" => "33.42648", "longitude" => "-111.84034")));
		$manager->persist($practicesHasPhysicians_3);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Mayurkumar")->setLastName("Bhakta");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Cardiology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Cardiovascular Consultants")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Cardiovascular Consultants")), "latitude" => "33.64026", "longitude" => "-111.99990")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("David")->setLastName("Lin");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Cardiology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Cardiovascular Consultants")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Cardiovascular Consultants")), "latitude" => "33.64026", "longitude" => "-111.99990")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Cardiovascular Consultants")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Cardiovascular Consultants")), "latitude" => "33.42648", "longitude" => "-111.84034")));
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Kent")->setLastName("Chen");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Cardiology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Cardiovascular Consultants")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Cardiovascular Consultants")), "latitude" => "33.52577", "longitude" => "-112.10059")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Andrei")->setLastName("Damian");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Cardiology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Cardiovascular Consultants")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Cardiovascular Consultants")), "latitude" => "33.52577", "longitude" => "-112.10059")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Curtis")->setLastName("Erickson");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Vascular Surgery")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Cardiovascular Consultants")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Cardiovascular Consultants")), "latitude" => "33.52577", "longitude" => "-112.10059")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Renee")->setLastName("Espinosa");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Cardiology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Cardiovascular Consultants")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Cardiovascular Consultants")), "latitude" => "33.52577", "longitude" => "-112.10059")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Camille")->setLastName("Le");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Cardiology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Cardiovascular Consultants")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Cardiovascular Consultants")), "latitude" => "33.52577", "longitude" => "-112.10059")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Nirav")->setLastName("Mehta");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Cardiology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Cardiovascular Consultants")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Cardiovascular Consultants")), "latitude" => "33.52577", "longitude" => "-112.10059")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Allan")->setLastName("Reinfeld");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Cardiology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Cardiovascular Consultants")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Cardiovascular Consultants")), "latitude" => "33.52577", "longitude" => "-112.10059")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Cardiovascular Institute of Scottsdale
		 */

		$physician = new Physicians();
		$physician->setFirstName("Nassim")->setLastName("Haddad");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Cardiology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Cardiovascular Institute of Scottsdale")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Cardiovascular Institute of Scottsdale")), "latitude" => "33.57763", "longitude" => "-111.87763")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Care MD PLC
		 */

		$physician = new Physicians();
		$physician->setFirstName("Katayoun")->setLastName("Baniriah");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Family Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Care MD PLC")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Care MD PLC")), "latitude" => "33.48010", "longitude" => "-111.89216")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Care MD PLC")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Care MD PLC")), "latitude" => "33.61109", "longitude" => "-111.97554")));
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Vafa")->setLastName("Matin");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Family Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Care MD PLC")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Care MD PLC")), "latitude" => "33.48010", "longitude" => "-111.89216")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Care MD PLC")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Care MD PLC")), "latitude" => "33.61109", "longitude" => "-111.97554")));
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();


		/**
		 * Center for Dermatology, PC
		 */

		$physician = new Physicians();
		$physician->setFirstName("Clay")->setLastName("Forsberg");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Plastic Surgery")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Center for Dermatology, PC")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Center for Dermatology, PC")), "latitude" => "33.61537", "longitude" => "-111.89242")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Center for Dermatology, PC")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Center for Dermatology, PC")), "latitude" => "33.50599", "longitude" => "-112.06338")));
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Gary")->setLastName("McCracken");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Dermatology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Center for Dermatology, PC")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Center for Dermatology, PC")), "latitude" => "33.61537", "longitude" => "-111.89242")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Center for Dermatology, PC")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Center for Dermatology, PC")), "latitude" => "33.60797", "longitude" => "-111.71666")));
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Anthony")->setLastName("Nuara");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Dermatology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Center for Dermatology, PC")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Center for Dermatology, PC")), "latitude" => "33.61537", "longitude" => "-111.89242")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("James")->setLastName("Young");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Dermatology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Center for Dermatology, PC")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Center for Dermatology, PC")), "latitude" => "33.61537", "longitude" => "-111.89242")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Center for Dermatology, PC")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Center for Dermatology, PC")), "latitude" => "33.21740", "longitude" => "-111.88403")));
		$manager->persist($practicesHasPhysicians_2);

		$practicesHasPhysicians_3 = new PracticesHasPhysicians();
		$practicesHasPhysicians_3->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Center for Dermatology, PC")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Center for Dermatology, PC")), "latitude" => "33.50599", "longitude" => "-112.06338")));
		$manager->persist($practicesHasPhysicians_3);

		$manager->flush();


		/**
		 * Center for Pain and Supportive Care
		 */

		$physician = new Physicians();
		$physician->setFirstName("Ann Cheri")->setLastName("Fox");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Pain Management")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Center for Pain and Supportive Care")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Center for Pain and Supportive Care")), "latitude" => "33.58236", "longitude" => "-111.98187")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Lisa")->setLastName("Stearns");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Pain Management")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Center for Pain and Supportive Care")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Center for Pain and Supportive Care")), "latitude" => "33.58236", "longitude" => "-111.98187")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Clear Dermatology and Aesthetics Center
		 */

		$physician = new Physicians();
		$physician->setFirstName("Brenda")->setLastName("LaTowsky");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Dermatology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Clear Dermatology and Aesthetics Center")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Clear Dermatology and Aesthetics Center")), "latitude" => "33.67102", "longitude" => "-111.92038")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Colon and Rectal Clinic of Scottsdale
		 */

		$physician = new Physicians();
		$physician->setFirstName("Susan")->setLastName("Garand");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Colorectal Surgery")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Colon and Rectal Clinic of Scottsdale")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Colon and Rectal Clinic of Scottsdale")), "latitude" => "33.55709", "longitude" => "-111.89074")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Andrew")->setLastName("Kassir");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Colorectal Surgery")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Colon and Rectal Clinic of Scottsdale")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Colon and Rectal Clinic of Scottsdale")), "latitude" => "33.55709", "longitude" => "-111.89074")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * DC Ranch Family Medicine, PLLC
		 */

		$physician = new Physicians();
		$physician->setFirstName("Arneyo")->setLastName("Perez");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Family Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "DC Ranch Family Medicine, PLLC")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "DC Ranch Family Medicine, PLLC")), "latitude" => "33.67614", "longitude" => "-111.88881")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Deborah D. Wilson, MD
		 */

		$physician = new Physicians();
		$physician->setFirstName("Deborah")->setLastName("Wilson");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "OB/GYN")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Deborah D. Wilson, MD")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Deborah D. Wilson, MD")), "latitude" => "33.58047", "longitude" => "-111.88277")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Thomas")->setLastName("Waliser");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Gynecology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Deborah D. Wilson, MD")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Deborah D. Wilson, MD")), "latitude" => "33.58047", "longitude" => "-111.88277")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Deborah Trojanowski, MD
		 */

		$physician = new Physicians();
		$physician->setFirstName("Deborah")->setLastName("Trojanowski");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Plastic Surgery")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Deborah Trojanowski, MD")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Deborah Trojanowski, MD")), "latitude" => "33.58443", "longitude" => "-111.90692")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Deer Valley OB/GYN
		 */

		$physician = new Physicians();
		$physician->setFirstName("Victor")->setLastName("Kissil");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "OB/GYN")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Deer Valley OB/GYN")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Deer Valley OB/GYN")), "latitude" => "33.68340", "longitude" => "-112.09976")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * DeRosa Medical
		 */

		$physician = new Physicians();
		$physician->setFirstName("Angela")->setLastName("DeRosa");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Internal Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "DeRosa Medical")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "DeRosa Medical")), "latitude" => "33.63735", "longitude" => "-111.88224")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Desert Center for Allergy and Chest Diseases
		 */

		$physician = new Physicians();
		$physician->setFirstName("Gregory")->setLastName("Cowan");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Allergy")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Desert Center for Allergy and Chest Diseases")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Desert Center for Allergy and Chest Diseases")), "latitude" => "33.63850", "longitude" => "-111.99909")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Desert Center for Allergy and Chest Diseases")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Desert Center for Allergy and Chest Diseases")), "latitude" => "33.64493", "longitude" => "-111.89382")));
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Stephen")->setLastName("Finberg");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Allergy, Pulmonology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Desert Center for Allergy and Chest Diseases")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Desert Center for Allergy and Chest Diseases")), "latitude" => "33.64493", "longitude" => "-111.89382")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Desert Institute for Spine Care, PC
		 */

		$physician = new Physicians();
		$physician->setFirstName("Nima")->setLastName("Salari");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Ortho - Spine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Desert Institute for Spine Care, PC")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Desert Institute for Spine Care, PC")), "latitude" => "33.54160", "longitude" => "-112.04595")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Desert Institute for Spine Care, PC")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Desert Institute for Spine Care, PC")), "latitude" => "33.28600", "longitude" => "-111.74989")));
		$manager->persist($practicesHasPhysicians_2);

		$practicesHasPhysicians_3 = new PracticesHasPhysicians();
		$practicesHasPhysicians_3->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Desert Institute for Spine Care, PC")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Desert Institute for Spine Care, PC")), "latitude" => "33.55411", "longitude" => "-111.89538")));
		$manager->persist($practicesHasPhysicians_3);

		$manager->flush();


		/**
		 * Desert Jewel Obstetrics & Gynecology
		 */

		$physician = new Physicians();
		$physician->setFirstName("Kimberly")->setLastName("Hartzfeld");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "OB/GYN")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Desert Jewel Obstetrics & Gynecology")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Desert Jewel Obstetrics & Gynecology")), "latitude" => "33.48898", "longitude" => "-111.92584")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Courtney")->setLastName("Hunt");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "OB/GYN")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Desert Jewel Obstetrics & Gynecology")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Desert Jewel Obstetrics & Gynecology")), "latitude" => "33.48898", "longitude" => "-111.92584")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Desert Kidney Associates, PLC
		 */

		$physician = new Physicians();
		$physician->setFirstName("Jonathan")->setLastName("Fox");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Orthopedic Surgeon")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Desert Kidney Associates, PLC")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Desert Kidney Associates, PLC")), "latitude" => "33.30694", "longitude" => "-111.86931")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Desert Ridge Family Physicians
		 */

		$physician = new Physicians();
		$physician->setFirstName("Emily")->setLastName("Edwards");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Family Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Desert Ridge Family Physicians")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Desert Ridge Family Physicians")), "latitude" => "33.67568", "longitude" => "-111.97936")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Kristin")->setLastName("Lau");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Family Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Desert Ridge Family Physicians")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Desert Ridge Family Physicians")), "latitude" => "33.67568", "longitude" => "-111.97936")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Chrystal")->setLastName("LeMaster");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Family Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Desert Ridge Family Physicians")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Desert Ridge Family Physicians")), "latitude" => "33.67568", "longitude" => "-111.97936")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Mark")->setLastName("Luba");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Family Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Desert Ridge Family Physicians")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Desert Ridge Family Physicians")), "latitude" => "33.67568", "longitude" => "-111.97936")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Kelly")->setLastName("Luba");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Family Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Desert Ridge Family Physicians")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Desert Ridge Family Physicians")), "latitude" => "33.67568", "longitude" => "-111.97936")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Tiffany")->setLastName("Nelson");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Family Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Desert Ridge Family Physicians")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Desert Ridge Family Physicians")), "latitude" => "33.67568", "longitude" => "-111.97936")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Lisa")->setLastName("Piccione");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Family Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Desert Ridge Family Physicians")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Desert Ridge Family Physicians")), "latitude" => "33.67568", "longitude" => "-111.97936")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Patricia")->setLastName("Rodriguez");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Family Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Desert Ridge Family Physicians")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Desert Ridge Family Physicians")), "latitude" => "33.67568", "longitude" => "-111.97936")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Natalie")->setLastName("Suedekum");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Family Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Desert Ridge Family Physicians")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Desert Ridge Family Physicians")), "latitude" => "33.67568", "longitude" => "-111.97936")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Alethea")->setLastName("Turner");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Family Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Desert Ridge Family Physicians")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Desert Ridge Family Physicians")), "latitude" => "33.67568", "longitude" => "-111.97936")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Desert Spine & Sports Physicians
		 */

		$physician = new Physicians();
		$physician->setFirstName("Brad")->setLastName("Sorosky");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Physical Medicine and Rehab")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Desert Spine & Sports Physicians")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Desert Spine & Sports Physicians")), "latitude" => "33.49070", "longitude" => "-112.03049")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Desert Spine & Sports Physicians")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Desert Spine & Sports Physicians")), "latitude" => "33.37887", "longitude" => "-111.83465")));
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();


		/**
		 * Desert Springs Cancer Care
		 */

		$physician = new Physicians();
		$physician->setFirstName("Andrew")->setLastName("Buresh");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Hematology-Oncology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Desert Springs Cancer Care")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Desert Springs Cancer Care")), "latitude" => "33.60797", "longitude" => "-111.71666")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Desert Springs Cancer Care")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Desert Springs Cancer Care")), "latitude" => "33.67171", "longitude" => "-111.92334")));
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Brendan")->setLastName("Curley");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Medical Oncology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Desert Springs Cancer Care")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Desert Springs Cancer Care")), "latitude" => "33.67171", "longitude" => "-111.92334")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Desert Vista Medical Associates
		 */

		$physician = new Physicians();
		$physician->setFirstName("Amarjyot")->setLastName("Gill");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Hospitalist")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Desert Vista Medical Associates")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Desert Vista Medical Associates")), "latitude" => "33.48867", "longitude" => "-111.92315")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Antonin")->setLastName("Jaros");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Hospitalist")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Desert Vista Medical Associates")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Desert Vista Medical Associates")), "latitude" => "33.48867", "longitude" => "-111.92315")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Amy")->setLastName("Lee");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Hospitalist")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Desert Vista Medical Associates")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Desert Vista Medical Associates")), "latitude" => "33.48867", "longitude" => "-111.92315")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Desert Vista Medical Associates")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Desert Vista Medical Associates")), "latitude" => "33.67069", "longitude" => "-111.92203")));
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Steven")->setLastName("Parker");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Hospitalist")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Desert Vista Medical Associates")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Desert Vista Medical Associates")), "latitude" => "33.48867", "longitude" => "-111.92315")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Justin")->setLastName("Possner");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Hospitalist")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Desert Vista Medical Associates")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Desert Vista Medical Associates")), "latitude" => "33.48867", "longitude" => "-111.92315")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Doug")->setLastName("Shuman");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Hospitalist")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Desert Vista Medical Associates")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Desert Vista Medical Associates")), "latitude" => "33.48867", "longitude" => "-111.92315")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * DiabeVita Medical Center
		 */

		$physician = new Physicians();
		$physician->setFirstName("Helen")->setLastName("Hilts");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Family Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "DiabeVita Medical Center")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "DiabeVita Medical Center")), "latitude" => "33.52432", "longitude" => "-111.92104")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Digestive Health Specialist - Arizona
		 */

		$physician = new Physicians();
		$physician->setFirstName("Bradford")->setLastName("Jones");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Gastroenterology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Digestive Health Specialist - Arizona")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Digestive Health Specialist - Arizona")), "latitude" => "33.64545", "longitude" => "-111.89432")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Suzanne")->setLastName("Skoog");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Gastroenterology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Digestive Health Specialist - Arizona")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Digestive Health Specialist - Arizona")), "latitude" => "33.64545", "longitude" => "-111.89432")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Norman")->setLastName("Zitomer");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Gastroenterology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Digestive Health Specialist - Arizona")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Digestive Health Specialist - Arizona")), "latitude" => "33.64545", "longitude" => "-111.89432")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Donald A. Opila M.D.
		 */

		$physician = new Physicians();
		$physician->setFirstName("Donald")->setLastName("Opila");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Internal Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Donald A. Opila M.D.")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Donald A. Opila M.D.")), "latitude" => "33.48764", "longitude" => "-111.92426")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * East Scottsdale Medical Care
		 */

		$physician = new Physicians();
		$physician->setFirstName("Tracey")->setLastName("Drummond");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Pediatrics")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "East Scottsdale Medical Care")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "East Scottsdale Medical Care")), "latitude" => "33.58195", "longitude" => "-111.83296")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * East Valley Endocrinology Diabetes and Metabolism
		 */

		$physician = new Physicians();
		$physician->setFirstName("Atul")->setLastName("Lalani");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Endocrinology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "East Valley Endocrinology Diabetes and Metabolism")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "East Valley Endocrinology Diabetes and Metabolism")), "latitude" => "33.57847", "longitude" => "-111.87626")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Elena Sibley, MD
		 */

		$physician = new Physicians();
		$physician->setFirstName("Elena")->setLastName("Sibley");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Breast Surgery, General Surgery")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Elena Sibley, MD")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Elena Sibley, MD")), "latitude" => "33.48981", "longitude" => "-111.92355")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Endocrinology Diabetes & Longevity Center of Arizona
		 */

		$physician = new Physicians();
		$physician->setFirstName("Kristina")->setLastName("Rudgear");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Endocrinology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Endocrinology Diabetes & Longevity Center of Arizona")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Endocrinology Diabetes & Longevity Center of Arizona")), "latitude" => "33.30453", "longitude" => "-111.91189")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Endocrinology Diabetes & Longevity Center of Arizona")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Endocrinology Diabetes & Longevity Center of Arizona")), "latitude" => "33.68546", "longitude" => "-111.92233")));
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();


		/**
		 * Entegrity Ear, Nose and Throat Specialists
		 */

		$physician = new Physicians();
		$physician->setFirstName("Samuel")->setLastName("Bailey");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Ear, Nose, and Throat")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Entegrity Ear, Nose and Throat Specialists")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Entegrity Ear, Nose and Throat Specialists")), "latitude" => "33.65210", "longitude" => "-111.93070")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Jeffrey")->setLastName("Dyer");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Ear, Nose, and Throat")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Entegrity Ear, Nose and Throat Specialists")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Entegrity Ear, Nose and Throat Specialists")), "latitude" => "33.65210", "longitude" => "-111.93070")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Christopher")->setLastName("Lykins");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Ear, Nose, and Throat")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Entegrity Ear, Nose and Throat Specialists")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Entegrity Ear, Nose and Throat Specialists")), "latitude" => "33.65210", "longitude" => "-111.93070")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Evangelista Orthopedic Clinic
		 */

		$physician = new Physicians();
		$physician->setFirstName("Gregory")->setLastName("Evangelista");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Orthopedic Surgeon")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Evangelista Orthopedic Clinic")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Evangelista Orthopedic Clinic")), "latitude" => "33.50249", "longitude" => "-111.93619")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * F. Timm McCarty D.O.
		 */

		$physician = new Physicians();
		$physician->setFirstName("Timm")->setLastName("McCarty");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Family Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "F. Timm McCarty D.O.")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "F. Timm McCarty D.O.")), "latitude" => "33.48732", "longitude" => "-111.91820")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Foot and Ankle Center of AZ
		 */

		$physician = new Physicians();
		$physician->setFirstName("Kris")->setLastName("Dinucci");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Podiatry")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Foot and Ankle Center of AZ")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Foot and Ankle Center of AZ")), "latitude" => "33.68485", "longitude" => "-111.92270")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Fountain Hills Pediatrics and Internal Medicine
		 */

		$physician = new Physicians();
		$physician->setFirstName("Jyoti")->setLastName("Patel");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Med-Peds")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Fountain Hills Pediatrics and Internal Medicine")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Fountain Hills Pediatrics and Internal Medicine")), "latitude" => "33.60895", "longitude" => "-111.71507")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Four Peaks Neurology
		 */

		$physician = new Physicians();
		$physician->setFirstName("Fern")->setLastName("Arlen");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Neurology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Four Peaks Neurology")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Four Peaks Neurology")), "latitude" => "33.57391", "longitude" => "-111.88565")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Constantine")->setLastName("Moschonas");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Neurology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Four Peaks Neurology")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Four Peaks Neurology")), "latitude" => "33.57391", "longitude" => "-111.88565")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Marisa")->setLastName("Sosinsky");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Neurology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Four Peaks Neurology")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Four Peaks Neurology")), "latitude" => "33.57391", "longitude" => "-111.88565")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Gary Adler M.D.
		 */

		$physician = new Physicians();
		$physician->setFirstName("Gary")->setLastName("Adler");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Hand Surgery")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Gary Adler M.D.")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Gary Adler M.D.")), "latitude" => "33.61194", "longitude" => "-111.89672")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Gary M. Weiner M.D.
		 */

		$physician = new Physicians();
		$physician->setFirstName("Gary")->setLastName("Weiner");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Orthopedic Surgeon")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Gary M. Weiner M.D.")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Gary M. Weiner M.D.")), "latitude" => "33.49105", "longitude" => "-111.92413")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Gawley Plastic Surgery M.D
		 */

		$physician = new Physicians();
		$physician->setFirstName("Bryan")->setLastName("Gawley");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Plastic Surgery")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Gawley Plastic Surgery M.D")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Gawley Plastic Surgery M.D")), "latitude" => "33.63912", "longitude" => "-111.88781")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Geoffrey H. Cook MD
		 */

		$physician = new Physicians();
		$physician->setFirstName("Geoffrey")->setLastName("Cook");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Orthopedic Surgeon")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Geoffrey H. Cook MD")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Geoffrey H. Cook MD")), "latitude" => "33.58047", "longitude" => "-111.88277")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Geoffrey H. Cook MD")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Geoffrey H. Cook MD")), "latitude" => "34.86322", "longitude" => "-111.81143")));
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();


		/**
		 * Gerrit Henry D.O.
		 */

		$physician = new Physicians();
		$physician->setFirstName("Henry")->setLastName("Gerrit");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Dermatology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Gerrit Henry D.O.")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Gerrit Henry D.O.")), "latitude" => "33.48659", "longitude" => "-111.92410")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Gordon Grado, MD, Inc.
		 */

		$physician = new Physicians();
		$physician->setFirstName("Gordon")->setLastName("Grado");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Radiation-Oncology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Gordon Grado, MD, Inc.")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Gordon Grado, MD, Inc.")), "latitude" => "33.48132", "longitude" => "-111.92244")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Gregory M. Crever, M.D.
		 */

		$physician = new Physicians();
		$physician->setFirstName("Gregory")->setLastName("Crever");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Family Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Gregory M. Crever, M.D.")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Gregory M. Crever, M.D.")), "latitude" => "33.55420", "longitude" => "-111.89589")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Gynecology Today, PLLC
		 */

		$physician = new Physicians();
		$physician->setFirstName("Alexandra")->setLastName("Kidd");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Gynecology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Gynecology Today, PLLC")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Gynecology Today, PLLC")), "latitude" => "33.57927", "longitude" => "-111.88255")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * HonorHealth Bariatric Center
		 */

		$physician = new Physicians();
		$physician->setFirstName("Jason")->setLastName("Reynoso");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Bariatrics")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Bariatric Center")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Bariatric Center")), "latitude" => "33.57927", "longitude" => "-111.88255")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("James")->setLastName("Swain");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Bariatrics")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Bariatric Center")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Bariatric Center")), "latitude" => "33.57927", "longitude" => "-111.88255")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * HonorHealth Center for Endocrine and Pancreas Surgery
		 */

		$physician = new Physicians();
		$physician->setFirstName("Jeffrey")->setLastName("Van Lier Ribbink");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "General Surgery")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Center for Endocrine and Pancreas Surgery")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Center for Endocrine and Pancreas Surgery")), "latitude" => "33.58115", "longitude" => "-111.88368")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * HonorHealth Corporate Health - Osborn
		 */

		$physician = new Physicians();
		$physician->setFirstName("Kurt")->setLastName("Zangerle");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Occupational Health")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Corporate Health - Osborn")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Corporate Health - Osborn")), "latitude" => "33.48898", "longitude" => "-111.92584")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * HonorHealth Gastroenterology - Osborn
		 */

		$physician = new Physicians();
		$physician->setFirstName("Jay")->setLastName("Mellen");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Gastroenterology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Gastroenterology - Osborn")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Gastroenterology - Osborn")), "latitude" => "33.580472", "longitude" => "-111.882766")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Gastroenterology - Osborn")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Gastroenterology - Osborn")), "latitude" => "33.48898", "longitude" => "-111.92584")));
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Leon")->setLastName("Rigberg");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Gastroenterology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Gastroenterology - Osborn")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Gastroenterology - Osborn")), "latitude" => "33.580472", "longitude" => "-111.882766")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Gastroenterology - Osborn")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Gastroenterology - Osborn")), "latitude" => "33.48898", "longitude" => "-111.92584")));
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Akshay")->setLastName("Shah");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Gastroenterology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Gastroenterology - Osborn")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Gastroenterology - Osborn")), "latitude" => "33.580472", "longitude" => "-111.882766")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Gastroenterology - Osborn")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Gastroenterology - Osborn")), "latitude" => "33.48898", "longitude" => "-111.92584")));
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Amar")->setLastName("Thosani");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Gastroenterology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Gastroenterology - Osborn")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Gastroenterology - Osborn")), "latitude" => "33.580472", "longitude" => "-111.882766")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Gastroenterology - Osborn")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Gastroenterology - Osborn")), "latitude" => "33.48898", "longitude" => "-111.92584")));
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();


		/**
		 * HonorHealth Gastroenterology - Thompson Peak
		 */

		$physician = new Physicians();
		$physician->setFirstName("Gavin")->setLastName("Levinthal");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Gastroenterology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Gastroenterology - Thompson Peak")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Gastroenterology - Thompson Peak")), "latitude" => "33.67300", "longitude" => "-111.92368")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Stuart")->setLastName("Tiester");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Gastroenterology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Gastroenterology - Thompson Peak")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Gastroenterology - Thompson Peak")), "latitude" => "33.67300", "longitude" => "-111.92368")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * HonorHealth Heart Group - Shea
		 */

		$physician = new Physicians();
		$physician->setFirstName("Robert")->setLastName("Burke");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Cardiology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Heart Group - Shea")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Heart Group - Shea")), "latitude" => "33.57872", "longitude" => "-111.88012")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Neil")->setLastName("Goldberg");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Cardiology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Heart Group - Shea")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Heart Group - Shea")), "latitude" => "33.57872", "longitude" => "-111.88012")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Nikhil")->setLastName("Iyengar");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Cardiology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Heart Group - Shea")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Heart Group - Shea")), "latitude" => "33.57872", "longitude" => "-111.88012")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Kevin")->setLastName("Klassen");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Cardiology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Heart Group - Shea")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Heart Group - Shea")), "latitude" => "33.57872", "longitude" => "-111.88012")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("David")->setLastName("Rizik");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Cardiology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Heart Group - Shea")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Heart Group - Shea")), "latitude" => "33.57872", "longitude" => "-111.88012")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * HonorHealth Inpatient Psychiatry
		 */

		$physician = new Physicians();
		$physician->setFirstName("William")->setLastName("Fulton");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Psychiatry")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Inpatient Psychiatry")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Inpatient Psychiatry")), "latitude" => "33.58047", "longitude" => "-111.88277")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * HonorHealth Medical Group - Arcadia 100
		 */

		$physician = new Physicians();
		$physician->setFirstName("Frank")->setLastName("Cibulka");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Family Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Medical Group - Arcadia 100")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Medical Group - Arcadia 100")), "address2" => "Ste. 100", "latitude" => "33.49534", "longitude" => "-111.97665")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Stacy")->setLastName("Gustin");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Family Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Medical Group - Arcadia 100")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Medical Group - Arcadia 100")), "address2" => "Ste. 100", "latitude" => "33.49534", "longitude" => "-111.97665")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Janette")->setLastName("Reeves");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Family Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Medical Group - Arcadia 100")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Medical Group - Arcadia 100")), "address2" => "Ste. 100", "latitude" => "33.49534", "longitude" => "-111.97665")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * HonorHealth Medical Group - Arcadia 101
		 */

		$physician = new Physicians();
		$physician->setFirstName("Eric")->setLastName("Goldberg");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Internal Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Medical Group - Arcadia 101")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Medical Group - Arcadia 101")), "address2" => "Ste. 101", "latitude" => "33.49534", "longitude" => "-111.97665")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Tiffany")->setLastName("Pankow");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Family Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Medical Group - Arcadia 101")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Medical Group - Arcadia 101")), "address2" => "Ste. 101", "latitude" => "33.49534", "longitude" => "-111.97665")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Ira")->setLastName("Ungar");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Family Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Medical Group - Arcadia 101")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Medical Group - Arcadia 101")), "address2" => "Ste. 101", "latitude" => "33.49534", "longitude" => "-111.97665")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * HonorHealth Medical Group - Chaparral
		 */

		$physician = new Physicians();
		$physician->setFirstName("Rubina")->setLastName("Raja");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Internal Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Medical Group - Chaparral")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Medical Group - Chaparral")), "latitude" => "33.51181", "longitude" => "-111.92494")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Medical Group - Shea")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Medical Group - Shea")), "latitude" => "33.57954", "longitude" => "-111.88126")));
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Gary")->setLastName("Craine");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Internal Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Medical Group - Chaparral")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Medical Group - Chaparral")), "latitude" => "33.51181", "longitude" => "-111.92494")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Randy")->setLastName("Gelow");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Family Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Medical Group - Chaparral")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Medical Group - Chaparral")), "latitude" => "33.51181", "longitude" => "-111.92494")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("William")->setLastName("Redenius");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Internal Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Medical Group - Chaparral")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Medical Group - Chaparral")), "latitude" => "33.51181", "longitude" => "-111.92494")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * HonorHealth Medical Group - East Tempe
		 */

		$physician = new Physicians();
		$physician->setFirstName("Christopher")->setLastName("Finlay");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Family Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Medical Group - East Tempe")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Medical Group - East Tempe")), "latitude" => "33.40660", "longitude" => "-111.90752")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Robert")->setLastName("Milam");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Family Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Medical Group - East Tempe")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Medical Group - East Tempe")), "latitude" => "33.40660", "longitude" => "-111.90752")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * HonorHealth Medical Group - McKellips
		 */

		$physician = new Physicians();
		$physician->setFirstName("Dean")->setLastName("Faust");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Family Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Medical Group - McKellips")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Medical Group - McKellips")), "latitude" => "33.45207", "longitude" => "-111.80642")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Clifford")->setLastName("Gazda");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Family Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Medical Group - McKellips")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Medical Group - McKellips")), "latitude" => "33.45207", "longitude" => "-111.80642")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Nathan")->setLastName("Matthews");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Family Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Medical Group - McKellips")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Medical Group - McKellips")), "latitude" => "33.45207", "longitude" => "-111.80642")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Elizabeth")->setLastName("Smith");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Family Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Medical Group - McKellips")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Medical Group - McKellips")), "latitude" => "33.45207", "longitude" => "-111.80642")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * HonorHealth Medical Group - Mescal
		 */

		$physician = new Physicians();
		$physician->setFirstName("Robert")->setLastName("Creager");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Family Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Medical Group - Mescal")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Medical Group - Mescal")), "latitude" => "33.58658", "longitude" => "-111.92670")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Alan")->setLastName("Mallace");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Rheumatology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Medical Group - Mescal")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Medical Group - Mescal")), "latitude" => "33.58658", "longitude" => "-111.92670")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Jose")->setLastName("Reynoso");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Family Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Medical Group - Mescal")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Medical Group - Mescal")), "latitude" => "33.58658", "longitude" => "-111.92670")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Hollis")->setLastName("Underwood");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Internal Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Medical Group - Mescal")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Medical Group - Mescal")), "latitude" => "33.58658", "longitude" => "-111.92670")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * HonorHealth Medical Group - Osborn
		 */

		$physician = new Physicians();
		$physician->setFirstName("Dennis")->setLastName("Frank");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Internal Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Medical Group - Osborn")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Medical Group - Osborn")), "latitude" => "33.49105", "longitude" => "-111.92413")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Kim")->setLastName("Olson Gibbs");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Family Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Medical Group - Osborn")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Medical Group - Osborn")), "latitude" => "33.49105", "longitude" => "-111.92413")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Nicole")->setLastName("Thrift");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Internal Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Medical Group - Osborn")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Medical Group - Osborn")), "latitude" => "33.49105", "longitude" => "-111.92413")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("")->setLastName("");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Family Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Medical Group - Osborn")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Medical Group - Osborn")), "latitude" => "33.49105", "longitude" => "-111.92413")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * HonorHealth Medical Group - Paradise Valley
		 */

		$physician = new Physicians();
		$physician->setFirstName("Jamie")->setLastName("Beckman");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Family Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Medical Group - Paradise Valley")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Medical Group - Paradise Valley")), "latitude" => "33.58333", "longitude" => "-111.97301")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Gary")->setLastName("Kiefer");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Family Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Medical Group - Paradise Valley")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Medical Group - Paradise Valley")), "latitude" => "33.58333", "longitude" => "-111.97301")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Jeffrey")->setLastName("Leitner");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Family Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Medical Group - Paradise Valley")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Medical Group - Paradise Valley")), "latitude" => "33.58333", "longitude" => "-111.97301")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * HonorHealth Medical Group - Shea
		 */

		$physician = new Physicians();
		$physician->setFirstName("Melinda")->setLastName("Atienza");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Internal Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Medical Group - Shea")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Medical Group - Shea")), "latitude" => "33.57954", "longitude" => "-111.88126")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Renee")->setLastName("Gazda");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Family Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Medical Group - Shea")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Medical Group - Shea")), "latitude" => "33.57954", "longitude" => "-111.88126")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Steven")->setLastName("Lugo");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Family Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Medical Group - Shea")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Medical Group - Shea")), "latitude" => "33.57954", "longitude" => "-111.88126")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Madonna")->setLastName("Mallari");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Internal Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Medical Group - Shea")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Medical Group - Shea")), "latitude" => "33.57954", "longitude" => "-111.88126")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Paul")->setLastName("Sieckmann");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Family Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Medical Group - Shea")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Medical Group - Shea")), "latitude" => "33.57954", "longitude" => "-111.88126")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Alvin")->setLastName("Wong");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Internal Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Medical Group - Shea")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Medical Group - Shea")), "latitude" => "33.57954", "longitude" => "-111.88126")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * HonorHealth Medical Group - Thompson Peak
		 */

		$physician = new Physicians();
		$physician->setFirstName("Dee")->setLastName("Allred");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Family Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Medical Group - Thompson Peak")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Medical Group - Thompson Peak")), "latitude" => "33.67300", "longitude" => "-111.92368")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Jennifer")->setLastName("Burke");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Family Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Medical Group - Thompson Peak")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Medical Group - Thompson Peak")), "latitude" => "33.67300", "longitude" => "-111.92368")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Anuneet")->setLastName("Haas");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Internal Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Medical Group - Thompson Peak")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Medical Group - Thompson Peak")), "latitude" => "33.67300", "longitude" => "-111.92368")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Mark")->setLastName("Lewis");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Internal Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Medical Group - Thompson Peak")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Medical Group - Thompson Peak")), "latitude" => "33.67300", "longitude" => "-111.92368")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Theodore")->setLastName("Prier");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Family Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Medical Group - Thompson Peak")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Medical Group - Thompson Peak")), "latitude" => "33.67300", "longitude" => "-111.92368")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Robert")->setLastName("Segal");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Family Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Medical Group - Thompson Peak")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Medical Group - Thompson Peak")), "latitude" => "33.67300", "longitude" => "-111.92368")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Richard")->setLastName("Silver");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Internal Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Medical Group - Thompson Peak")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Medical Group - Thompson Peak")), "latitude" => "33.67300", "longitude" => "-111.92368")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Robert")->setLastName("Taxin");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Family Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Medical Group - Thompson Peak")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Medical Group - Thompson Peak")), "latitude" => "33.67300", "longitude" => "-111.92368")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("James")->setLastName("Vogt");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Family Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Medical Group - Thompson Peak")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Medical Group - Thompson Peak")), "latitude" => "33.67300", "longitude" => "-111.92368")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * HonorHealth Medical Group - West Tempe
		 */

		$physician = new Physicians();
		$physician->setFirstName("Kristen")->setLastName("Thomsen");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Family Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Medical Group - West Tempe")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Medical Group - West Tempe")), "latitude" => "33.41092", "longitude" => "-111.96121")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * HonorHealth Neurology - Shea
		 */

		$physician = new Physicians();
		$physician->setFirstName("Jeffrey")->setLastName("Becker");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Neurohospitalist")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Neurology - Shea")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Neurology - Shea")), "latitude" => "33.58047", "longitude" => "-111.88277")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Charles")->setLastName("Crinnian");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Neurohospitalist")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Neurology - Shea")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Neurology - Shea")), "latitude" => "33.58047", "longitude" => "-111.88277")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * HonorHealth Surgical and Trauma Specialists
		 */

		$physician = new Physicians();
		$physician->setFirstName("Denise")->setLastName("Cornejo");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "General Surgery / Trauma-Crit Care")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Surgical and Trauma Specialists")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Surgical and Trauma Specialists")), "latitude" => "33.48898", "longitude" => "-111.92584")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Parker")->setLastName("Fillmore");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "General Surgery / Trauma-Crit Care")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Surgical and Trauma Specialists")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Surgical and Trauma Specialists")), "latitude" => "33.48898", "longitude" => "-111.92584")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Charles")->setLastName("Hu");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "General Surgery / Trauma-Crit Care")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Surgical and Trauma Specialists")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Surgical and Trauma Specialists")), "latitude" => "33.48898", "longitude" => "-111.92584")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Frank")->setLastName("Mitchell");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "General Surgery / Trauma-Crit Care")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Surgical and Trauma Specialists")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Surgical and Trauma Specialists")), "latitude" => "33.48898", "longitude" => "-111.92584")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * HonorHealth Urgent Care Plus
		 */

		$physician = new Physicians();
		$physician->setFirstName("Louis")->setLastName("Hagler");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Urgent Care")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Urgent Care Plus")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Urgent Care Plus")), "latitude" => "33.61307", "longitude" => "-111.97708")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Mufid")->setLastName("Khoury");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Urgent Care")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Urgent Care Plus")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Urgent Care Plus")), "latitude" => "33.61307", "longitude" => "-111.97708")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Horizon Eye Specialists and Lasik Center
		 */

		$physician = new Physicians();
		$physician->setFirstName("Angela")->setLastName("Herro");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Ophthalmology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Horizon Eye Specialists and Lasik Center")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Horizon Eye Specialists and Lasik Center")), "latitude" => "33.63501", "longitude" => "-112.23700")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Horizon Eye Specialists and Lasik Center")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Horizon Eye Specialists and Lasik Center")), "latitude" => "33.65290", "longitude" => "-111.92959")));
		$manager->persist($practicesHasPhysicians_2);

		$practicesHasPhysicians_3 = new PracticesHasPhysicians();
		$practicesHasPhysicians_3->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Horizon Eye Specialists and Lasik Center")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Horizon Eye Specialists and Lasik Center")), "latitude" => "33.48332", "longitude" => "-112.06988")));
		$manager->persist($practicesHasPhysicians_3);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Jonathan")->setLastName("Levin");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Ophthalmology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Horizon Eye Specialists and Lasik Center")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Horizon Eye Specialists and Lasik Center")), "latitude" => "33.63501", "longitude" => "-112.23700")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Horizon Eye Specialists and Lasik Center")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Horizon Eye Specialists and Lasik Center")), "latitude" => "33.65290", "longitude" => "-111.92959")));
		$manager->persist($practicesHasPhysicians_2);

		$practicesHasPhysicians_3 = new PracticesHasPhysicians();
		$practicesHasPhysicians_3->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Horizon Eye Specialists and Lasik Center")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Horizon Eye Specialists and Lasik Center")), "latitude" => "33.48332", "longitude" => "-112.06988")));
		$manager->persist($practicesHasPhysicians_3);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Robert")->setLastName("McCulloch");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Ophthalmology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Horizon Eye Specialists and Lasik Center")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Horizon Eye Specialists and Lasik Center")), "latitude" => "33.65290", "longitude" => "-111.92959")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Horizon Eye Specialists and Lasik Center")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Horizon Eye Specialists and Lasik Center")), "latitude" => "33.48332", "longitude" => "-112.06988")));
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();


		/**
		 * Integrated Orthopedics of AZ, PPLC
		 */

		$physician = new Physicians();
		$physician->setFirstName("Brian")->setLastName("Gruber");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Orthopedic Surgeon")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Integrated Orthopedics of AZ, PPLC")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Integrated Orthopedics of AZ, PPLC")), "latitude" => "33.69654", "longitude" => "-111.96907")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Integrative Cardiology & Preventative Medicine Center
		 */

		$physician = new Physicians();
		$physician->setFirstName("Dean")->setLastName("Silver");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Cardiology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Integrative Cardiology & Preventative Medicine Center")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Integrative Cardiology & Preventative Medicine Center")), "latitude" => "33.58658", "longitude" => "-111.92670")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Ironwood Physicians, PC
		 */

		$physician = new Physicians();
		$physician->setFirstName("Diane")->setLastName("Recine");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Radiation-Oncology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Ironwood Physicians, PC")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Ironwood Physicians, PC")), "latitude" => "33.581146", "longitude" => "-111.883676")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Ironwood Physicians, PC")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Ironwood Physicians, PC")), "latitude" => "33.58528", "longitude" => "-111.88934")));
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Rakesh")->setLastName("Bagai");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Hematology-Oncology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Ironwood Physicians, PC")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Ironwood Physicians, PC")), "latitude" => "33.58820", "longitude" => "-111.97649")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("James")->setLastName("Ewing");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Hematology-Oncology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Ironwood Physicians, PC")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Ironwood Physicians, PC")), "latitude" => "33.58820", "longitude" => "-111.97649")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Ironwood Physicians, PC")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Ironwood Physicians, PC")), "latitude" => "33.29403", "longitude" => "-111.87356")));
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Jeffrey")->setLastName("Isaacs");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Hematology-Oncology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Ironwood Physicians, PC")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Ironwood Physicians, PC")), "latitude" => "33.58820", "longitude" => "-111.97649")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Tara")->setLastName("Iyengar");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Hematology-Oncology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Ironwood Physicians, PC")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Ironwood Physicians, PC")), "latitude" => "33.58820", "longitude" => "-111.97649")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Boo Ghee")->setLastName("Low");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Hematology-Oncology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Ironwood Physicians, PC")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Ironwood Physicians, PC")), "latitude" => "33.58820", "longitude" => "-111.97649")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Davis")->setLastName("Romney");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Radiation-Oncology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Ironwood Physicians, PC")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Ironwood Physicians, PC")), "latitude" => "33.28478", "longitude" => "-111.75031")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Ironwood Physicians, PC")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Ironwood Physicians, PC")), "latitude" => "33.30236", "longitude" => "-111.98120")));
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Rajesh")->setLastName("Bagai");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Hematology-Oncology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Ironwood Physicians, PC")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Ironwood Physicians, PC")), "latitude" => "33.63414", "longitude" => "-112.18356")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Elisa")->setLastName("Bomgaars");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Hematology-Oncology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Ironwood Physicians, PC")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Ironwood Physicians, PC")), "latitude" => "33.63414", "longitude" => "-112.18356")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Rajesh")->setLastName("Kukunoor");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Hematology-Oncology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Ironwood Physicians, PC")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Ironwood Physicians, PC")), "latitude" => "33.63414", "longitude" => "-112.18356")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Patrick")->setLastName("Miller");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Radiation-Oncology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Ironwood Physicians, PC")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Ironwood Physicians, PC")), "latitude" => "33.63414", "longitude" => "-112.18356")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Murali")->setLastName("Murty");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Radiation-Oncology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Ironwood Physicians, PC")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Ironwood Physicians, PC")), "latitude" => "33.63414", "longitude" => "-112.18356")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Ironwood Physicians, PC")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Ironwood Physicians, PC")), "latitude" => "33.58528", "longitude" => "-111.88934")));
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Joseph")->setLastName("Nabong");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Hematology-Oncology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Ironwood Physicians, PC")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Ironwood Physicians, PC")), "latitude" => "33.63414", "longitude" => "-112.18356")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Jason")->setLastName("Salganick");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Hematology-Oncology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Ironwood Physicians, PC")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Ironwood Physicians, PC")), "latitude" => "33.63414", "longitude" => "-112.18356")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Aaron")->setLastName("Ambrad");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Radiation-Oncology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Ironwood Physicians, PC")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Ironwood Physicians, PC")), "latitude" => "33.41289", "longitude" => "-111.69938")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Alice")->setLastName("Tsai");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Radiation-Oncology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Ironwood Physicians, PC")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Ironwood Physicians, PC")), "latitude" => "33.41289", "longitude" => "-111.69938")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Ironwood Physicians, PC")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Ironwood Physicians, PC")), "latitude" => "33.29403", "longitude" => "-111.87356")));
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Mark")->setLastName("Ono");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Radiation-Oncology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Ironwood Physicians, PC")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Ironwood Physicians, PC")), "latitude" => "33.29403", "longitude" => "-111.87356")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Charles")->setLastName("Woo");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Radiation-Oncology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Ironwood Physicians, PC")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Ironwood Physicians, PC")), "latitude" => "33.29403", "longitude" => "-111.87356")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Jamie Kapner M.D.
		 */

		$physician = new Physicians();
		$physician->setFirstName("Jamie")->setLastName("Kapner");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Urology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Jamie Kapner M.D.")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Jamie Kapner M.D.")), "latitude" => "33.57927", "longitude" => "-111.88255")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Keith Zacher, MD
		 */

		$physician = new Physicians();
		$physician->setFirstName("Keith")->setLastName("Zacher");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "General Surgery")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Keith Zacher, MD")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Keith Zacher, MD")), "latitude" => "33.48898", "longitude" => "-111.92584")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Kids Connection Pediatrics
		 */

		$physician = new Physicians();
		$physician->setFirstName("Kara")->setLastName("Tiffany");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Pediatrics")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Kids Connection Pediatrics")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Kids Connection Pediatrics")), "latitude" => "33.63850", "longitude" => "-111.99909")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Lifescape Medical Associates
		 */

		$physician = new Physicians();
		$physician->setFirstName("Jennifer")->setLastName("King");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Family Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Lifescape Medical Associates")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Lifescape Medical Associates")), "latitude" => "33.63978", "longitude" => "-111.89379")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("William")->setLastName("Strohman");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Family Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Lifescape Medical Associates")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Lifescape Medical Associates")), "latitude" => "33.63978", "longitude" => "-111.89379")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * McDowell Mountain Gynecology
		 */

		$physician = new Physicians();
		$physician->setFirstName("Rachel")->setLastName("Spieldoch");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Gynecology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "McDowell Mountain Gynecology")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "McDowell Mountain Gynecology")), "latitude" => "33.64081", "longitude" => "-111.95928")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Medcubed PLLC
		 */

		$physician = new Physicians();
		$physician->setFirstName("Sam")->setLastName("Fereidouni");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Family Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Medcubed PLLC")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Medcubed PLLC")), "latitude" => "33.69455", "longitude" => "-111.91607")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Najma Usmani M.D.
		 */

		$physician = new Physicians();
		$physician->setFirstName("Najma")->setLastName("Usmani");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Pulmonary-Critical Care")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Najma Usmani M.D.")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Najma Usmani M.D.")), "latitude" => "33.48764", "longitude" => "-111.92426")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Neighborhood Outreach Access for Health Scottsdale Healthcare
		 */

		$physician = new Physicians();
		$physician->setFirstName("Alan")->setLastName("Schalscha");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Family Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Neighborhood Outreach Access for Health Scottsdale Healthcare")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Neighborhood Outreach Access for Health Scottsdale Healthcare")), "latitude" => "33.58780", "longitude" => "-111.83992")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Stephanie")->setLastName("Briney");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Family Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Neighborhood Outreach Access for Health Scottsdale Healthcare")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Neighborhood Outreach Access for Health Scottsdale Healthcare")), "latitude" => "33.46215", "longitude" => "-111.98155")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * NKL Neurology
		 */

		$physician = new Physicians();
		$physician->setFirstName("Nida")->setLastName("Laurin");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Neurology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "NKL Neurology")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "NKL Neurology")), "latitude" => "33.57561", "longitude" => "-111.87557")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * NOAH-Heuser Family Medicine Center Scottsdale Healthcare
		 */

		$physician = new Physicians();
		$physician->setFirstName("Marvin")->setLastName("Bell");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Family Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "NOAH-Heuser Family Medicine Center Scottsdale Healthcare")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "NOAH-Heuser Family Medicine Center Scottsdale Healthcare")), "latitude" => "33.49105", "longitude" => "-111.92413")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Cynthia")->setLastName("Kegowicz");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Family Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "NOAH-Heuser Family Medicine Center Scottsdale Healthcare")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "NOAH-Heuser Family Medicine Center Scottsdale Healthcare")), "latitude" => "33.49105", "longitude" => "-111.92413")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Robert")->setLastName("Marlow");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Family Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "NOAH-Heuser Family Medicine Center Scottsdale Healthcare")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "NOAH-Heuser Family Medicine Center Scottsdale Healthcare")), "latitude" => "33.49105", "longitude" => "-111.92413")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Darlene")->setLastName("Moyer");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Family Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "NOAH-Heuser Family Medicine Center Scottsdale Healthcare")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "NOAH-Heuser Family Medicine Center Scottsdale Healthcare")), "latitude" => "33.49105", "longitude" => "-111.92413")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("John")->setLastName("Pope");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Pediatrics")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "NOAH-Heuser Family Medicine Center Scottsdale Healthcare")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "NOAH-Heuser Family Medicine Center Scottsdale Healthcare")), "latitude" => "33.49105", "longitude" => "-111.92413")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Jennifer")->setLastName("Rosas");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Family Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "NOAH-Heuser Family Medicine Center Scottsdale Healthcare")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "NOAH-Heuser Family Medicine Center Scottsdale Healthcare")), "latitude" => "33.49105", "longitude" => "-111.92413")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Richard")->setLastName("Rutkowski");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Family Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "NOAH-Heuser Family Medicine Center Scottsdale Healthcare")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "NOAH-Heuser Family Medicine Center Scottsdale Healthcare")), "latitude" => "33.49105", "longitude" => "-111.92413")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Javier")->setLastName("Zayas-Bazan");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Family Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "NOAH-Heuser Family Medicine Center Scottsdale Healthcare")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "NOAH-Heuser Family Medicine Center Scottsdale Healthcare")), "latitude" => "33.49105", "longitude" => "-111.92413")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * North Scottsdale Family Medicine
		 */

		$physician = new Physicians();
		$physician->setFirstName("Paul")->setLastName("Babey");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Family Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "North Scottsdale Family Medicine")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "North Scottsdale Family Medicine")), "latitude" => "33.62496", "longitude" => "-111.94189")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Joseph")->setLastName("Brewster");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Family Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "North Scottsdale Family Medicine")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "North Scottsdale Family Medicine")), "latitude" => "33.62496", "longitude" => "-111.94189")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Robert")->setLastName("Hamilton");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Family Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "North Scottsdale Family Medicine")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "North Scottsdale Family Medicine")), "latitude" => "33.62496", "longitude" => "-111.94189")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Gerald")->setLastName("Muncy");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Family Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "North Scottsdale Family Medicine")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "North Scottsdale Family Medicine")), "latitude" => "33.62496", "longitude" => "-111.94189")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * North Scottsdale Women's Health
		 */

		$physician = new Physicians();
		$physician->setFirstName("Patricia")->setLastName("Grade");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "OB/GYN")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "North Scottsdale Women's Health")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "North Scottsdale Women's Health")), "latitude" => "33.57371", "longitude" => "-111.88503")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Jennifer")->setLastName("Simone");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "OB/GYN")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "North Scottsdale Women's Health")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "North Scottsdale Women's Health")), "latitude" => "33.57371", "longitude" => "-111.88503")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Tiffany")->setLastName("Stadnick");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "OB/GYN")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "North Scottsdale Women's Health")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "North Scottsdale Women's Health")), "latitude" => "33.57371", "longitude" => "-111.88503")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * North Valley Neurology and Sleep
		 */

		$physician = new Physicians();
		$physician->setFirstName("Jeffrey")->setLastName("Gitt");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Neurology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "North Valley Neurology and Sleep")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "North Valley Neurology and Sleep")), "latitude" => "33.61626", "longitude" => "-112.40256")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "North Valley Neurology and Sleep")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "North Valley Neurology and Sleep")), "latitude" => "33.63850", "longitude" => "-111.99909")));
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();


		/**
		 * Oasis Plastic Surgery, PLLC
		 */

		$physician = new Physicians();
		$physician->setFirstName("Jennifer")->setLastName("Geoghegan");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Plastic Surgery")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Oasis Plastic Surgery, PLLC")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Oasis Plastic Surgery, PLLC")), "latitude" => "33.57849", "longitude" => "-111.87495")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Ortho Arizona/John K. Bradway, M.D.
		 */

		$physician = new Physicians();
		$physician->setFirstName("John")->setLastName("Bradway");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Orthopedic Surgeon")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Ortho Arizona/John K. Bradway, M.D.")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Ortho Arizona/John K. Bradway, M.D.")), "latitude" => "33.57857", "longitude" => "-111.87874")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * OrthoArizona Center for Spinal Disorders
		 */

		$physician = new Physicians();
		$physician->setFirstName("William")->setLastName("Stevens");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Ortho - Spine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "OrthoArizona Center for Spinal Disorders")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "OrthoArizona Center for Spinal Disorders")), "latitude" => "33.50216", "longitude" => "-111.93899")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * OrthoArizona Phoenix Orthopedic Consultants
		 */

		$physician = new Physicians();
		$physician->setFirstName("Marc")->setLastName("Rosen");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Orthopedic Surgeon")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "OrthoArizona Phoenix Orthopedic Consultants")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "OrthoArizona Phoenix Orthopedic Consultants")), "latitude" => "33.65462", "longitude" => "-112.20224")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "OrthoArizona Phoenix Orthopedic Consultants")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "OrthoArizona Phoenix Orthopedic Consultants")), "latitude" => "33.66478", "longitude" => "-112.11790")));
		$manager->persist($practicesHasPhysicians_2);

		$practicesHasPhysicians_3 = new PracticesHasPhysicians();
		$practicesHasPhysicians_3->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "OrthoArizona Phoenix Orthopedic Consultants")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "OrthoArizona Phoenix Orthopedic Consultants")), "latitude" => "33.66478", "longitude" => "-112.11790")));
		$manager->persist($practicesHasPhysicians_3);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Shane")->setLastName("Martin");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Orthopedic Surgeon")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "OrthoArizona Phoenix Orthopedic Consultants")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "OrthoArizona Phoenix Orthopedic Consultants")), "latitude" => "33.64081", "longitude" => "-111.95928")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Palo Verde Hematology Oncology
		 */

		$physician = new Physicians();
		$physician->setFirstName("Nazish")->setLastName("Ahmad");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Hematology-Oncology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Palo Verde Hematology Oncology")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Palo Verde Hematology Oncology")), "latitude" => "33.66707", "longitude" => "-112.11581")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Palo Verde Hematology Oncology")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Palo Verde Hematology Oncology")), "latitude" => "33.60672", "longitude" => "-112.18093")));
		$manager->persist($practicesHasPhysicians_2);

		$practicesHasPhysicians_3 = new PracticesHasPhysicians();
		$practicesHasPhysicians_3->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Palo Verde Hematology Oncology")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Palo Verde Hematology Oncology")), "latitude" => "33.54489", "longitude" => "-111.92509")));
		$manager->persist($practicesHasPhysicians_3);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Manpreet")->setLastName("Chadha");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Hematology-Oncology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Palo Verde Hematology Oncology")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Palo Verde Hematology Oncology")), "latitude" => "33.54489", "longitude" => "-111.92509")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Rajinder")->setLastName("Grover");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Hematology-Oncology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Palo Verde Hematology Oncology")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Palo Verde Hematology Oncology")), "latitude" => "33.54489", "longitude" => "-111.92509")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Maqbool")->setLastName("Halepota");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Hematology-Oncology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Palo Verde Hematology Oncology")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Palo Verde Hematology Oncology")), "latitude" => "33.54489", "longitude" => "-111.92509")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Martin")->setLastName("Langford");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Hematology-Oncology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Palo Verde Hematology Oncology")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Palo Verde Hematology Oncology")), "latitude" => "33.54489", "longitude" => "-111.92509")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Demetrio")->setLastName("Mamani");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Hematology-Oncology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Palo Verde Hematology Oncology")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Palo Verde Hematology Oncology")), "latitude" => "33.54489", "longitude" => "-111.92509")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Amol")->setLastName("Rakkar");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Hematology-Oncology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Palo Verde Hematology Oncology")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Palo Verde Hematology Oncology")), "latitude" => "33.54489", "longitude" => "-111.92509")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Haider")->setLastName("Zafar");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Hematology-Oncology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Palo Verde Hematology Oncology")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Palo Verde Hematology Oncology")), "latitude" => "33.54489", "longitude" => "-111.92509")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Paradise Valley Allergy Associates Ltd
		 */

		$physician = new Physicians();
		$physician->setFirstName("Richard")->setLastName("Keightley");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Allergy")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Paradise Valley Allergy Associates Ltd")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Paradise Valley Allergy Associates Ltd")), "latitude" => "33.67568", "longitude" => "-111.97936")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Paul M. Francis, MD
		 */

		$physician = new Physicians();
		$physician->setFirstName("Paul")->setLastName("Francis");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Neuro Surgery")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Paul M. Francis, MD")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Paul M. Francis, MD")), "latitude" => "33.58246", "longitude" => "-111.87362")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Peter J Ferrara, MD PC
		 */

		$physician = new Physicians();
		$physician->setFirstName("Peter")->setLastName("Ferrara");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "General Surgery, Surgical Oncology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Peter J Ferrara, MD PC")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Peter J Ferrara, MD PC")), "latitude" => "33.48981", "longitude" => "-111.92355")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Peter W. Mitchell M.D.
		 */

		$physician = new Physicians();
		$physician->setFirstName("Peter")->setLastName("Mitchell");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Orthopedic Surgeon")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Peter W. Mitchell M.D.")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Peter W. Mitchell M.D.")), "latitude" => "33.50634", "longitude" => "-112.03388")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Phoenix Eye Group
		 */

		$physician = new Physicians();
		$physician->setFirstName("Eva Marie")->setLastName("Chong");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Ophthalmology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Phoenix Eye Group")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Phoenix Eye Group")), "latitude" => "33.58090", "longitude" => "-111.88242")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Phoenix Orthopedic Group
		 */

		$physician = new Physicians();
		$physician->setFirstName("Robert")->setLastName("Mileski");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Orthopedic Surgeon")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Phoenix Orthopedic Group")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Phoenix Orthopedic Group")), "latitude" => "33.50634", "longitude" => "-112.03388")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Phoenix Orthopedic Group")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Phoenix Orthopedic Group")), "latitude" => "33.57693", "longitude" => "-111.87578")));
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();


		/**
		 * Pinnacle Internal Medicine and Headache Care
		 */

		$physician = new Physicians();
		$physician->setFirstName("Christine")->setLastName("Harter");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Internal Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Pinnacle Internal Medicine and Headache Care")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Pinnacle Internal Medicine and Headache Care")), "latitude" => "33.67618", "longitude" => "-112.12054")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Pinnacle Oncology Hematology
		 */

		$physician = new Physicians();
		$physician->setFirstName("Michael")->setLastName("Gordon");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Hematology-Oncology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Pinnacle Oncology Hematology")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Pinnacle Oncology Hematology")), "latitude" => "33.55548", "longitude" => "-111.88692")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Giraldo")->setLastName("Kato");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Hematology-Oncology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Pinnacle Oncology Hematology")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Pinnacle Oncology Hematology")), "latitude" => "33.55548", "longitude" => "-111.88692")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Devid")->setLastName("Mendelson");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Hematology-Oncology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Pinnacle Oncology Hematology")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Pinnacle Oncology Hematology")), "latitude" => "33.55548", "longitude" => "-111.88692")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Frank")->setLastName("Tsai");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Hematology-Oncology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Pinnacle Oncology Hematology")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Pinnacle Oncology Hematology")), "latitude" => "33.55548", "longitude" => "-111.88692")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Pulmonary Clinics of Scottsdale, PLLC
		 */

		$physician = new Physicians();
		$physician->setFirstName("Aamir")->setLastName("Awan");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Pulmonary-Critical Care")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Pulmonary Clinics of Scottsdale, PLLC")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Pulmonary Clinics of Scottsdale, PLLC")), "latitude" => "33.58047", "longitude" => "-111.88277")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Irfan")->setLastName("Khalid");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Pulmonary-Critical Care")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Pulmonary Clinics of Scottsdale, PLLC")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Pulmonary Clinics of Scottsdale, PLLC")), "latitude" => "33.58047", "longitude" => "-111.88277")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Kimberly")->setLastName("Parker");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Pulmonary-Critical Care")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Pulmonary Clinics of Scottsdale, PLLC")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Pulmonary Clinics of Scottsdale, PLLC")), "latitude" => "33.58047", "longitude" => "-111.88277")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * QuestMedicine
		 */

		$physician = new Physicians();
		$physician->setFirstName("Elinor")->setLastName("Schottstaedt");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Pulmonology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "QuestMedicine")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "QuestMedicine")), "latitude" => "33.48638", "longitude" => "-111.91711")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Radiation Oncologists of Central Arizona & Phoenix Cyberknife
		 */

		$physician = new Physicians();
		$physician->setFirstName("John")->setLastName("Kresl");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Radiation-Oncology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Radiation Oncologists of Central Arizona & Phoenix Cyberknife")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Radiation Oncologists of Central Arizona & Phoenix Cyberknife")), "latitude" => "33.58236", "longitude" => "-111.98187")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Lauren")->setLastName("Stegman");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Radiation-Oncology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Radiation Oncologists of Central Arizona & Phoenix Cyberknife")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Radiation Oncologists of Central Arizona & Phoenix Cyberknife")), "latitude" => "33.58236", "longitude" => "-111.98187")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Sandra")->setLastName("Zaky");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Radiation-Oncology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Radiation Oncologists of Central Arizona & Phoenix Cyberknife")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Radiation Oncologists of Central Arizona & Phoenix Cyberknife")), "latitude" => "33.58236", "longitude" => "-111.98187")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Reddy GI Associates
		 */

		$physician = new Physicians();
		$physician->setFirstName("Sudhakar")->setLastName("Reddy");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Gastroenterology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Reddy GI Associates")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Reddy GI Associates")), "latitude" => "33.31300", "longitude" => "-111.87508")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Richard J Brown MD, PLLC
		 */

		$physician = new Physicians();
		$physician->setFirstName("Richard")->setLastName("Brown");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Plastic Surgery")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Richard J Brown MD, PLLC")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Richard J Brown MD, PLLC")), "latitude" => "33.58693", "longitude" => "-111.92674")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Rimma Finkel M.D.
		 */

		$physician = new Physicians();
		$physician->setFirstName("Rimma")->setLastName("Finkel");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Plastic Surgery")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Rimma Finkel M.D.")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Rimma Finkel M.D.")), "latitude" => "33.63850", "longitude" => "-111.99909")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Scottsdale Cardiovascular Center
		 */

		$physician = new Physicians();
		$physician->setFirstName("Berkley")->setLastName("Benneson");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Cardiology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Cardiovascular Center")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Cardiovascular Center")), "latitude" => "33.58047", "longitude" => "-111.88277")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Cardiovascular Center")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Cardiovascular Center")), "latitude" => "33.4837081", "longitude" => "-111.9237455")));
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Philip")->setLastName("Gideon");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Cardiology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Cardiovascular Center")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Cardiovascular Center")), "latitude" => "33.58047", "longitude" => "-111.88277")));
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Cardiovascular Center")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Cardiovascular Center")), "latitude" => "33.4837081", "longitude" => "-111.9237455")));
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Bradley")->setLastName("Oswood");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Cardiology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Cardiovascular Center")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Cardiovascular Center")), "latitude" => "33.4837081", "longitude" => "-111.9237455")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Scott")->setLastName("Robertson");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Cardiology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Cardiovascular Center")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Cardiovascular Center")), "latitude" => "33.4837081", "longitude" => "-111.9237455")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Alan")->setLastName("Tenaglia");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Cardiology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Cardiovascular Center")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Cardiovascular Center")), "latitude" => "33.4837081", "longitude" => "-111.9237455")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Kris")->setLastName("Vijay");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Cardiology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Cardiovascular Center")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Cardiovascular Center")), "latitude" => "33.4837081", "longitude" => "-111.9237455")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Scottsdale Center for Women's Health
		 */

		$physician = new Physicians();
		$physician->setFirstName("Russell")->setLastName("Bartels");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "OB/GYN")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Center for Women's Health")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Center for Women's Health")), "latitude" => "33.55709", "longitude" => "-111.89074")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Burt")->setLastName("Webb");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "OB/GYN")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Center for Women's Health")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Center for Women's Health")), "latitude" => "33.55709", "longitude" => "-111.89074")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Scottsdale Critical Care
		 */

		$physician = new Physicians();
		$physician->setFirstName("Tyler")->setLastName("Glenn");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Intensivists")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Critical Care")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Critical Care")), "latitude" => "33.48725", "longitude" => "-111.92066")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Kim")->setLastName("Josen");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Intensivists")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Critical Care")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Critical Care")), "latitude" => "33.48725", "longitude" => "-111.92066")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Manish")->setLastName("Patel");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Intensivists")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Critical Care")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Critical Care")), "latitude" => "33.48725", "longitude" => "-111.92066")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Christopher")->setLastName("Roberts");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Intensivists")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Critical Care")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Critical Care")), "latitude" => "33.48725", "longitude" => "-111.92066")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Randy")->setLastName("Weisman");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Intensivists")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Critical Care")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Critical Care")), "latitude" => "33.48725", "longitude" => "-111.92066")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Scottsdale CVT Surgeons
		 */

		$physician = new Physicians();
		$physician->setFirstName("Thomas")->setLastName("Wareing");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Vascular Surgery")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale CVT Surgeons")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale CVT Surgeons")), "latitude" => "33.49105", "longitude" => "-111.92413")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Scottsdale Emergency Associates
		 */

		$physician = new Physicians();
		$physician->setFirstName("Stephen")->setLastName("Andersen");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Emergency Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Emergency Associates")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Emergency Associates")), "latitude" => "33.48867", "longitude" => "-111.92315")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Teri")->setLastName("Bagnasco");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Emergency Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Emergency Associates")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Emergency Associates")), "latitude" => "33.48867", "longitude" => "-111.92315")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Eric")->setLastName("Barroso");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Emergency Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Emergency Associates")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Emergency Associates")), "latitude" => "33.48867", "longitude" => "-111.92315")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Michael")->setLastName("Bundschuh");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Emergency Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Emergency Associates")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Emergency Associates")), "latitude" => "33.48867", "longitude" => "-111.92315")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Taylor")->setLastName("Cardall");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Emergency Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Emergency Associates")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Emergency Associates")), "latitude" => "33.48867", "longitude" => "-111.92315")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Franco")->setLastName("Castro-Marin");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Emergency Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Emergency Associates")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Emergency Associates")), "latitude" => "33.48867", "longitude" => "-111.92315")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Christopher")->setLastName("Courtney");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Emergency Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Emergency Associates")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Emergency Associates")), "latitude" => "33.48867", "longitude" => "-111.92315")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Stacy")->setLastName("Einerson");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Emergency Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Emergency Associates")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Emergency Associates")), "latitude" => "33.48867", "longitude" => "-111.92315")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Brit")->setLastName("Ferrell");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Emergency Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Emergency Associates")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Emergency Associates")), "latitude" => "33.48867", "longitude" => "-111.92315")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Charles")->setLastName("Finch");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Emergency Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Emergency Associates")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Emergency Associates")), "latitude" => "33.48867", "longitude" => "-111.92315")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Paul")->setLastName("Flatley");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Emergency Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Emergency Associates")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Emergency Associates")), "latitude" => "33.48867", "longitude" => "-111.92315")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("John")->setLastName("Green");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Emergency Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Emergency Associates")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Emergency Associates")), "latitude" => "33.48867", "longitude" => "-111.92315")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("David")->setLastName("Guttman");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Emergency Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Emergency Associates")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Emergency Associates")), "latitude" => "33.48867", "longitude" => "-111.92315")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Gregory")->setLastName("Harders");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Emergency Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Emergency Associates")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Emergency Associates")), "latitude" => "33.48867", "longitude" => "-111.92315")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Ajit")->setLastName("Itty");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Emergency Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Emergency Associates")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Emergency Associates")), "latitude" => "33.48867", "longitude" => "-111.92315")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Michael")->setLastName("Jonas");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Emergency Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Emergency Associates")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Emergency Associates")), "latitude" => "33.48867", "longitude" => "-111.92315")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Hanifa")->setLastName("Jones");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Emergency Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Emergency Associates")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Emergency Associates")), "latitude" => "33.48867", "longitude" => "-111.92315")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Brent")->setLastName("Larsen");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Emergency Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Emergency Associates")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Emergency Associates")), "latitude" => "33.48867", "longitude" => "-111.92315")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Robert")->setLastName("Londeree");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Emergency Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Emergency Associates")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Emergency Associates")), "latitude" => "33.48867", "longitude" => "-111.92315")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Christopher")->setLastName("Marcuzzo");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Emergency Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Emergency Associates")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Emergency Associates")), "latitude" => "33.48867", "longitude" => "-111.92315")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Vincent")->setLastName("Marino");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Emergency Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Emergency Associates")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Emergency Associates")), "latitude" => "33.48867", "longitude" => "-111.92315")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Glen")->setLastName("McCracken");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Emergency Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Emergency Associates")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Emergency Associates")), "latitude" => "33.48867", "longitude" => "-111.92315")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Craig")->setLastName("Norquist");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Emergency Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Emergency Associates")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Emergency Associates")), "latitude" => "33.48867", "longitude" => "-111.92315")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Michael")->setLastName("Pfleger");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Emergency Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Emergency Associates")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Emergency Associates")), "latitude" => "33.48867", "longitude" => "-111.92315")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Matthew")->setLastName("Porter");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Emergency Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Emergency Associates")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Emergency Associates")), "latitude" => "33.48867", "longitude" => "-111.92315")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Wendy")->setLastName("Prynn");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Emergency Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Emergency Associates")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Emergency Associates")), "latitude" => "33.48867", "longitude" => "-111.92315")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Ross")->setLastName("Rodgers");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Emergency Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Emergency Associates")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Emergency Associates")), "latitude" => "33.48867", "longitude" => "-111.92315")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Robin")->setLastName("Samaddar");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Emergency Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Emergency Associates")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Emergency Associates")), "latitude" => "33.48867", "longitude" => "-111.92315")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Kris")->setLastName("Samaddar");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Emergency Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Emergency Associates")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Emergency Associates")), "latitude" => "33.48867", "longitude" => "-111.92315")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Joyce")->setLastName("Schmidt");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Emergency Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Emergency Associates")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Emergency Associates")), "latitude" => "33.48867", "longitude" => "-111.92315")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Jesse")->setLastName("Shriki");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Emergency Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Emergency Associates")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Emergency Associates")), "latitude" => "33.48867", "longitude" => "-111.92315")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Douglas")->setLastName("Smith");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Emergency Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Emergency Associates")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Emergency Associates")), "latitude" => "33.48867", "longitude" => "-111.92315")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Arthur")->setLastName("Smolensky");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Emergency Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Emergency Associates")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Emergency Associates")), "latitude" => "33.48867", "longitude" => "-111.92315")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Larry")->setLastName("Sokol");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Emergency Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Emergency Associates")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Emergency Associates")), "latitude" => "33.48867", "longitude" => "-111.92315")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Kurt")->setLastName("Solem");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Emergency Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Emergency Associates")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Emergency Associates")), "latitude" => "33.48867", "longitude" => "-111.92315")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Dennis")->setLastName("Stizza");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Emergency Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Emergency Associates")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Emergency Associates")), "latitude" => "33.48867", "longitude" => "-111.92315")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Eric")->setLastName("Van Moorlehem");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Emergency Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Emergency Associates")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Emergency Associates")), "latitude" => "33.48867", "longitude" => "-111.92315")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Jon")->setLastName("Vasquez");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Emergency Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Emergency Associates")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Emergency Associates")), "latitude" => "33.48867", "longitude" => "-111.92315")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Paige")->setLastName("Waslewski");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Emergency Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Emergency Associates")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Emergency Associates")), "latitude" => "33.48867", "longitude" => "-111.92315")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Scottsdale Facial & Oral Surgery
		 */

		$physician = new Physicians();
		$physician->setFirstName("James")->setLastName("Bertz");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Oral Maxillofacial")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Facial & Oral Surgery")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Facial & Oral Surgery")), "latitude" => "33.61404", "longitude" => "-111.92588")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Scottsdale Family Physicians
		 */

		$physician = new Physicians();
		$physician->setFirstName("Marcia")->setLastName("Sistek");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Family Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Family Physicians")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Family Physicians")), "latitude" => "33.57460", "longitude" => "-111.88569")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Scottsdale Gastroenterology Associates
		 */

		$physician = new Physicians();
		$physician->setFirstName("Janet")->setLastName("Reiser");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Gastroenterology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Gastroenterology Associates")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Gastroenterology Associates")), "latitude" => "33.48638", "longitude" => "-111.91711")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Scottsdale Medical Associates
		 */

		$physician = new Physicians();
		$physician->setFirstName("Alpa")->setLastName("Shah");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Pulmonary-Critical Care")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Medical Associates")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Medical Associates")), "latitude" => "33.48764", "longitude" => "-111.92426")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Scottsdale Medical Center
		 */

		$physician = new Physicians();
		$physician->setFirstName("Kelly")->setLastName("Barker");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Family Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Medical Center")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Medical Center")), "latitude" => "33.57821", "longitude" => "-111.88016")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Jason")->setLastName("Richard");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Family Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Medical Center")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Medical Center")), "latitude" => "33.57821", "longitude" => "-111.88016")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Joseph")->setLastName("Rotella");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Family Medicine")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Medical Center")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Medical Center")), "latitude" => "33.57821", "longitude" => "-111.88016")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Scottsdale Medical Imaging, Ltd.
		 */

		$physician = new Physicians();
		$physician->setFirstName("Rodney")->setLastName("Owen");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Radiology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Medical Imaging, Ltd.")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Medical Imaging, Ltd.")), "latitude" => "33.58024", "longitude" => "-111.88379")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("John")->setLastName("Millstine");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Radiology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Medical Imaging, Ltd.")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Medical Imaging, Ltd.")), "latitude" => "33.58175", "longitude" => "-111.97715")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Nishant")->setLastName("Verma");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Radiology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Medical Imaging, Ltd.")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Medical Imaging, Ltd.")), "latitude" => "33.58175", "longitude" => "-111.97715")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Chad")->setLastName("Palmer");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Radiology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Medical Imaging, Ltd.")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Medical Imaging, Ltd.")), "latitude" => "33.608952", "longitude" => "-111.715067")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Sean")->setLastName("Perini");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Radiology, Radiology - Interventional")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Medical Imaging, Ltd.")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Medical Imaging, Ltd.")), "latitude" => "33.608952", "longitude" => "-111.715067")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Michelle")->setLastName("Dubes Lai");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Radiology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Medical Imaging, Ltd.")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Medical Imaging, Ltd.")), "latitude" => "33.67102", "longitude" => "-111.92038")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Sunil")->setLastName("Ram");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Radiology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Medical Imaging, Ltd.")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Medical Imaging, Ltd.")), "latitude" => "33.67102", "longitude" => "-111.92038")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Steven")->setLastName("Wise");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Radiology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Medical Imaging, Ltd.")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Medical Imaging, Ltd.")), "latitude" => "33.67102", "longitude" => "-111.92038")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Jane")->setLastName("Sohn");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Radiology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Medical Imaging, Ltd.")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Medical Imaging, Ltd.")), "latitude" => "33.675675", "longitude" => "-111.979357")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Jared")->setLastName("Allen");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Radiology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Medical Imaging, Ltd.")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Medical Imaging, Ltd.")), "latitude" => "33.50634", "longitude" => "-112.03388")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Mark")->setLastName("Kuo");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Radiology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Medical Imaging, Ltd.")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Medical Imaging, Ltd.")), "latitude" => "33.50634", "longitude" => "-112.03388")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Christopher")->setLastName("Salmon");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Radiology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Medical Imaging, Ltd.")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Medical Imaging, Ltd.")), "latitude" => "33.50634", "longitude" => "-112.03388")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Jimmy")->setLastName("Leung");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Radiology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Medical Imaging, Ltd.")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Medical Imaging, Ltd.")), "latitude" => "33.48898", "longitude" => "-111.92584")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Adrian")->setLastName("Moyer");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Radiology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Medical Imaging, Ltd.")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Medical Imaging, Ltd.")), "latitude" => "33.48898", "longitude" => "-111.92584")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Raymond")->setLastName("Murphy");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Radiology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Medical Imaging, Ltd.")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Medical Imaging, Ltd.")), "latitude" => "33.48898", "longitude" => "-111.92584")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Daniel")->setLastName("Maki");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Radiology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Medical Imaging, Ltd.")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Medical Imaging, Ltd.")), "latitude" => "33.28478", "longitude" => "-111.75031")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Charlene")->setLastName("Whitfill");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Radiology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Medical Imaging, Ltd.")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Medical Imaging, Ltd.")), "latitude" => "33.28478", "longitude" => "-111.75031")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Denise")->setLastName("Reddy");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Radiology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Medical Imaging, Ltd.")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Medical Imaging, Ltd.")), "latitude" => "33.49105", "longitude" => "-111.92413")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Terry")->setLastName("Reeves");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Radiology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Medical Imaging, Ltd.")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Medical Imaging, Ltd.")), "latitude" => "33.49105", "longitude" => "-111.92413")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Tyler")->setLastName("Gasser");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Radiology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Medical Imaging, Ltd.")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Medical Imaging, Ltd.")), "latitude" => "33.488673", "longitude" => "-111.923153")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Rolf")->setLastName("Hultsch");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Radiology, Radiology - Interventional")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Medical Imaging, Ltd.")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Medical Imaging, Ltd.")), "latitude" => "33.488673", "longitude" => "-111.923153")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("William")->setLastName("Jones");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Radiology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Medical Imaging, Ltd.")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Medical Imaging, Ltd.")), "latitude" => "33.488673", "longitude" => "-111.923153")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Mark")->setLastName("Jorgensen");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Radiology, Radiology - Interventional")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Medical Imaging, Ltd.")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Medical Imaging, Ltd.")), "latitude" => "33.488673", "longitude" => "-111.923153")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Jason")->setLastName("Kerr");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Radiology, Radiology - Interventional")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Medical Imaging, Ltd.")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Medical Imaging, Ltd.")), "latitude" => "33.488673", "longitude" => "-111.923153")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Christopher")->setLastName("May");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Radiology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Medical Imaging, Ltd.")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Medical Imaging, Ltd.")), "latitude" => "33.488673", "longitude" => "-111.923153")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Ronald")->setLastName("Newbold");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Radiology, Radiology - Interventional")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Medical Imaging, Ltd.")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Medical Imaging, Ltd.")), "latitude" => "33.488673", "longitude" => "-111.923153")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Glenn")->setLastName("Cook");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Radiology, Radiology - Interventional")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Medical Imaging, Ltd.")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Medical Imaging, Ltd.")), "latitude" => "33.67102", "longitude" => "-111.92038")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("John")->setLastName("Neil");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Radiology, Radiology - Interventional")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Medical Imaging, Ltd.")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Medical Imaging, Ltd.")), "latitude" => "33.67102", "longitude" => "-111.92038")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Eric")->setLastName("Kovalsky");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Radiology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Medical Imaging, Ltd.")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Medical Imaging, Ltd.")), "latitude" => "33.61603", "longitude" => "-111.89263")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Irina")->setLastName("Nistor");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Radiology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Medical Imaging, Ltd.")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Medical Imaging, Ltd.")), "latitude" => "33.61603", "longitude" => "-111.89263")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Gavin")->setLastName("Slethaug");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Radiology, Radiology - Interventional")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Medical Imaging, Ltd.")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Medical Imaging, Ltd.")), "latitude" => "33.61603", "longitude" => "-111.89263")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Monali")->setLastName("Gupta");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Radiology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Medical Imaging, Ltd.")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Medical Imaging, Ltd.")), "latitude" => "33.57369", "longitude" => "-111.88347")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Howard")->setLastName("Harvin");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Radiology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Medical Imaging, Ltd.")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Medical Imaging, Ltd.")), "latitude" => "33.57369", "longitude" => "-111.88347")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("William")->setLastName("Horsley");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Radiology, Radiology - Interventional")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Medical Imaging, Ltd.")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Medical Imaging, Ltd.")), "latitude" => "33.57369", "longitude" => "-111.88347")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Roland")->setLastName("Korn");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Radiology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Medical Imaging, Ltd.")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Medical Imaging, Ltd.")), "latitude" => "33.57369", "longitude" => "-111.88347")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("William")->setLastName("Taylor");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Radiology")));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Medical Imaging, Ltd.")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Medical Imaging, Ltd.")), "latitude" => "33.57369", "longitude" => "-111.88347")));
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

	}

}