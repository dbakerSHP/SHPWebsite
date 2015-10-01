<?php
/**
 * Created by PhpStorm.
 * User: jstgermain
 * Date: 9/30/15
 * Time: 9:11 AM
 */

namespace SiteBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use SiteBundle\Entity\Specialties;

class LoadSpecialties extends AbstractFixture implements OrderedFixtureInterface
{

	public function getOrder()
	{
		return 1;
	}

	public function load(ObjectManager $manager)
	{

		// LOAD SPECIALTIES FOR MAPPING
		$specialty = new Specialties();
		$specialty->setSpecialty("Allergy");
		$manager->persist($specialty);
		$manager->flush();

		$specialty = new Specialties();
		$specialty->setSpecialty("Anesthesiology");
		$manager->persist($specialty);
		$manager->flush();

		$specialty = new Specialties();
		$specialty->setSpecialty("Bariatrics");
		$manager->persist($specialty);
		$manager->flush();

		$specialty = new Specialties();
		$specialty->setSpecialty("Breast Surgery");
		$manager->persist($specialty);
		$manager->flush();

		$specialty = new Specialties();
		$specialty->setSpecialty("Cardiac Electrophysiology");
		$manager->persist($specialty);
		$manager->flush();

		$specialty = new Specialties();
		$specialty->setSpecialty("Cardiology");
		$manager->persist($specialty);
		$manager->flush();

		$specialty = new Specialties();
		$specialty->setSpecialty("Cardiovascular Surgery");
		$manager->persist($specialty);
		$manager->flush();

		$specialty = new Specialties();
		$specialty->setSpecialty("Colorectal Surgery");
		$manager->persist($specialty);
		$manager->flush();

		$specialty = new Specialties();
		$specialty->setSpecialty("Dermatology");
		$manager->persist($specialty);
		$manager->flush();

		$specialty = new Specialties();
		$specialty->setSpecialty("Ear");
		$manager->persist($specialty);
		$manager->flush();

		$specialty = new Specialties();
		$specialty->setSpecialty("Emergency Medicine");
		$manager->persist($specialty);
		$manager->flush();

		$specialty = new Specialties();
		$specialty->setSpecialty("Endocrinology");
		$manager->persist($specialty);
		$manager->flush();

		$specialty = new Specialties();
		$specialty->setSpecialty("Family Medicine");
		$manager->persist($specialty);
		$manager->flush();

		$specialty = new Specialties();
		$specialty->setSpecialty("Fertility");
		$manager->persist($specialty);
		$manager->flush();

		$specialty = new Specialties();
		$specialty->setSpecialty("Gastroenterology");
		$manager->persist($specialty);
		$manager->flush();

		$specialty = new Specialties();
		$specialty->setSpecialty("General Surgery");
		$manager->persist($specialty);
		$manager->flush();

		$specialty = new Specialties();
		$specialty->setSpecialty("Gynecologic Oncology");
		$manager->persist($specialty);
		$manager->flush();

		$specialty = new Specialties();
		$specialty->setSpecialty("Gynecology");
		$manager->persist($specialty);
		$manager->flush();

		$specialty = new Specialties();
		$specialty->setSpecialty("Hand Surgery");
		$manager->persist($specialty);
		$manager->flush();

		$specialty = new Specialties();
		$specialty->setSpecialty("Hematology-Oncology");
		$manager->persist($specialty);
		$manager->flush();

		$specialty = new Specialties();
		$specialty->setSpecialty("Hospitalist");
		$manager->persist($specialty);
		$manager->flush();

		$specialty = new Specialties();
		$specialty->setSpecialty("Intensivists");
		$manager->persist($specialty);
		$manager->flush();

		$specialty = new Specialties();
		$specialty->setSpecialty("Internal Medicine");
		$manager->persist($specialty);
		$manager->flush();

		$specialty = new Specialties();
		$specialty->setSpecialty("Med-Peds");
		$manager->persist($specialty);
		$manager->flush();

		$specialty = new Specialties();
		$specialty->setSpecialty("Medical Oncology");
		$manager->persist($specialty);
		$manager->flush();

		$specialty = new Specialties();
		$specialty->setSpecialty("Nephrology");
		$manager->persist($specialty);
		$manager->flush();

		$specialty = new Specialties();
		$specialty->setSpecialty("Neuro Surgery");
		$manager->persist($specialty);
		$manager->flush();

		$specialty = new Specialties();
		$specialty->setSpecialty("Neurohospitalist");
		$manager->persist($specialty);
		$manager->flush();

		$specialty = new Specialties();
		$specialty->setSpecialty("Neurology");
		$manager->persist($specialty);
		$manager->flush();

		$specialty = new Specialties();
		$specialty->setSpecialty("Nose");
		$manager->persist($specialty);
		$manager->flush();

		$specialty = new Specialties();
		$specialty->setSpecialty("OB/GYN");
		$manager->persist($specialty);
		$manager->flush();

		$specialty = new Specialties();
		$specialty->setSpecialty("OB/GYN-Perinatal");
		$manager->persist($specialty);
		$manager->flush();

		$specialty = new Specialties();
		$specialty->setSpecialty("Occupational Health");
		$manager->persist($specialty);
		$manager->flush();

		$specialty = new Specialties();
		$specialty->setSpecialty("Oncology - Clinical Trials");
		$manager->persist($specialty);
		$manager->flush();

		$specialty = new Specialties();
		$specialty->setSpecialty("Ophthalmology");
		$manager->persist($specialty);
		$manager->flush();

		$specialty = new Specialties();
		$specialty->setSpecialty("Oral Maxillofacial");
		$manager->persist($specialty);
		$manager->flush();

		$specialty = new Specialties();
		$specialty->setSpecialty("Ortho - Spine");
		$manager->persist($specialty);
		$manager->flush();

		$specialty = new Specialties();
		$specialty->setSpecialty("Orthopedic Surgeon");
		$manager->persist($specialty);
		$manager->flush();

		$specialty = new Specialties();
		$specialty->setSpecialty("Pain Management");
		$manager->persist($specialty);
		$manager->flush();

		$specialty = new Specialties();
		$specialty->setSpecialty("Pathology");
		$manager->persist($specialty);
		$manager->flush();

		$specialty = new Specialties();
		$specialty->setSpecialty("Pediatric Endocrinology");
		$manager->persist($specialty);
		$manager->flush();

		$specialty = new Specialties();
		$specialty->setSpecialty("Pediatric Orthopedics");
		$manager->persist($specialty);
		$manager->flush();

		$specialty = new Specialties();
		$specialty->setSpecialty("Pediatrics");
		$manager->persist($specialty);
		$manager->flush();

		$specialty = new Specialties();
		$specialty->setSpecialty("Physical Medicine and Rehab");
		$manager->persist($specialty);
		$manager->flush();

		$specialty = new Specialties();
		$specialty->setSpecialty("Plastic Surgery");
		$manager->persist($specialty);
		$manager->flush();

		$specialty = new Specialties();
		$specialty->setSpecialty("Podiatry");
		$manager->persist($specialty);
		$manager->flush();

		$specialty = new Specialties();
		$specialty->setSpecialty("Psychiatry");
		$manager->persist($specialty);
		$manager->flush();

		$specialty = new Specialties();
		$specialty->setSpecialty("Pulmonary-Critical Care");
		$manager->persist($specialty);
		$manager->flush();

		$specialty = new Specialties();
		$specialty->setSpecialty("Pulmonology");
		$manager->persist($specialty);
		$manager->flush();

		$specialty = new Specialties();
		$specialty->setSpecialty("Radiation-Oncology");
		$manager->persist($specialty);
		$manager->flush();

		$specialty = new Specialties();
		$specialty->setSpecialty("Radiology");
		$manager->persist($specialty);
		$manager->flush();

		$specialty = new Specialties();
		$specialty->setSpecialty("Radiology - Interventional");
		$manager->persist($specialty);
		$manager->flush();

		$specialty = new Specialties();
		$specialty->setSpecialty("Rheumatology");
		$manager->persist($specialty);
		$manager->flush();

		$specialty = new Specialties();
		$specialty->setSpecialty("Sleep Medicine");
		$manager->persist($specialty);
		$manager->flush();

		$specialty = new Specialties();
		$specialty->setSpecialty("Sports Medicine");
		$manager->persist($specialty);
		$manager->flush();

		$specialty = new Specialties();
		$specialty->setSpecialty("Surgical Oncology");
		$manager->persist($specialty);
		$manager->flush();

		$specialty = new Specialties();
		$specialty->setSpecialty("Throat");
		$manager->persist($specialty);
		$manager->flush();

		$specialty = new Specialties();
		$specialty->setSpecialty("Transplant Surgery");
		$manager->persist($specialty);
		$manager->flush();

		$specialty = new Specialties();
		$specialty->setSpecialty("Trauma-Crit Care");
		$manager->persist($specialty);
		$manager->flush();

		$specialty = new Specialties();
		$specialty->setSpecialty("Urgent Care");
		$manager->persist($specialty);
		$manager->flush();

		$specialty = new Specialties();
		$specialty->setSpecialty("Urogynecology");
		$manager->persist($specialty);
		$manager->flush();

		$specialty = new Specialties();
		$specialty->setSpecialty("Urology");
		$manager->persist($specialty);
		$manager->flush();

		$specialty = new Specialties();
		$specialty->setSpecialty("Vascular Surgery");
		$manager->persist($specialty);
		$manager->flush();

		// END INSERTING SPECIALTIES
	}

}