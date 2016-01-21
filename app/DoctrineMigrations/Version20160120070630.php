<?php

namespace SiteBundle\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

use SiteBundle\Entity\PracticesLocations;
use SiteBundle\Entity\Physicians;
use SiteBundle\Entity\PracticesHasPhysicians;
use SiteBundle\Entity\PhysiciansHasSpecialties;


/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20160120070630 extends AbstractMigration implements ContainerAwareInterface
{

    private $container;

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {

        $manager = $this->container->get('doctrine.orm.default_entity_manager');

	    /*
	     * Add Practice / Locations
	     */

	    // Southwest Kidney Institute
	    $practiceLocation = new PracticesLocations();
	    $practiceLocation->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Southwest Kidney Institute")))->setAddress1("2149 E. Warner Rd.")->setAddress2("Ste. 101")->setCity("Tempe")->setState("AZ")->setZip("85284")->setLatitude("33.334738")->setLongitude("-111.895595")->setPhone("(480) 610-6100");
	    $manager->persist($practiceLocation);
	    $manager->flush();


	    /*
	     * Add Physicians / Specialties
	     */

	    // Risser Thomas Eye Clinic, Ltd
	    $physician = new Physicians();
	    $physician->setFirstName("Robert")->setLastName("Thomas");
	    $manager->persist($physician);

	    $practicesHasPhysicians = new PracticesHasPhysicians();
	    $practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Risser Thomas Eye Clinic, Ltd")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Risser Thomas Eye Clinic, Ltd")), "latitude" => "33.570224", "longitude" => "-112.070023")));
	    $manager->persist($practicesHasPhysicians);

	    $physicianHasSpecialties = new PhysiciansHasSpecialties();
	    $physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Ophthalmology")));
	    $manager->persist($physicianHasSpecialties);

	    $manager->flush();


	    // Scottsdale Center for Sight
	    $physician = new Physicians();
	    $physician->setFirstName("Paul")->setLastName("Petelin");
	    $manager->persist($physician);

	    $practicesHasPhysicians = new PracticesHasPhysicians();
	    $practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Center for Sight")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Center for Sight")), "latitude" => "33.615225", "longitude" => "-111.89236")));
	    $manager->persist($practicesHasPhysicians);

	    $physicianHasSpecialties = new PhysiciansHasSpecialties();
	    $physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Ophthalmology")));
	    $manager->persist($physicianHasSpecialties);

	    $manager->flush();


	    // Sonoran Spine
	    $physician = new Physicians();
	    $physician->setFirstName("Michael")->setLastName("Chang");
	    $manager->persist($physician);

	    $practicesHasPhysicians = new PracticesHasPhysicians();
	    $practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Sonoran Spine")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Sonoran Spine")), "latitude" => "33.430224", "longitude" => "-111.956708")));
	    $manager->persist($practicesHasPhysicians);

	    $physicianHasSpecialties = new PhysiciansHasSpecialties();
	    $physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Ortho - Spine")));
	    $manager->persist($physicianHasSpecialties);

	    $manager->flush();

	    $physician = new Physicians();
	    $physician->setFirstName("Dennis")->setLastName("Crandall");
	    $manager->persist($physician);

	    $practicesHasPhysicians = new PracticesHasPhysicians();
	    $practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Sonoran Spine")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Sonoran Spine")), "latitude" => "33.430224", "longitude" => "-111.956708")));
	    $manager->persist($practicesHasPhysicians);

	    $physicianHasSpecialties = new PhysiciansHasSpecialties();
	    $physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Ortho - Spine")));
	    $manager->persist($physicianHasSpecialties);

	    $manager->flush();

	    $physician = new Physicians();
	    $physician->setFirstName("Jason")->setLastName("Dalta");
	    $manager->persist($physician);

	    $practicesHasPhysicians = new PracticesHasPhysicians();
	    $practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Sonoran Spine")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Sonoran Spine")), "latitude" => "33.430224", "longitude" => "-111.956708")));
	    $manager->persist($practicesHasPhysicians);

	    $physicianHasSpecialties = new PhysiciansHasSpecialties();
	    $physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Ortho - Spine")));
	    $manager->persist($physicianHasSpecialties);

	    $manager->flush();

	    $physician = new Physicians();
	    $physician->setFirstName("Lyle")->setLastName("Young");
	    $manager->persist($physician);

	    $practicesHasPhysicians = new PracticesHasPhysicians();
	    $practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Sonoran Spine")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Sonoran Spine")), "latitude" => "33.430224", "longitude" => "-111.956708")));
	    $manager->persist($practicesHasPhysicians);

	    $physicianHasSpecialties = new PhysiciansHasSpecialties();
	    $physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Orthopedic Surgeon")));
	    $manager->persist($physicianHasSpecialties);

	    $manager->flush();


	    // Southwest Kidney Institute
	    $physician = new Physicians();
	    $physician->setFirstName("Maria")->setLastName("Khan");
	    $manager->persist($physician);

	    $practicesHasPhysicians = new PracticesHasPhysicians();
	    $practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Southwest Kidney Institute")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Southwest Kidney Institute")), "latitude" => "33.334738", "longitude" => "-111.895595")));
	    $manager->persist($practicesHasPhysicians);

	    $physicianHasSpecialties = new PhysiciansHasSpecialties();
	    $physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Nephrology")));
	    $manager->persist($physicianHasSpecialties);

	    $manager->flush();

	    $physician = new Physicians();
	    $physician->setFirstName("Shefali")->setLastName("Gupta");
	    $manager->persist($physician);

	    $practicesHasPhysicians = new PracticesHasPhysicians();
	    $practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Southwest Kidney Institute")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Southwest Kidney Institute")), "latitude" => "33.334738", "longitude" => "-111.895595")));
	    $manager->persist($practicesHasPhysicians);

	    $physicianHasSpecialties = new PhysiciansHasSpecialties();
	    $physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Nephrology")));
	    $manager->persist($physicianHasSpecialties);

	    $manager->flush();

	    $physician = new Physicians();
	    $physician->setFirstName("Himabindu")->setLastName("Chaparala");
	    $manager->persist($physician);

	    $practicesHasPhysicians = new PracticesHasPhysicians();
	    $practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Southwest Kidney Institute")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Southwest Kidney Institute")), "latitude" => "33.334738", "longitude" => "-111.895595")));
	    $manager->persist($practicesHasPhysicians);

	    $physicianHasSpecialties = new PhysiciansHasSpecialties();
	    $physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Nephrology")));
	    $manager->persist($physicianHasSpecialties);

	    $manager->flush();

	    $physician = new Physicians();
	    $physician->setFirstName("Melissa")->setLastName("Go");
	    $manager->persist($physician);

	    $practicesHasPhysicians = new PracticesHasPhysicians();
	    $practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Southwest Kidney Institute")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Southwest Kidney Institute")), "latitude" => "33.334738", "longitude" => "-111.895595")));
	    $manager->persist($practicesHasPhysicians);

	    $physicianHasSpecialties = new PhysiciansHasSpecialties();
	    $physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Nephrology")));
	    $manager->persist($physicianHasSpecialties);

	    $manager->flush();

	    $physician = new Physicians();
	    $physician->setFirstName("Sharareh")->setLastName("Saadat");
	    $manager->persist($physician);

	    $practicesHasPhysicians = new PracticesHasPhysicians();
	    $practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Southwest Kidney Institute")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Southwest Kidney Institute")), "latitude" => "33.334738", "longitude" => "-111.895595")));
	    $manager->persist($practicesHasPhysicians);

	    $physicianHasSpecialties = new PhysiciansHasSpecialties();
	    $physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Nephrology")));
	    $manager->persist($physicianHasSpecialties);

	    $manager->flush();


	    // Southwest Skin Specialists
	    $physician = new Physicians();
	    $physician->setFirstName("Neel")->setLastName("Patel");
	    $manager->persist($physician);

	    $practicesHasPhysicians = new PracticesHasPhysicians();
	    $practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Southwest Skin Specialists")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Southwest Skin Specialists")), "latitude" => "33.578324", "longitude" => "-111.881363")));
	    $manager->persist($practicesHasPhysicians);

	    $physicianHasSpecialties = new PhysiciansHasSpecialties();
	    $physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Dermatology")));
	    $manager->persist($physicianHasSpecialties);

	    $manager->flush();


	    // Thompson Peak Internal Medicine
	    $physician = new Physicians();
	    $physician->setFirstName("Gary")->setLastName("Betz II");
	    $manager->persist($physician);

	    $practicesHasPhysicians = new PracticesHasPhysicians();
	    $practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Thompson Peak Internal Medicine")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Thompson Peak Internal Medicine")), "latitude" => "33.652013", "longitude" => "-111.929718")));
	    $manager->persist($practicesHasPhysicians);

	    $physicianHasSpecialties = new PhysiciansHasSpecialties();
	    $physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Internal Medicine")));
	    $manager->persist($physicianHasSpecialties);

	    $manager->flush();


	    // Urology Associates
	    $physician = new Physicians();
	    $physician->setFirstName("Scott")->setLastName("Cheney");
	    $manager->persist($physician);

	    $practicesHasPhysicians = new PracticesHasPhysicians();
	    $practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Urology Associates")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Urology Associates")), "latitude" => "33.57954", "longitude" => "-111.88126")));
	    $manager->persist($practicesHasPhysicians);

	    $physicianHasSpecialties = new PhysiciansHasSpecialties();
	    $physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Urology")));
	    $manager->persist($physicianHasSpecialties);

	    $manager->flush();

	    $physician = new Physicians();
	    $physician->setFirstName("Daniel")->setLastName("Woodruff");
	    $manager->persist($physician);

	    $practicesHasPhysicians = new PracticesHasPhysicians();
	    $practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Urology Associates")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Urology Associates")), "latitude" => "33.57954", "longitude" => "-111.88126")));
	    $manager->persist($practicesHasPhysicians);

	    $physicianHasSpecialties = new PhysiciansHasSpecialties();
	    $physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Urology")));
	    $manager->persist($physicianHasSpecialties);

	    $manager->flush();


	    // Valley OB/GYN Associates
	    $physician = new Physicians();
	    $physician->setFirstName("Nancy")->setLastName("McCauley");
	    $manager->persist($physician);

	    $practicesHasPhysicians = new PracticesHasPhysicians();
	    $practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Valley OB/GYN Associates")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Valley OB/GYN Associates")), "latitude" => "33.48898", "longitude" => "-111.92584")));
	    $manager->persist($practicesHasPhysicians);

	    $physicianHasSpecialties = new PhysiciansHasSpecialties();
	    $physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "OB/GYN")));
	    $manager->persist($physicianHasSpecialties);

	    $manager->flush();


	    // Valley Pain Consultants
	    $physician = new Physicians();
	    $physician->setFirstName("Ryan")->setLastName("Gibb");
	    $manager->persist($physician);

	    $practicesHasPhysicians = new PracticesHasPhysicians();
	    $practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Valley Pain Consultants")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Valley Pain Consultants")), "latitude" => "33.468450", "longitude" => "-112.074908")));
	    $manager->persist($practicesHasPhysicians);

	    $physicianHasSpecialties = new PhysiciansHasSpecialties();
	    $physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Anesthesiology, Pain Management")));
	    $manager->persist($physicianHasSpecialties);

	    $manager->flush();

	    $physician = new Physicians();
	    $physician->setFirstName("Jillian")->setLastName("Maloney");
	    $manager->persist($physician);

	    $practicesHasPhysicians = new PracticesHasPhysicians();
	    $practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Valley Pain Consultants")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Valley Pain Consultants")), "latitude" => "33.468450", "longitude" => "-112.074908")));
	    $manager->persist($practicesHasPhysicians);

	    $physicianHasSpecialties = new PhysiciansHasSpecialties();
	    $physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Anesthesiology, Pain Management")));
	    $manager->persist($physicianHasSpecialties);

	    $manager->flush();


    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs

    }
}
