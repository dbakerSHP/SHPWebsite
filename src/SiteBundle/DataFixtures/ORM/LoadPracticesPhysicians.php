<?php

/**
 * Created by PhpStorm.
 * User: jstgermain
 * Date: 9/28/15
 * Time: 2:03 PM
 */

namespace SiteBundle\Bundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use SiteBundle\Entity\Practices;
use SiteBundle\Entity\PracticesLocations;
use SiteBundle\Entity\Physicians;
use SiteBundle\Entity\PracticesHasPhysicians;
use SiteBundle\Entity\Specialties;
use SiteBundle\Entity\PhysiciansHasSpecialties;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LoadPracticesPhysicians extends Controller implements FixtureInterface
{
	
	private function getPractice($find_practice)
	{
		return $this->getDoctrine()
			->getRepository("SiteBundle:Practices")
			->findOneBy(
				array(
					'practice' => $find_practice
				)
			);
	}

	private function getPracticeByLocation($lat, $long)
	{
		return $this->getDoctrine()
			->getRepository("SiteBundle:PracticesLocations")
			->findOneBy(
				array(
					'latitude' => $lat,
					'longitude' => $long
				)
			);
	}

	private function getSpecialty($find_specialty)
	{
		return $this->getDoctrine()
			->getRepository("SiteBundle:Specialties")
			->findOneBy(
				array(
					'speciality' => $find_specialty
				)
			);
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
		$practicesHasPhysicians->setPracticeId($this->getPractice("21st Century Oncology of Arizona"))->setPracticeLocationId($this->getPracticeByLocation("33.57170","-112.06798"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians2 = new PracticesHasPhysicians();
		$practicesHasPhysicians2->setPracticeId($this->getPractice("21st Century Oncology of Arizona"))->setPracticeLocationId($this->getPracticeByLocation("33.48080","-111.92263"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians2);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysicianId($physician)->setSpecialtyId($this->getSpecialty("Radiation-Oncology"));
		$manager->persist($physicianHasSpecialties);

		$manager->flush();


		$physician = new Physicians();
		$physician->setFirstName("Vershalee")->setLastName("Shukla");
		$manager->persist($physician);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPracticeId($this->getPractice("21st Century Oncology of Arizona"))->setPracticeLocationId($this->getPracticeByLocation("33.57170","-112.06798"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians2 = new PracticesHasPhysicians();
		$practicesHasPhysicians2->setPracticeId($this->getPractice("21st Century Oncology of Arizona"))->setPracticeLocationId($this->getPracticeByLocation("33.48080","-111.92263"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians2);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysicianId($physician)->setSpecialtyId($this->getSpecialty("Radiation-Oncology"));
		$manager->persist($physicianHasSpecialties);

		$manager->flush();


		$physician = new Physicians();
		$physician->setFirstName("Vershalee")->setLastName("Shukla");
		$manager->persist($physician);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPracticeId($this->getPractice("21st Century Oncology of Arizona"))->setPracticeLocationId($this->getPracticeByLocation("33.57170","-112.06798"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians2 = new PracticesHasPhysicians();
		$practicesHasPhysicians2->setPracticeId($this->getPractice("21st Century Oncology of Arizona"))->setPracticeLocationId($this->getPracticeByLocation("33.48080","-111.92263"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians2);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysicianId($physician)->setSpecialtyId($this->getSpecialty("Radiation-Oncology"));
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
		$physician_1_HasSpecialties->setPhysicianId($physician_1)->setSpecialtyId($this->getSpecialty("Hospitalist"));
		$manager->persist($physician_1_HasSpecialties);

		$physician_2_HasSpecialties = new PhysiciansHasSpecialties();
		$physician_2_HasSpecialties->setPhysicianId($physician_2)->setSpecialtyId($this->getSpecialty("Internal Medicine"));
		$manager->persist($physician_2_HasSpecialties);

		$physician_3_HasSpecialties = new PhysiciansHasSpecialties();
		$physician_3_HasSpecialties->setPhysicianId($physician_3)->setSpecialtyId($this->getSpecialty("Internal Medicine"));
		$manager->persist($physician_3_HasSpecialties);

		$physician_4_HasSpecialties = new PhysiciansHasSpecialties();
		$physician_4_HasSpecialties->setPhysicianId($physician_4)->setSpecialtyId($this->getSpecialty("Family Medicine"));
		$manager->persist($physician_4_HasSpecialties);

		$physician_5_HasSpecialties = new PhysiciansHasSpecialties();
		$physician_5_HasSpecialties->setPhysicianId($physician_5)->setSpecialtyId($this->getSpecialty("Hospitalist"));
		$manager->persist($physician_5_HasSpecialties);

		$practicesHasPhysicians_1 = new PracticesHasPhysicians();
		$practicesHasPhysicians_1->setPracticeId($this->getPractice("4C Medical Group"))->setPracticeLocationId($this->getPracticeByLocation("33.58693","-111.92674"))->setPhysicianId($physician_1);
		$manager->persist($practicesHasPhysicians_1);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPracticeId($this->getPractice("4C Medical Group"))->setPracticeLocationId($this->getPracticeByLocation("33.58693","-111.92674"))->setPhysicianId($physician_2);
		$manager->persist($practicesHasPhysicians_2);

		$practicesHasPhysicians_3 = new PracticesHasPhysicians();
		$practicesHasPhysicians_3->setPracticeId($this->getPractice("4C Medical Group"))->setPracticeLocationId($this->getPracticeByLocation("33.58693","-111.92674"))->setPhysicianId($physician_3);
		$manager->persist($practicesHasPhysicians_3);

		$practicesHasPhysicians_4 = new PracticesHasPhysicians();
		$practicesHasPhysicians_4->setPracticeId($this->getPractice("4C Medical Group"))->setPracticeLocationId($this->getPracticeByLocation("33.58693","-111.92674"))->setPhysicianId($physician_4);
		$manager->persist($practicesHasPhysicians_4);

		$practicesHasPhysicians_5 = new PracticesHasPhysicians();
		$practicesHasPhysicians_5->setPracticeId($this->getPractice("4C Medical Group"))->setPracticeLocationId($this->getPracticeByLocation("33.58693","-111.92674"))->setPhysicianId($physician_5);
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
		$physician_1_HasSpecialties->setPhysicianId($physician_1)->setSpecialtyId($this->getSpecialty("OB/GYN"));
		$manager->persist($physician_1_HasSpecialties);

		$physician_2_HasSpecialties = new PhysiciansHasSpecialties();
		$physician_2_HasSpecialties->setPhysicianId($physician_2)->setSpecialtyId($this->getSpecialty("OB/GYN"));
		$manager->persist($physician_2_HasSpecialties);

		$physician_3_HasSpecialties = new PhysiciansHasSpecialties();
		$physician_3_HasSpecialties->setPhysicianId($physician_3)->setSpecialtyId($this->getSpecialty("OB/GYN"));
		$manager->persist($physician_3_HasSpecialties);

		$physician_4_HasSpecialties = new PhysiciansHasSpecialties();
		$physician_4_HasSpecialties->setPhysicianId($physician_4)->setSpecialtyId($this->getSpecialty("OB/GYN"));
		$manager->persist($physician_4_HasSpecialties);

		$practicesHasPhysicians_1 = new PracticesHasPhysicians();
		$practicesHasPhysicians_1->setPracticeId($this->getPractice("A.O.A. Paradise Valley OBGYN"))->setPracticeLocationId($this->getPracticeByLocation("33.57900","-111.87908"))->setPhysicianId($physician_1);
		$manager->persist($practicesHasPhysicians_1);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPracticeId($this->getPractice("A.O.A. Paradise Valley OBGYN"))->setPracticeLocationId($this->getPracticeByLocation("33.57900","-111.87908"))->setPhysicianId($physician_2);
		$manager->persist($practicesHasPhysicians_2);

		$practicesHasPhysicians_3 = new PracticesHasPhysicians();
		$practicesHasPhysicians_3->setPracticeId($this->getPractice("A.O.A. Paradise Valley OBGYN"))->setPracticeLocationId($this->getPracticeByLocation("33.57900","-111.87908"))->setPhysicianId($physician_3);
		$manager->persist($practicesHasPhysicians_3);

		$practicesHasPhysicians_4 = new PracticesHasPhysicians();
		$practicesHasPhysicians_4->setPracticeId($this->getPractice("A.O.A. Paradise Valley OBGYN"))->setPracticeLocationId($this->getPracticeByLocation("33.57900","-111.87908"))->setPhysicianId($physician_4);
		$manager->persist($practicesHasPhysicians_4);

		$manager->flush();


		/**
		 * Admire Plastic Surgery
		 */

		$physician = new Physicians();
		$physician->setFirstName("Anthony")->setLastName("Admire");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysicianId($physician)->setSpecialtyId($this->getSpecialty("Plastic Surgery"));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPracticeId($this->getPractice("Admire Plastic Surgery"))->setPracticeLocationId($this->getPracticeByLocation("33.64671","-111.92208"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Advanced Fertility Care
		 */

		$physician = new Physicians();
		$physician->setFirstName("Frederick")->setLastName("Larsen");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysicianId($physician)->setSpecialtyId($this->getSpecialty("Fertility"));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPracticeId($this->getPractice("Advanced Fertility Care"))->setPracticeLocationId($this->getPracticeByLocation("33.38791","-111.85828"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPracticeId($this->getPractice("Advanced Fertility Care"))->setPracticeLocationId($this->getPracticeByLocation("33.47995","-112.04486"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians_2);

		$practicesHasPhysicians_3 = new PracticesHasPhysicians();
		$practicesHasPhysicians_3->setPracticeId($this->getPractice("Advanced Fertility Care"))->setPracticeLocationId($this->getPracticeByLocation("33.57561","-111.87506"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians_3);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Nathaniel")->setLastName("Zoneraich");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysicianId($physician)->setSpecialtyId($this->getSpecialty("Fertility"));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPracticeId($this->getPractice("Advanced Fertility Care"))->setPracticeLocationId($this->getPracticeByLocation("33.38791","-111.85828"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPracticeId($this->getPractice("Advanced Fertility Care"))->setPracticeLocationId($this->getPracticeByLocation("33.57561","-111.87506"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();


		/**
		 * Affiliated Allergy & Pulmonary Associates
		 */

		$physician = new Physicians();
		$physician->setFirstName("George")->setLastName("Gwinn");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysicianId($physician)->setSpecialtyId($this->getSpecialty("Allergy"));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPracticeId($this->getPractice("Affiliated Allergy & Pulmonary Associates"))->setPracticeLocationId($this->getPracticeByLocation("33.79867","-111.95135"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Affiliated Dermatology
		 */

		$physician = new Physicians();
		$physician->setFirstName("Jason")->setLastName("Barr");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysicianId($physician)->setSpecialtyId($this->getSpecialty("Dermatology"));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPracticeId($this->getPractice("Affiliated Dermatology"))->setPracticeLocationId($this->getPracticeByLocation("33.62871","-112.36137"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPracticeId($this->getPractice("Affiliated Dermatology"))->setPracticeLocationId($this->getPracticeByLocation("33.67300","-111.92368"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians_2);

		$practicesHasPhysicians_3 = new PracticesHasPhysicians();
		$practicesHasPhysicians_3->setPracticeId($this->getPractice("Affiliated Dermatology"))->setPracticeLocationId($this->getPracticeByLocation("33.86411","-112.14240"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians_3);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Richard")->setLastName("Averitte");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysicianId($physician)->setSpecialtyId($this->getSpecialty("Dermatology"));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPracticeId($this->getPractice("Affiliated Dermatology"))->setPracticeLocationId($this->getPracticeByLocation("33.66550","-112.11826"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPracticeId($this->getPractice("Affiliated Dermatology"))->setPracticeLocationId($this->getPracticeByLocation("33.67300","-111.92368"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians_2);

		$practicesHasPhysicians_3 = new PracticesHasPhysicians();
		$practicesHasPhysicians_3->setPracticeId($this->getPractice("Affiliated Dermatology"))->setPracticeLocationId($this->getPracticeByLocation("33.86411","-112.14240"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians_3);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Christine")->setLastName("Lin");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysicianId($physician)->setSpecialtyId($this->getSpecialty("Dermatology"));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPracticeId($this->getPractice("Affiliated Dermatology"))->setPracticeLocationId($this->getPracticeByLocation("33.67300","-111.92368"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPracticeId($this->getPractice("Affiliated Dermatology"))->setPracticeLocationId($this->getPracticeByLocation("33.86411","-112.14240"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();


		/**
		 * Agave Pediatrics
		 */

		$physician = new Physicians();
		$physician->setFirstName("Rajeev")->setLastName("Agarwal");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysicianId($physician)->setSpecialtyId($this->getSpecialty("Nephrology"));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPracticeId($this->getPractice("Agave Pediatrics"))->setPracticeLocationId($this->getPracticeByLocation("33.65186","-111.92970"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPracticeId($this->getPractice("Agave Pediatrics"))->setPracticeLocationId($this->getPracticeByLocation("33.48019","-111.92278"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Leslie")->setLastName("Mortland");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysicianId($physician)->setSpecialtyId($this->getSpecialty("Nephrology"));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPracticeId($this->getPractice("Agave Pediatrics"))->setPracticeLocationId($this->getPracticeByLocation("33.65186","-111.92970"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPracticeId($this->getPractice("Agave Pediatrics"))->setPracticeLocationId($this->getPracticeByLocation("33.48019","-111.92278"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Nichole")->setLastName("Thomas");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysicianId($physician)->setSpecialtyId($this->getSpecialty("Pediatrics"));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPracticeId($this->getPractice("Agave Pediatrics"))->setPracticeLocationId($this->getPracticeByLocation("33.65186","-111.92970"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPracticeId($this->getPractice("Agave Pediatrics"))->setPracticeLocationId($this->getPracticeByLocation("33.48019","-111.92278"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();


		/**
		 * Ali Ghazanfare MD PLLC
		 */

		$physician = new Physicians();
		$physician->setFirstName("Ali")->setLastName("Ghazanfari");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysicianId($physician)->setSpecialtyId($this->getSpecialty("General Surgery"));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPracticeId($this->getPractice("Ali Ghazanfare MD PLLC"))->setPracticeLocationId($this->getPracticeByLocation("33.3086789","-111.8755867"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPracticeId($this->getPractice("Ali Ghazanfare MD PLLC"))->setPracticeLocationId($this->getPracticeByLocation("33.41370","-111.69850"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians_2);

		$practicesHasPhysicians_3 = new PracticesHasPhysicians();
		$practicesHasPhysicians_3->setPracticeId($this->getPractice("Ali Ghazanfare MD PLLC"))->setPracticeLocationId($this->getPracticeByLocation("33.49146","-111.91811"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians_3);

		$manager->flush();


		/**
		 * Allergy & Environmental Treatment Center, LLC
		 */

		$physician = new Physicians();
		$physician->setFirstName("Lawrence")->setLastName("Liszewski");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysicianId($physician)->setSpecialtyId($this->getSpecialty("Family Medicine"));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPracticeId($this->getPractice("Allergy & Environmental Treatment Center, LLC"))->setPracticeLocationId($this->getPracticeByLocation("33.58560","-111.88839"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Allergy, Asthma, and Immunology Associates
		 */

		$physician = new Physicians();
		$physician->setFirstName("Aaron")->setLastName("Davis");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysicianId($physician)->setSpecialtyId($this->getSpecialty("Allergy"));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPracticeId($this->getPractice("Allergy, Asthma, and Immunology Associates"))->setPracticeLocationId($this->getPracticeByLocation("33.57833","-111.88141"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Michael")->setLastName("Manning");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysicianId($physician)->setSpecialtyId($this->getSpecialty("Allergy"));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPracticeId($this->getPractice("Allergy, Asthma, and Immunology Associates"))->setPracticeLocationId($this->getPracticeByLocation("33.57833","-111.88141"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPracticeId($this->getPractice("Allergy, Asthma, and Immunology Associates"))->setPracticeLocationId($this->getPracticeByLocation("33.48617","-111.91872"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();


		/**
		 * Allergy, Ear, Nose, and Throat Center Ltd.
		 */

		$physician = new Physicians();
		$physician->setFirstName("Brian")->setLastName("Lee");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysicianId($physician)->setSpecialtyId($this->getSpecialty("Ear"));
		$manager->persist($physicianHasSpecialties);

		$physicianHasSpecialties_2 = new PhysiciansHasSpecialties();
		$physicianHasSpecialties_2->setPhysicianId($physician)->setSpecialtyId($this->getSpecialty("Nose"));
		$manager->persist($physicianHasSpecialties_2);

		$physicianHasSpecialties_3 = new PhysiciansHasSpecialties();
		$physicianHasSpecialties_3->setPhysicianId($physician)->setSpecialtyId($this->getSpecialty("Throat"));
		$manager->persist($physicianHasSpecialties_3);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPracticeId($this->getPractice("Allergy, Ear, Nose, and Throat Center Ltd."))->setPracticeLocationId($this->getPracticeByLocation("33.48736","-111.92507"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * American Advanced Surgery
		 */

		$physician = new Physicians();
		$physician->setFirstName("Babak")->setLastName("Rashidi");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysicianId($physician)->setSpecialtyId($this->getSpecialty("General Surgery"));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPracticeId($this->getPractice("American Advanced Surgery"))->setPracticeLocationId($this->getPracticeByLocation("33.48898","-111.92584"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Arizona Arrhythmia Consultants
		 */

		$physician = new Physicians();
		$physician->setFirstName("Renzo")->setLastName("Cataldo");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysicianId($physician)->setSpecialtyId($this->getSpecialty("Cardiac Electrophysiology"));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPracticeId($this->getPractice("Arizona Arrhythmia Consultants"))->setPracticeLocationId($this->getPracticeByLocation("33.57821","-111.88016"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Thomas")->setLastName("Mattioni");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysicianId($physician)->setSpecialtyId($this->getSpecialty("Cardiac Electrophysiology"));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPracticeId($this->getPractice("Arizona Arrhythmia Consultants"))->setPracticeLocationId($this->getPracticeByLocation("33.57821","-111.88016"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("David")->setLastName("Riggio");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysicianId($physician)->setSpecialtyId($this->getSpecialty("Cardiac Electrophysiology"));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPracticeId($this->getPractice("Arizona Arrhythmia Consultants"))->setPracticeLocationId($this->getPracticeByLocation("33.57821","-111.88016"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPracticeId($this->getPractice("Arizona Arrhythmia Consultants"))->setPracticeLocationId($this->getPracticeByLocation("33.48517","-111.92141"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Michael")->setLastName("Zawaneh");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysicianId($physician)->setSpecialtyId($this->getSpecialty("Cardiac Electrophysiology"));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPracticeId($this->getPractice("Arizona Arrhythmia Consultants"))->setPracticeLocationId($this->getPracticeByLocation("33.57821","-111.88016"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPracticeId($this->getPractice("Arizona Arrhythmia Consultants"))->setPracticeLocationId($this->getPracticeByLocation("33.48517","-111.92141"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();


		/**
		 * Arizona Asthma and Allergy Institute
		 */

		$physician = new Physicians();
		$physician->setFirstName("Levente")->setLastName("Erdos");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysicianId($physician)->setSpecialtyId($this->getSpecialty("Allergy"));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPracticeId($this->getPractice("Arizona Asthma and Allergy Institute"))->setPracticeLocationId($this->getPracticeByLocation("33.61185","-111.89742"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPracticeId($this->getPractice("Arizona Asthma and Allergy Institute"))->setPracticeLocationId($this->getPracticeByLocation("33.37854","-111.89359"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Ronald")->setLastName("Jorgensen");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysicianId($physician)->setSpecialtyId($this->getSpecialty("Allergy"));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPracticeId($this->getPractice("Arizona Asthma and Allergy Institute"))->setPracticeLocationId($this->getPracticeByLocation("33.61185","-111.89742"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPracticeId($this->getPractice("Arizona Asthma and Allergy Institute"))->setPracticeLocationId($this->getPracticeByLocation("33.60708","-112.18150"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Joseph")->setLastName("Mittel");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysicianId($physician)->setSpecialtyId($this->getSpecialty("Allergy"));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPracticeId($this->getPractice("Arizona Asthma and Allergy Institute"))->setPracticeLocationId($this->getPracticeByLocation("33.61185","-111.89742"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPracticeId($this->getPractice("Arizona Asthma and Allergy Institute"))->setPracticeLocationId($this->getPracticeByLocation("33.51071","-112.01162"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();


		/**
		 * Arizona Bone and Joint Specialists
		 */

		$physician = new Physicians();
		$physician->setFirstName("Philip")->setLastName("To");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysicianId($physician)->setSpecialtyId($this->getSpecialty("Orthopedic Surgeon"));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPracticeId($this->getPractice("Arizona Bone and Joint Specialists"))->setPracticeLocationId($this->getPracticeByLocation("33.61099","-112.06601"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPracticeId($this->getPractice("Arizona Bone and Joint Specialists"))->setPracticeLocationId($this->getPracticeByLocation("33.64081","-111.95928"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Brad")->setLastName("Bruns");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysicianId($physician)->setSpecialtyId($this->getSpecialty("Orthopedic Surgeon"));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPracticeId($this->getPractice("Arizona Bone and Joint Specialists"))->setPracticeLocationId($this->getPracticeByLocation("33.61099","-112.06601"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("David")->setLastName("Camarata");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysicianId($physician)->setSpecialtyId($this->getSpecialty("Orthopedic Surgeon"));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPracticeId($this->getPractice("Arizona Bone and Joint Specialists"))->setPracticeLocationId($this->getPracticeByLocation("33.61099","-112.06601"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Richard")->setLastName("Martin");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysicianId($physician)->setSpecialtyId($this->getSpecialty("Orthopedic Surgeon"));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPracticeId($this->getPractice("Arizona Bone and Joint Specialists"))->setPracticeLocationId($this->getPracticeByLocation("33.61099","-112.06601"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Brian")->setLastName("Shafer");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysicianId($physician)->setSpecialtyId($this->getSpecialty("Orthopedic Surgeon"));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPracticeId($this->getPractice("Arizona Bone and Joint Specialists"))->setPracticeLocationId($this->getPracticeByLocation("33.61099","-112.06601"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Arizona Cardiology Group
		 */

		$physician = new Physicians();
		$physician->setFirstName("Youngsoo")->setLastName("Cho");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysicianId($physician)->setSpecialtyId($this->getSpecialty("Cardiology"));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPracticeId($this->getPractice("Arizona Cardiology Group"))->setPracticeLocationId($this->getPracticeByLocation("33.37909","-111.90104"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPracticeId($this->getPractice("Arizona Cardiology Group"))->setPracticeLocationId($this->getPracticeByLocation("33.46994","-112.06835"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Mitchell")->setLastName("Ross");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysicianId($physician)->setSpecialtyId($this->getSpecialty("Cardiology"));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPracticeId($this->getPractice("Arizona Cardiology Group"))->setPracticeLocationId($this->getPracticeByLocation("33.46994","-112.06835"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Wazhma")->setLastName("Aslamy");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysicianId($physician)->setSpecialtyId($this->getSpecialty("Cardiology"));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPracticeId($this->getPractice("Arizona Cardiology Group"))->setPracticeLocationId($this->getPracticeByLocation("33.67102","-111.92038"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Gregory")->setLastName("Sanders");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysicianId($physician)->setSpecialtyId($this->getSpecialty("Cardiology"));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPracticeId($this->getPractice("Arizona Cardiology Group"))->setPracticeLocationId($this->getPracticeByLocation("33.67102","-111.92038"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Christina")->setLastName("Reuss");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysicianId($physician)->setSpecialtyId($this->getSpecialty("Cardiology"));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPracticeId($this->getPractice("Arizona Cardiology Group"))->setPracticeLocationId($this->getPracticeByLocation("33.67102","-111.92038"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Daniel")->setLastName("Storch");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysicianId($physician)->setSpecialtyId($this->getSpecialty("Cardiology"));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPracticeId($this->getPractice("Arizona Cardiology Group"))->setPracticeLocationId($this->getPracticeByLocation("33.67102","-111.92038"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Arizona Cardiovascular and Thoracic Surgeons
		 */

		$physician = new Physicians();
		$physician->setFirstName("Rajeev")->setLastName("Kathuria");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysicianId($physician)->setSpecialtyId($this->getSpecialty("Cardiovascular Surgery"));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPracticeId($this->getPractice("Arizona Cardiovascular and Thoracic Surgeons"))->setPracticeLocationId($this->getPracticeByLocation("33.58246","-111.87362"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Robert")->setLastName("Riley");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysicianId($physician)->setSpecialtyId($this->getSpecialty("Cardiovascular Surgery"));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPracticeId($this->getPractice("Arizona Cardiovascular and Thoracic Surgeons"))->setPracticeLocationId($this->getPracticeByLocation("33.58246","-111.87362"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Arizona Center for Cancer Care
		 */

		$physician = new Physicians();
		$physician->setFirstName("Ivor")->setLastName("Benjamin");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysicianId($physician)->setSpecialtyId($this->getSpecialty("Gynecologic Oncology"));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPracticeId($this->getPractice("Arizona Center for Cancer Care"))->setPracticeLocationId($this->getPracticeByLocation("33.58115","-111.88368"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPracticeId($this->getPractice("Arizona Center for Cancer Care"))->setPracticeLocationId($this->getPracticeByLocation("33.61281","-112.23679"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Luci")->setLastName("Chen");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysicianId($physician)->setSpecialtyId($this->getSpecialty("Radiation-Oncology"));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPracticeId($this->getPractice("Arizona Center for Cancer Care"))->setPracticeLocationId($this->getPracticeByLocation("33.58115","-111.88368"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Robert")->setLastName("Kuske");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysicianId($physician)->setSpecialtyId($this->getSpecialty("Radiation-Oncology"));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPracticeId($this->getPractice("Arizona Center for Cancer Care"))->setPracticeLocationId($this->getPracticeByLocation("33.58115","-111.88368"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("James")->setLastName("Marsh");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysicianId($physician)->setSpecialtyId($this->getSpecialty("Radiation-Oncology"));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPracticeId($this->getPractice("Arizona Center for Cancer Care"))->setPracticeLocationId($this->getPracticeByLocation("33.58115","-111.88368"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Annushka")->setLastName("Patel");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysicianId($physician)->setSpecialtyId($this->getSpecialty("Radiation-Oncology"));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPracticeId($this->getPractice("Arizona Center for Cancer Care"))->setPracticeLocationId($this->getPracticeByLocation("33.58115","-111.88368"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPracticeId($this->getPractice("Arizona Center for Cancer Care"))->setPracticeLocationId($this->getPracticeByLocation("33.67602","-112.12079"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians_2);

		$practicesHasPhysicians_3 = new PracticesHasPhysicians();
		$practicesHasPhysicians_3->setPracticeId($this->getPractice("Arizona Center for Cancer Care"))->setPracticeLocationId($this->getPracticeByLocation("33.49120","-111.92369"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians_3);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Dennis")->setLastName("Scribner");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysicianId($physician)->setSpecialtyId($this->getSpecialty("Gynecologic Oncology"));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPracticeId($this->getPractice("Arizona Center for Cancer Care"))->setPracticeLocationId($this->getPracticeByLocation("33.58115","-111.88368"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPracticeId($this->getPractice("Arizona Center for Cancer Care"))->setPracticeLocationId($this->getPracticeByLocation("33.61281","-112.23679"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Scott")->setLastName("Tannehill");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysicianId($physician)->setSpecialtyId($this->getSpecialty("Radiation-Oncology"));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPracticeId($this->getPractice("Arizona Center for Cancer Care"))->setPracticeLocationId($this->getPracticeByLocation("33.58115","-111.88368"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Farley")->setLastName("Yang");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysicianId($physician)->setSpecialtyId($this->getSpecialty("Radiation-Oncology"));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPracticeId($this->getPractice("Arizona Center for Cancer Care"))->setPracticeLocationId($this->getPracticeByLocation("33.58115","-111.88368"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Christopher")->setLastName("Biggs");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysicianId($physician)->setSpecialtyId($this->getSpecialty("Radiation-Oncology"));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPracticeId($this->getPractice("Arizona Center for Cancer Care"))->setPracticeLocationId($this->getPracticeByLocation("33.61281","-112.23679"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Terry")->setLastName("Lee");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysicianId($physician)->setSpecialtyId($this->getSpecialty("Radiation-Oncology"));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPracticeId($this->getPractice("Arizona Center for Cancer Care"))->setPracticeLocationId($this->getPracticeByLocation("33.61281","-112.23679"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Marianne")->setLastName("Mildenberger");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysicianId($physician)->setSpecialtyId($this->getSpecialty("Radiation-Oncology"));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPracticeId($this->getPractice("Arizona Center for Cancer Care"))->setPracticeLocationId($this->getPracticeByLocation("33.61281","-112.23679"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPracticeId($this->getPractice("Arizona Center for Cancer Care"))->setPracticeLocationId($this->getPracticeByLocation("33.65542","-112.37668"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Daniel")->setLastName("Reed");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysicianId($physician)->setSpecialtyId($this->getSpecialty("Hematology-Oncology"));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPracticeId($this->getPractice("Arizona Center for Cancer Care"))->setPracticeLocationId($this->getPracticeByLocation("33.61281","-112.23679"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPracticeId($this->getPractice("Arizona Center for Cancer Care"))->setPracticeLocationId($this->getPracticeByLocation("33.65542","-112.37668"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Coral")->setLastName("Quiet");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysicianId($physician)->setSpecialtyId($this->getSpecialty("Radiation-Oncology"));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPracticeId($this->getPractice("Arizona Center for Cancer Care"))->setPracticeLocationId($this->getPracticeByLocation("33.67602","-112.12079"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Patrick")->setLastName("Donovan");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysicianId($physician)->setSpecialtyId($this->getSpecialty("Hematology-Oncology"));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPracticeId($this->getPractice("Arizona Center for Cancer Care"))->setPracticeLocationId($this->getPracticeByLocation("33.49120","-111.92369"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("James")->setLastName("Marsh");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysicianId($physician)->setSpecialtyId($this->getSpecialty("Radiation-Oncology"));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPracticeId($this->getPractice("Arizona Center for Cancer Care"))->setPracticeLocationId($this->getPracticeByLocation("33.49120","-111.92369"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Paul")->setLastName("Wassermann");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysicianId($physician)->setSpecialtyId($this->getSpecialty("Hematology-Oncology"));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPracticeId($this->getPractice("Arizona Center for Cancer Care"))->setPracticeLocationId($this->getPracticeByLocation("33.49120","-111.92369"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Scott")->setLastName("Tannehill");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysicianId($physician)->setSpecialtyId($this->getSpecialty("Radiation-Oncology"));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPracticeId($this->getPractice("Arizona Center for Cancer Care"))->setPracticeLocationId($this->getPracticeByLocation("33.28478","-111.75031"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Gregory")->setLastName("Maggass");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysicianId($physician)->setSpecialtyId($this->getSpecialty("Radiation-Oncology"));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPracticeId($this->getPractice("Arizona Center for Cancer Care"))->setPracticeLocationId($this->getPracticeByLocation("33.28478","-111.75031"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Arizona Center for Pain Relief
		 */

		$physician = new Physicians();
		$physician->setFirstName("Julian")->setLastName("Grove");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysicianId($physician)->setSpecialtyId($this->getSpecialty("Pain Management"));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPracticeId($this->getPractice("Arizona Center for Pain Relief"))->setPracticeLocationId($this->getPracticeByLocation("33.67619","-111.97836"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Peter")->setLastName("Kubitz");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysicianId($physician)->setSpecialtyId($this->getSpecialty("Pain Management"));
		$manager->persist($physicianHasSpecialties);

		$physicianHasSpecialties_2 = new PhysiciansHasSpecialties();
		$physicianHasSpecialties_2->setPhysicianId($physician)->setSpecialtyId($this->getSpecialty("Pain Management"));
		$manager->persist($physicianHasSpecialties_2);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPracticeId($this->getPractice("Arizona Center for Pain Relief"))->setPracticeLocationId($this->getPracticeByLocation("33.67619","-111.97836"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Mark")->setLastName("Rubin");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysicianId($physician)->setSpecialtyId($this->getSpecialty("Pain Management"));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPracticeId($this->getPractice("Arizona Center for Pain Relief"))->setPracticeLocationId($this->getPracticeByLocation("33.67619","-111.97836"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Arizona Digestive Health
		 */

		$physician = new Physicians();
		$physician->setFirstName("Linda")->setLastName("Shields");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysicianId($physician)->setSpecialtyId($this->getSpecialty("Gastroenterology"));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPracticeId($this->getPractice("Arizona Digestive Health"))->setPracticeLocationId($this->getPracticeByLocation("33.58024","-111.88379"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Bradford")->setLastName("Gelzayd");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysicianId($physician)->setSpecialtyId($this->getSpecialty("Gastroenterology"));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPracticeId($this->getPractice("Arizona Digestive Health"))->setPracticeLocationId($this->getPracticeByLocation("33.55708","-111.89074"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("John")->setLastName("Yalam");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysicianId($physician)->setSpecialtyId($this->getSpecialty("Gastroenterology"));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPracticeId($this->getPractice("Arizona Digestive Health"))->setPracticeLocationId($this->getPracticeByLocation("33.57460","-111.88569"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Daniel")->setLastName("Meline");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysicianId($physician)->setSpecialtyId($this->getSpecialty("Gastroenterology"));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPracticeId($this->getPractice("Arizona Digestive Health"))->setPracticeLocationId($this->getPracticeByLocation("33.57394","-111.88239"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Arizona Eye Specialists
		 */

		$physician = new Physicians();
		$physician->setFirstName("Joseph")->setLastName("Aiello");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysicianId($physician)->setSpecialtyId($this->getSpecialty("Ophthalmology"));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPracticeId($this->getPractice("Arizona Eye Specialists"))->setPracticeLocationId($this->getPracticeByLocation("33.48799","-112.06880"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPracticeId($this->getPractice("Arizona Eye Specialists"))->setPracticeLocationId($this->getPracticeByLocation("33.48736","-111.92507"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("James")->setLastName("Goldman");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysicianId($physician)->setSpecialtyId($this->getSpecialty("Ophthalmology"));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPracticeId($this->getPractice("Arizona Eye Specialists"))->setPracticeLocationId($this->getPracticeByLocation("33.48799","-112.06880"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPracticeId($this->getPractice("Arizona Eye Specialists"))->setPracticeLocationId($this->getPracticeByLocation("33.37887","-111.83471"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians_2);

		$practicesHasPhysicians_3 = new PracticesHasPhysicians();
		$practicesHasPhysicians_3->setPracticeId($this->getPractice("Arizona Eye Specialists"))->setPracticeLocationId($this->getPracticeByLocation("33.48736","-111.92507"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians_3);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Thomas")->setLastName("McPhee");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysicianId($physician)->setSpecialtyId($this->getSpecialty("Ophthalmology"));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPracticeId($this->getPractice("Arizona Eye Specialists"))->setPracticeLocationId($this->getPracticeByLocation("33.48799","-112.06880"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPracticeId($this->getPractice("Arizona Eye Specialists"))->setPracticeLocationId($this->getPracticeByLocation("33.61167","-112.17987"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians_2);

		$practicesHasPhysicians_3 = new PracticesHasPhysicians();
		$practicesHasPhysicians_3->setPracticeId($this->getPractice("Arizona Eye Specialists"))->setPracticeLocationId($this->getPracticeByLocation("33.48736","-111.92507"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians_3);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Craig")->setLastName("Suiter");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysicianId($physician)->setSpecialtyId($this->getSpecialty("Ophthalmology"));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPracticeId($this->getPractice("Arizona Eye Specialists"))->setPracticeLocationId($this->getPracticeByLocation("33.48799","-112.06880"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPracticeId($this->getPractice("Arizona Eye Specialists"))->setPracticeLocationId($this->getPracticeByLocation("33.48736","-111.92507"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();


		/**
		 * Arizona Gastrointestinal Associates
		 */

		$physician = new Physicians();
		$physician->setFirstName("Jaffrey")->setLastName("Kazi");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysicianId($physician)->setSpecialtyId($this->getSpecialty("Gastroenterology"));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPracticeId($this->getPractice("Arizona Gastrointestinal Associates"))->setPracticeLocationId($this->getPracticeByLocation("33.63918","-111.89318"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Nizar")->setLastName("Ramzan");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysicianId($physician)->setSpecialtyId($this->getSpecialty("Gastroenterology"));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPracticeId($this->getPractice("Arizona Gastrointestinal Associates"))->setPracticeLocationId($this->getPracticeByLocation("33.63918","-111.89318"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Arizona Hand and Wrist Specialists
		 */

		$physician = new Physicians();
		$physician->setFirstName("Mark")->setLastName("Leber");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysicianId($physician)->setSpecialtyId($this->getSpecialty("Hand Surgery"));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPracticeId($this->getPractice("Arizona Hand and Wrist Specialists"))->setPracticeLocationId($this->getPracticeByLocation("33.38416","-111.72574"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPracticeId($this->getPractice("Arizona Hand and Wrist Specialists"))->setPracticeLocationId($this->getPracticeByLocation("33.45551","-111.99031"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Scott")->setLastName("Frankel");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysicianId($physician)->setSpecialtyId($this->getSpecialty("Hand Surgery"));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPracticeId($this->getPractice("Arizona Hand and Wrist Specialists"))->setPracticeLocationId($this->getPracticeByLocation("33.45551","-111.99031"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPracticeId($this->getPractice("Arizona Hand and Wrist Specialists"))->setPracticeLocationId($this->getPracticeByLocation("33.55411","-111.89538"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();


		/**
		 * Arizona Heart and Lung Surgery
		 */

		$physician = new Physicians();
		$physician->setFirstName("Andrew")->setLastName("Goldstein");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysicianId($physician)->setSpecialtyId($this->getSpecialty("Cardiovascular Surgery"));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPracticeId($this->getPractice("Arizona Heart and Lung Surgery"))->setPracticeLocationId($this->getPracticeByLocation("33.57821","-111.88016"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Arizona Kidney Disease and Hypertension Center
		 */

		$physician = new Physicians();
		$physician->setFirstName("Esmat")->setLastName("Mustafa");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysicianId($physician)->setSpecialtyId($this->getSpecialty("Nephrology"));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPracticeId($this->getPractice("Arizona Kidney Disease and Hypertension Center"))->setPracticeLocationId($this->getPracticeByLocation("33.640261","-111.999902"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPracticeId($this->getPractice("Arizona Kidney Disease and Hypertension Center"))->setPracticeLocationId($this->getPracticeByLocation("33.48764","-111.92426"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Hui")->setLastName("Zhao");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysicianId($physician)->setSpecialtyId($this->getSpecialty("Nephrology"));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPracticeId($this->getPractice("Arizona Kidney Disease and Hypertension Center"))->setPracticeLocationId($this->getPracticeByLocation("33.640261","-111.999902"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("David")->setLastName("Burstein");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysicianId($physician)->setSpecialtyId($this->getSpecialty("Nephrology"));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPracticeId($this->getPractice("Arizona Kidney Disease and Hypertension Center"))->setPracticeLocationId($this->getPracticeByLocation("33.48764","-111.92426"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Alejandro")->setLastName("Morales");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysicianId($physician)->setSpecialtyId($this->getSpecialty("Nephrology"));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPracticeId($this->getPractice("Arizona Kidney Disease and Hypertension Center"))->setPracticeLocationId($this->getPracticeByLocation("33.48764","-111.92426"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Yogesh")->setLastName("Amin");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysicianId($physician)->setSpecialtyId($this->getSpecialty("Nephrology"));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPracticeId($this->getPractice("Arizona Kidney Disease and Hypertension Center"))->setPracticeLocationId($this->getPracticeByLocation("33.48764","-111.92426"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Javier")->setLastName("Bibb");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysicianId($physician)->setSpecialtyId($this->getSpecialty("Nephrology"));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPracticeId($this->getPractice("Arizona Kidney Disease and Hypertension Center"))->setPracticeLocationId($this->getPracticeByLocation("33.48764","-111.92426"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Romanita")->setLastName("Nica");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysicianId($physician)->setSpecialtyId($this->getSpecialty("Nephrology"));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPracticeId($this->getPractice("Arizona Kidney Disease and Hypertension Center"))->setPracticeLocationId($this->getPracticeByLocation("33.48764","-111.92426"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Savas")->setLastName("Petrides");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysicianId($physician)->setSpecialtyId($this->getSpecialty("Nephrology"));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPracticeId($this->getPractice("Arizona Kidney Disease and Hypertension Center"))->setPracticeLocationId($this->getPracticeByLocation("33.48764","-111.92426"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Jatinder")->setLastName("Soni");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysicianId($physician)->setSpecialtyId($this->getSpecialty("Nephrology"));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPracticeId($this->getPractice("Arizona Kidney Disease and Hypertension Center"))->setPracticeLocationId($this->getPracticeByLocation("33.48764","-111.92426"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Ann")->setLastName("Thomas");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysicianId($physician)->setSpecialtyId($this->getSpecialty("Nephrology"));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPracticeId($this->getPractice("Arizona Kidney Disease and Hypertension Center"))->setPracticeLocationId($this->getPracticeByLocation("33.48764","-111.92426"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Arizona Neurological Institute
		 */

		$physician = new Physicians();
		$physician->setFirstName("As'ad")->setLastName("Ehtisham");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysicianId($physician)->setSpecialtyId($this->getSpecialty("Neurology"));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPracticeId($this->getPractice("Arizona Neurological Institute"))->setPracticeLocationId($this->getPracticeByLocation("33.605566","-112.283898"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Arizona Neurology and Sleep Center
		 */

		$physician = new Physicians();
		$physician->setFirstName("Jose")->setLastName("De Ocampo");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysicianId($physician)->setSpecialtyId($this->getSpecialty("Neurology"));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPracticeId($this->getPractice("Arizona Neurology and Sleep Center"))->setPracticeLocationId($this->getPracticeByLocation("33.58024","-111.88379"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Arizona Ocular and Facial Plastic Surgery
		 */

		$physician = new Physicians();
		$physician->setFirstName("Dustin")->setLastName("Heringer");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysicianId($physician)->setSpecialtyId($this->getSpecialty("Plastic Surgery"));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPracticeId($this->getPractice("Arizona Ocular and Facial Plastic Surgery"))->setPracticeLocationId($this->getPracticeByLocation("33.48898","-111.92584"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Arizona Oculoplastic Specialists
		 */

		$physician = new Physicians();
		$physician->setFirstName("Ali")->setLastName("Ghafouri");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysicianId($physician)->setSpecialtyId($this->getSpecialty("Ophthalmology"));
		$manager->persist($physicianHasSpecialties);

		$physicianHasSpecialties_2 = new PhysiciansHasSpecialties();
		$physicianHasSpecialties_2->setPhysicianId($physician)->setSpecialtyId($this->getSpecialty("Plastic Surgery"));
		$manager->persist($physicianHasSpecialties_2);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPracticeId($this->getPractice("Arizona Oculoplastic Specialists"))->setPracticeLocationId($this->getPracticeByLocation("33.61537","-111.89242"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPracticeId($this->getPractice("Arizona Oculoplastic Specialists"))->setPracticeLocationId($this->getPracticeByLocation("33.37833","-111.89361"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();


		/**
		 * Arizona Oncology Associates
		 */

		$physician = new Physicians();
		$physician->setFirstName("Tania")->setLastName("Cortas");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysicianId($physician)->setSpecialtyId($this->getSpecialty("Hematology-Oncology"));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPracticeId($this->getPractice("Arizona Oncology Associates"))->setPracticeLocationId($this->getPracticeByLocation("33.57820","-111.87864"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Mike")->setLastName("Janicek");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysicianId($physician)->setSpecialtyId($this->getSpecialty("Gynecologic Oncology"));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPracticeId($this->getPractice("Arizona Oncology Associates"))->setPracticeLocationId($this->getPracticeByLocation("33.57820","-111.87864"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Lanny")->setLastName("Hecker");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysicianId($physician)->setSpecialtyId($this->getSpecialty("Hematology-Oncology"));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPracticeId($this->getPractice("Arizona Oncology Associates"))->setPracticeLocationId($this->getPracticeByLocation("33.61537","-111.89242"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Michael")->setLastName("Roberts");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysicianId($physician)->setSpecialtyId($this->getSpecialty("Hematology-Oncology"));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPracticeId($this->getPractice("Arizona Oncology Associates"))->setPracticeLocationId($this->getPracticeByLocation("33.61537","-111.89242"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Mahesh")->setLastName("Seetharam");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysicianId($physician)->setSpecialtyId($this->getSpecialty("Hematology-Oncology"));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPracticeId($this->getPractice("Arizona Oncology Associates"))->setPracticeLocationId($this->getPracticeByLocation("33.61537","-111.89242"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("John")->setLastName("Bibb");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysicianId($physician)->setSpecialtyId($this->getSpecialty("Hematology-Oncology"));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPracticeId($this->getPractice("Arizona Oncology Associates"))->setPracticeLocationId($this->getPracticeByLocation("33.50634","-112.03388"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Arizona Oncology Services
		 */

		$physician = new Physicians();
		$physician->setFirstName("David")->setLastName("Beyer");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysicianId($physician)->setSpecialtyId($this->getSpecialty("Radiation-Oncology"));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPracticeId($this->getPractice("Arizona Oncology Services"))->setPracticeLocationId($this->getPracticeByLocation("33.66550","-112.11826"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Arizona Orthopedic and Sports Medicine Specialists
		 */

		$physician = new Physicians();
		$physician->setFirstName("Michael")->setLastName("Brennan");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysicianId($physician)->setSpecialtyId($this->getSpecialty("Orthopedic Surgeon"));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPracticeId($this->getPractice("Arizona Orthopedic and Sports Medicine Specialists"))->setPracticeLocationId($this->getPracticeByLocation("33.50634","-112.03388"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Arizona Pain Specialists
		 */

		$physician = new Physicians();
		$physician->setFirstName("Paul")->setLastName("Lynch");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysicianId($physician)->setSpecialtyId($this->getSpecialty("Pain Management"));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPracticeId($this->getPractice("Arizona Pain Specialists"))->setPracticeLocationId($this->getPracticeByLocation("33.67568","-111.97936"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPracticeId($this->getPractice("Arizona Pain Specialists"))->setPracticeLocationId($this->getPracticeByLocation("33.57463","-111.88249"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Tory")->setLastName("McJunkin");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysicianId($physician)->setSpecialtyId($this->getSpecialty("Pain Management"));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPracticeId($this->getPractice("Arizona Pain Specialists"))->setPracticeLocationId($this->getPracticeByLocation("33.67568","-111.97936"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians);

		$practicesHasPhysicians_2 = new PracticesHasPhysicians();
		$practicesHasPhysicians_2->setPracticeId($this->getPractice("Arizona Pain Specialists"))->setPracticeLocationId($this->getPracticeByLocation("33.57463","-111.88249"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians_2);

		$manager->flush();


		/**
		 * Arizona Prostate Cancer Center
		 */

		$physician = new Physicians();
		$physician->setFirstName("Thomas")->setLastName("Canty");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysicianId($physician)->setSpecialtyId($this->getSpecialty("Radiation-Oncology"));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPracticeId($this->getPractice("Arizona Prostate Cancer Center"))->setPracticeLocationId($this->getPracticeByLocation("33.58693","-111.92674"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians);

		$manager->flush();


		/**
		 * Arizona Pulmonary Specialists
		 */

		$physician = new Physicians();
		$physician->setFirstName("Lorie")->setLastName("Loreman");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysicianId($physician)->setSpecialtyId($this->getSpecialty("Pulmonology"));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPracticeId($this->getPractice("Arizona Pulmonary Specialists"))->setPracticeLocationId($this->getPracticeByLocation("33.57369","-111.88347"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Ewa")->setLastName("Lupa-Laskus");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysicianId($physician)->setSpecialtyId($this->getSpecialty("Pulmonology"));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPracticeId($this->getPractice("Arizona Pulmonary Specialists"))->setPracticeLocationId($this->getPracticeByLocation("33.57369","-111.88347"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Bridgett")->setLastName("Ronan");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysicianId($physician)->setSpecialtyId($this->getSpecialty("Pulmonology"));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPracticeId($this->getPractice("Arizona Pulmonary Specialists"))->setPracticeLocationId($this->getPracticeByLocation("33.57369","-111.88347"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Jonathan")->setLastName("Ruzi");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysicianId($physician)->setSpecialtyId($this->getSpecialty("Pulmonology"));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPracticeId($this->getPractice("Arizona Pulmonary Specialists"))->setPracticeLocationId($this->getPracticeByLocation("33.57369","-111.88347"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Sabitha")->setLastName("Setty");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysicianId($physician)->setSpecialtyId($this->getSpecialty("Pulmonology"));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPracticeId($this->getPractice("Arizona Pulmonary Specialists"))->setPracticeLocationId($this->getPracticeByLocation("33.57369","-111.88347"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Lawrence")->setLastName("Slama");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysicianId($physician)->setSpecialtyId($this->getSpecialty("Pulmonology"));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPracticeId($this->getPractice("Arizona Pulmonary Specialists"))->setPracticeLocationId($this->getPracticeByLocation("33.57369","-111.88347"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Paul")->setLastName("Steinmetz");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysicianId($physician)->setSpecialtyId($this->getSpecialty("Pulmonary-Critical Care"));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPracticeId($this->getPractice("Arizona Pulmonary Specialists"))->setPracticeLocationId($this->getPracticeByLocation("33.57369","-111.88347"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

		$physician = new Physicians();
		$physician->setFirstName("Judson")->setLastName("Tillinghast");
		$manager->persist($physician);

		$physicianHasSpecialties = new PhysiciansHasSpecialties();
		$physicianHasSpecialties->setPhysicianId($physician)->setSpecialtyId($this->getSpecialty("Pulmonary-Critical Care"));
		$manager->persist($physicianHasSpecialties);

		$practicesHasPhysicians = new PracticesHasPhysicians();
		$practicesHasPhysicians->setPracticeId($this->getPractice("Arizona Pulmonary Specialists"))->setPracticeLocationId($this->getPracticeByLocation("33.57369","-111.88347"))->setPhysicianId($physician);
		$manager->persist($practicesHasPhysicians);

		$manager->flush();

	}

}