<?php

namespace SiteBundle\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

use SiteBundle\Entity\Practices;
use SiteBundle\Entity\PracticesLocations;
use SiteBundle\Entity\Physicians;
use SiteBundle\Entity\PracticesHasPhysicians;
use SiteBundle\Entity\PhysiciansHasSpecialties;
use SiteBundle\Entity\Specialties;


/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20160116184124 extends AbstractMigration implements ContainerAwareInterface
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


	    $specialty = new Specialties();
	    $specialty->setSpecialty("Optometrist");
	    $manager->persist($specialty);
	    $manager->flush();


	    $specialty = new Specialties();
	    $specialty->setSpecialty("Urologynecology");
	    $manager->persist($specialty);
	    $manager->flush();


	    $physician = new Physicians();
        $physician->setFirstName("Robert")->setLastName("Brems");
        $manager->persist($physician);

        $practicesHasPhysicians = new PracticesHasPhysicians();
        $practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Eye Specialists")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Eye Specialists")), "latitude" => "33.48736", "longitude" => "-111.92507")));
        $manager->persist($practicesHasPhysicians);

        $physicianHasSpecialties = new PhysiciansHasSpecialties();
        $physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Ophthalmology")));
        $manager->persist($physicianHasSpecialties);

        $manager->flush();


        // Arizona Gastrointestinal Associates
        $practice = new Practices();
        $practice->setPractice("Arizona Gastrointestinal Associates");
        $manager->persist($practice);
        $manager->flush();

        $practiceLocation = new PracticesLocations();
        $practiceLocation->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Gastrointestinal Associates")))->setAddress1("10181 N. 92nd St.")->setAddress2("Ste. 101")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.577974")->setLongitude("-111.878727")->setPhone("(480) 657-3400");
        $manager->persist($practiceLocation);
        $manager->flush();


        $physician = new Physicians();
        $physician->setFirstName("Michael")->setLastName("Shapiro");
        $manager->persist($physician);

        $practicesHasPhysicians = new PracticesHasPhysicians();
        $practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Gastrointestinal Associates")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Gastrointestinal Associates")), "latitude" => "33.577974", "longitude" => "-111.878727")));
        $manager->persist($practicesHasPhysicians);

        $physicianHasSpecialties = new PhysiciansHasSpecialties();
        $physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Gastroenterology")));
        $manager->persist($physicianHasSpecialties);

        $manager->flush();


        // Arizona Plastic and Recon Surgeons
        $practice = new Practices();
        $practice->setPractice("Arizona Plastic and Recon Surgeons");
        $manager->persist($practice);
        $manager->flush();

        $practiceLocation = new PracticesLocations();
        $practiceLocation->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Plastic and Recon Surgeons")))->setAddress1("10645 N. Tatum Blvd.")->setAddress2("Ste. 200-611")->setCity("Phoenix")->setState("AZ")->setZip("85028")->setLatitude("33.583757")->setLongitude("-111.974299")->setPhone("(480) 657-2000");
        $manager->persist($practiceLocation);
        $manager->flush();


        $physician = new Physicians();
        $physician->setFirstName("Molly")->setLastName("Walsh");
        $manager->persist($physician);

        $practicesHasPhysicians = new PracticesHasPhysicians();
        $practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Plastic and Recon Surgeons")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Plastic and Recon Surgeons")), "latitude" => "33.583757", "longitude" => "-111.974299")));
        $manager->persist($practicesHasPhysicians);

        $physicianHasSpecialties = new PhysiciansHasSpecialties();
        $physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Plastic Surgery")));
        $manager->persist($physicianHasSpecialties);

        $manager->flush();


        // Arizona Retina Institute
        $practice = new Practices();
        $practice->setPractice("Arizona Retina Institute");
        $manager->persist($practice);
        $manager->flush();

        $practiceLocation = new PracticesLocations();
        $practiceLocation->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Retina Institute")))->setAddress1("3811 E Bell Rd.")->setAddress2("Ste. 106 - 610")->setCity("Phoenix")->setState("AZ")->setZip("85032")->setLatitude("33.639760")->setLongitude("-111.998894")->setPhone("(602) 386-3448");
        $manager->persist($practiceLocation);
        $manager->flush();


        $physician = new Physicians();
        $physician->setFirstName("Sharam")->setLastName("Danesh");
        $manager->persist($physician);

        $practicesHasPhysicians = new PracticesHasPhysicians();
        $practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Retina Institute")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Retina Institute")), "latitude" => "33.639760", "longitude" => "-111.998894")));
        $manager->persist($practicesHasPhysicians);

        $physicianHasSpecialties = new PhysiciansHasSpecialties();
        $physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Ophthalmology")));
        $manager->persist($physicianHasSpecialties);

        $manager->flush();


        // Arizona Spine and Pain Specialists
        $practice = new Practices();
        $practice->setPractice("Arizona Spine and Pain Specialists");
        $manager->persist($practice);
        $manager->flush();

        $practiceLocation = new PracticesLocations();
        $practiceLocation->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Spine and Pain Specialists")))->setAddress1("20280 N 59th Ave.")->setAddress2("Ste. 115-617")->setCity("Glendale")->setState("AZ")->setZip("85308")->setLatitude("33.670438")->setLongitude("-112.18793")->setPhone("(602) 795-8700");
        $manager->persist($practiceLocation);
        $manager->flush();


        $physician = new Physicians();
        $physician->setFirstName("Tristan")->setLastName("Pico");
        $manager->persist($physician);

        $practicesHasPhysicians = new PracticesHasPhysicians();
        $practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Spine and Pain Specialists")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Spine and Pain Specialists")), "latitude" => "33.670438", "longitude" => "-112.18793")));
        $manager->persist($practicesHasPhysicians);

        $physicianHasSpecialties = new PhysiciansHasSpecialties();
        $physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Pain Management")));
        $manager->persist($physicianHasSpecialties);

        $manager->flush();


        $physician = new Physicians();
        $physician->setFirstName("Patrick")->setLastName("Hogan");
        $manager->persist($physician);

        $practicesHasPhysicians = new PracticesHasPhysicians();
        $practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Spine and Pain Specialists")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Spine and Pain Specialists")), "latitude" => "33.670438", "longitude" => "-112.18793")));
        $manager->persist($practicesHasPhysicians);

        $physicianHasSpecialties = new PhysiciansHasSpecialties();
        $physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Pain Management")));
        $manager->persist($physicianHasSpecialties);

        $manager->flush();


	    // Associated Ophthalmologist
	    $practice = new Practices();
	    $practice->setPractice("Associated Ophthalmologist");
	    $manager->persist($practice);
	    $manager->flush();

	    $practiceLocation = new PracticesLocations();
	    $practiceLocation->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Associated Ophthalmologist")))->setAddress1("7245 E. Osborn Rd.")->setAddress2("Ste. 4")->setCity("Scottsdale")->setState("AZ")->setZip("85251")->setLatitude("33.487253")->setLongitude("-111.925108")->setPhone("(480) 994-5012");
	    $manager->persist($practiceLocation);
	    $manager->flush();


	    $physician = new Physicians();
	    $physician->setFirstName("Cody")->setLastName("Quarnberg");
	    $manager->persist($physician);

	    $practicesHasPhysicians = new PracticesHasPhysicians();
	    $practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Associated Ophthalmologist")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Associated Ophthalmologist")), "latitude" => "33.487253", "longitude" => "-111.925108")));
	    $manager->persist($practicesHasPhysicians);

	    $physicianHasSpecialties = new PhysiciansHasSpecialties();
	    $physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Optometrist")));
	    $manager->persist($physicianHasSpecialties);

	    $manager->flush();


	    // AZ Urologynecology and Pelvic Health Center
	    $practice = new Practices();
	    $practice->setPractice("AZ Urologynecology and Pelvic Health Center");
	    $manager->persist($practice);
	    $manager->flush();

	    $practiceLocation = new PracticesLocations();
	    $practiceLocation->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "AZ Urologynecology and Pelvic Health Center")))->setAddress1("9700 N 91st St.")->setAddress2("Ste. A-103")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.573678")->setLongitude("-111.883732")->setPhone("(480) 889-2654");
	    $manager->persist($practiceLocation);
	    $manager->flush();


	    $physician = new Physicians();
	    $physician->setFirstName("Ahmed")->setLastName("Akl");
	    $manager->persist($physician);

	    $practicesHasPhysicians = new PracticesHasPhysicians();
	    $practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "AZ Urologynecology and Pelvic Health Center")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "AZ Urologynecology and Pelvic Health Center")), "latitude" => "33.573678", "longitude" => "-111.883732")));
	    $manager->persist($practicesHasPhysicians);

	    $physicianHasSpecialties = new PhysiciansHasSpecialties();
	    $physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Urologynecology")));
	    $manager->persist($physicianHasSpecialties);

	    $manager->flush();


	    // Center for Orthopedic Research and Education
	    $practice = new Practices();
	    $practice->setPractice("Camelback Women's Health");
	    $manager->persist($practice);
	    $manager->flush();

	    $practiceLocation = new PracticesLocations();
	    $practiceLocation->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Camelback Women's Health")))->setAddress1("11209 N Tatum Blvd.")->setAddress2("Ste. 225")->setCity("Phoenix")->setState("AZ")->setZip("85028")->setLatitude("33.588196")->setLongitude("-111.976491")->setPhone("(602) 494-5050");
	    $manager->persist($practiceLocation);
	    $manager->flush();


	    $physician = new Physicians();
	    $physician->setFirstName("Kathleen")->setLastName("Schwartz");
	    $manager->persist($physician);

	    $practicesHasPhysicians = new PracticesHasPhysicians();
	    $practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Camelback Women's Health")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Camelback Women's Health")), "latitude" => "33.588196", "longitude" => "-111.976491")));
	    $manager->persist($practicesHasPhysicians);

	    $physicianHasSpecialties = new PhysiciansHasSpecialties();
	    $physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "OB/GYN")));
	    $manager->persist($physicianHasSpecialties);

	    $manager->flush();


	    $physician = new Physicians();
	    $physician->setFirstName("Erin")->setLastName("O'Sullivan");
	    $manager->persist($physician);

	    $practicesHasPhysicians = new PracticesHasPhysicians();
	        $practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Camelback Women's Health")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Camelback Women's Health")), "latitude" => "33.588196", "longitude" => "-111.976491")));
	    $manager->persist($practicesHasPhysicians);

	    $physicianHasSpecialties = new PhysiciansHasSpecialties();
	    $physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "OB/GYN")));
	    $manager->persist($physicianHasSpecialties);

	    $manager->flush();


	    $physician = new Physicians();
	    $physician->setFirstName("Gregory")->setLastName("DeSanto");
	    $manager->persist($physician);

	    $practicesHasPhysicians = new PracticesHasPhysicians();
	    $practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Camelback Women's Health")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Camelback Women's Health")), "latitude" => "33.588196", "longitude" => "-111.976491")));
	    $manager->persist($practicesHasPhysicians);

	    $physicianHasSpecialties = new PhysiciansHasSpecialties();
	    $physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "OB/GYN")));
	    $manager->persist($physicianHasSpecialties);

	    $manager->flush();


	    $physician = new Physicians();
	    $physician->setFirstName("Steven")->setLastName("Nelson");
	    $manager->persist($physician);

	    $practicesHasPhysicians = new PracticesHasPhysicians();
	    $practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Camelback Women's Health")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Camelback Women's Health")), "latitude" => "33.588196", "longitude" => "-111.976491")));
	    $manager->persist($practicesHasPhysicians);

	    $physicianHasSpecialties = new PhysiciansHasSpecialties();
	    $physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "OB/GYN")));
	    $manager->persist($physicianHasSpecialties);

	    $manager->flush();


	    $physician = new Physicians();
	    $physician->setFirstName("Kethes")->setLastName("Waram");
	    $manager->persist($physician);

	    $practicesHasPhysicians = new PracticesHasPhysicians();
	    $practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Cardiovascular Consultants")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Cardiovascular Consultants")), "latitude" => "33.64026", "longitude" => "-111.99990")));
	    $manager->persist($practicesHasPhysicians);

	    $physicianHasSpecialties = new PhysiciansHasSpecialties();
	    $physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Cardiology")));
	    $manager->persist($physicianHasSpecialties);

	    $manager->flush();


	    $physician = new Physicians();
	    $physician->setFirstName("Kishlay")->setLastName("Anand");
	    $manager->persist($physician);

	    $practicesHasPhysicians = new PracticesHasPhysicians();
	    $practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Cardiovascular Consultants")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Cardiovascular Consultants")), "latitude" => "33.64026", "longitude" => "-111.99990")));
	    $manager->persist($practicesHasPhysicians);

	    $physicianHasSpecialties = new PhysiciansHasSpecialties();
	    $physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Cardiac Electrophysiology")));
	    $manager->persist($physicianHasSpecialties);

	    $manager->flush();


	    // Center for Orthopedic Research and Education
	    $practice = new Practices();
	    $practice->setPractice("Center for Orthopedic Research and Education");
	    $manager->persist($practice);
	    $manager->flush();

	    $practiceLocation = new PracticesLocations();
	    $practiceLocation->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Center for Orthopedic Research and Education")))->setAddress1("18444 N 25th Ave.")->setAddress2("Ste. 210")->setCity("Phoenix")->setState("AZ")->setZip("85023")->setLatitude("33.653656")->setLongitude("-112.112898")->setPhone("(866) 974-2673");
	    $manager->persist($practiceLocation);
	    $manager->flush();


	    $physician = new Physicians();
	    $physician->setFirstName("Sarim")->setLastName("Ahmed");
	    $manager->persist($physician);

	    $practicesHasPhysicians = new PracticesHasPhysicians();
	    $practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Center for Orthopedic Research and Education")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Center for Orthopedic Research and Education")), "latitude" => "33.653656", "longitude" => "-112.112898")));
	    $manager->persist($practicesHasPhysicians);

	    $physicianHasSpecialties = new PhysiciansHasSpecialties();
	    $physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Orthopedic Surgeon")));
	    $manager->persist($physicianHasSpecialties);

	    $manager->flush();


	    $physician = new Physicians();
	    $physician->setFirstName("Ali")->setLastName("Aragi");
	    $manager->persist($physician);

	    $practicesHasPhysicians = new PracticesHasPhysicians();
	    $practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Center for Orthopedic Research and Education")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Center for Orthopedic Research and Education")), "latitude" => "33.653656", "longitude" => "-112.112898")));
	    $manager->persist($practicesHasPhysicians);

	    $physicianHasSpecialties = new PhysiciansHasSpecialties();
	    $physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Orthopedic Surgeon")));
	    $manager->persist($physicianHasSpecialties);

	    $manager->flush();


	    $physician = new Physicians();
	    $physician->setFirstName("Tony")->setLastName("Ngugen");
	    $manager->persist($physician);

	    $practicesHasPhysicians = new PracticesHasPhysicians();
	    $practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Center for Orthopedic Research and Education")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Center for Orthopedic Research and Education")), "latitude" => "33.653656", "longitude" => "-112.112898")));
	    $manager->persist($practicesHasPhysicians);

	    $physicianHasSpecialties = new PhysiciansHasSpecialties();
	    $physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Orthopedic Surgeon")));
	    $manager->persist($physicianHasSpecialties);

	    $manager->flush();


	    // Cervical Spine Centers
	    $practice = new Practices();
	    $practice->setPractice("Cervical Spine Centers");
	    $manager->persist($practice);
	    $manager->flush();

	    $practiceLocation = new PracticesLocations();
	    $practiceLocation->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Cervical Spine Centers")))->setAddress1("18275 N 59th Ave.")->setAddress2("Bldg. H Ste. 146")->setCity("Glendale")->setState("AZ")->setZip("85308")->setLatitude("33.652032")->setLongitude("-112.185407 ")->setPhone("(480) 656-4220");
	    $manager->persist($practiceLocation);
	    $manager->flush();


	    $physician = new Physicians();
	    $physician->setFirstName("John")->setLastName("Ehtesaami");
	    $manager->persist($physician);

	    $practicesHasPhysicians = new PracticesHasPhysicians();
	    $practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Cervical Spine Centers")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Cervical Spine Centers")), "latitude" => "33.652032", "longitude" => "-112.185407")));
	    $manager->persist($practicesHasPhysicians);

	    $physicianHasSpecialties = new PhysiciansHasSpecialties();
	    $physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Orthopedic Surgeon")));
	    $manager->persist($physicianHasSpecialties);

	    $manager->flush();


	    $physician = new Physicians();
	    $physician->setFirstName("Prashant")->setLastName("Kolar");
	    $manager->persist($physician);

	    $practicesHasPhysicians = new PracticesHasPhysicians();
	    $practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Desert Kidney Associates, PLC")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Desert Kidney Associates, PLC")), "latitude" => "33.37914", "longitude" => "-111.84485")));
	    $manager->persist($practicesHasPhysicians);

	    $physicianHasSpecialties = new PhysiciansHasSpecialties();
	    $physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Nephrology")));
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
