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
class Version20160117191940 extends AbstractMigration implements ContainerAwareInterface
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


	    // Desert Mountain OBGYN
	    $practice = new Practices();
	    $practice->setPractice("Desert Mountain OBGYN");
	    $manager->persist($practice);
	    $manager->flush();

	    $practiceLocation = new PracticesLocations();
	    $practiceLocation->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Desert Mountain OBGYN")))->setAddress1("14220 Northsight Blvd.")->setAddress2("Ste. 150")->setCity("Scottsdale")->setState("AZ")->setZip("85260")->setLatitude("33.615191")->setLongitude("-111.898327")->setPhone("(480) 585-0804");
	    $manager->persist($practiceLocation);
	    $manager->flush();

	    // Desert Ridge Gastroenterology and Liver Disease
	    $practice = new Practices();
	    $practice->setPractice("Desert Ridge Gastroenterology and Liver Disease");
	    $manager->persist($practice);
	    $manager->flush();

	    $practiceLocation = new PracticesLocations();
	    $practiceLocation->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Desert Ridge Gastroenterology and Liver Disease")))->setAddress1("4045 E. Bell Rd.")->setAddress2("Ste. 139")->setCity("Phoenix")->setState("AZ")->setZip("85032")->setLatitude("33.639552")->setLongitude("-111.994756")->setPhone("(602) 996-8888");
	    $manager->persist($practiceLocation);
	    $manager->flush();

	    // Desert Sun Pediatrics
	    $practice = new Practices();
	    $practice->setPractice("Desert Sun Pediatrics");
	    $manager->persist($practice);
	    $manager->flush();

	    $practiceLocation = new PracticesLocations();
	    $practiceLocation->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Desert Sun Pediatrics")))->setAddress1("26224 N Tatum Blvd.")->setAddress2("Ste. 1")->setCity("Phoenix")->setState("AZ")->setZip("85050")->setLatitude("33.725156")->setLongitude("-111.977958")->setPhone("(480) 563-1111");
	    $manager->persist($practiceLocation);
	    $manager->flush();

	    // Enticare, PC
	    $practice = new Practices();
	    $practice->setPractice("Enticare, PC");
	    $manager->persist($practice);
	    $manager->flush();

	    $practiceLocation = new PracticesLocations();
	    $practiceLocation->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Enticare, PC")))->setAddress1("3420 S Mercy Rd.")->setAddress2("Ste. 107")->setCity("Gilbert")->setState("AZ")->setZip("85297")->setLatitude("33.287458")->setLongitude("-111.75027")->setPhone("(480) 214-9000");
	    $manager->persist($practiceLocation);
	    $manager->flush();

	    // Eye Physicians and Surgeons of Arizona
	    $practice = new Practices();
	    $practice->setPractice("Eye Physicians and Surgeons of Arizona");
	    $manager->persist($practice);
	    $manager->flush();

	    $practiceLocation = new PracticesLocations();
	    $practiceLocation->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Eye Physicians and Surgeons of Arizona")))->setAddress1("6677 W. Thunderbird Rd.")->setAddress2("Bldg. F Ste. 101")->setCity("Glendale")->setState("AZ")->setZip("85603")->setLatitude("33.609291")->setLongitude("-112.201531")->setPhone("(623) 878-3939");
	    $manager->persist($practiceLocation);
	    $manager->flush();

	    // Jeffrey Copoloff, PLLC
	    $practice = new Practices();
	    $practice->setPractice("Jeffrey Copoloff, PLLC");
	    $manager->persist($practice);
	    $manager->flush();

	    $practiceLocation = new PracticesLocations();
	    $practiceLocation->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Jeffrey Copoloff, PLLC")))->setAddress1("13090 N. 94th Dr.")->setAddress2("Ste. 202")->setCity("Peoria")->setState("AZ")->setZip("85381")->setLatitude("33.602249")->setLongitude("-112.263272")->setPhone("(623) 934-3211");
	    $manager->persist($practiceLocation);
	    $manager->flush();

	    $practiceLocation_2 = new PracticesLocations();
	    $practiceLocation_2->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Jeffrey Copoloff, PLLC")))->setAddress1("8415 N. Pima Rd.")->setAddress2("Ste. 100")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.557086")->setLongitude("-111.890739")->setPhone("(623) 934-3211");
	    $manager->persist($practiceLocation_2);
	    $manager->flush();

	    // Joseph P. Leonetti DPM PC
	    $practice = new Practices();
	    $practice->setPractice("Joseph P. Leonetti DPM PC");
	    $manager->persist($practice);
	    $manager->flush();

	    $practiceLocation = new PracticesLocations();
	    $practiceLocation->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Joseph P. Leonetti DPM PC")))->setAddress1("4045 E. Bell Rd.")->setAddress2("Ste. 121")->setCity("Phoenix")->setState("AZ")->setZip("85032")->setLatitude("33.639552")->setLongitude("-111.994756")->setPhone("(602) 992-1120");
	    $manager->persist($practiceLocation);
	    $manager->flush();

	    // MocDocUrogyn, PLLC
	    $practice = new Practices();
	    $practice->setPractice("MocDocUrogyn, PLLC");
	    $manager->persist($practice);
	    $manager->flush();

	    $practiceLocation = new PracticesLocations();
	    $practiceLocation->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "MocDocUrogyn, PLLC")))->setAddress1("9700 N 91st St.")->setAddress2("Ste. A-103")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.573678")->setLongitude("-111.883732")->setPhone("(480) 889-2654");
	    $manager->persist($practiceLocation);
	    $manager->flush();

	    // NovaSpine Pain Institute
	    $practice = new Practices();
	    $practice->setPractice("NovaSpine Pain Institute");
	    $manager->persist($practice);
	    $manager->flush();

	    $practiceLocation = new PracticesLocations();
	    $practiceLocation->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "NovaSpine Pain Institute")))->setAddress1("14420 W Meeker Blvd.")->setAddress2("Ste. 201")->setCity("Sun City")->setState("AZ")->setZip("85375")->setLatitude("33.660476")->setLongitude("-112.370097")->setPhone("(623) 777-4747");
	    $manager->persist($practiceLocation);
	    $manager->flush();


	    // LOAD SPECIALTIES
	    $specialty = new Specialties();
	    $specialty->setSpecialty("Otolaryngology");
	    $manager->persist($specialty);
	    $manager->flush();


	    // LOAD PHYSICIANS
	    $physician = new Physicians();
	    $physician->setFirstName("Tami")->setLastName("Dairiki");
	    $manager->persist($physician);

	    $practicesHasPhysicians = new PracticesHasPhysicians();
	    $practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Desert Mountain OBGYN")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Desert Mountain OBGYN")), "latitude" => "33.615191", "longitude" => "-111.898327")));
	    $manager->persist($practicesHasPhysicians);

	    $physicianHasSpecialties = new PhysiciansHasSpecialties();
	    $physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "OB/GYN")));
	    $manager->persist($physicianHasSpecialties);

	    $manager->flush();


	    $physician = new Physicians();
	    $physician->setFirstName("Bruce")->setLastName("Sand");
	    $manager->persist($physician);

	    $practicesHasPhysicians = new PracticesHasPhysicians();
	    $practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Desert Ridge Gastroenterology and Liver Disease")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Desert Ridge Gastroenterology and Liver Disease")), "latitude" => "33.639552", "longitude" => "-111.994756")));
	    $manager->persist($practicesHasPhysicians);

	    $physicianHasSpecialties = new PhysiciansHasSpecialties();
	    $physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Gastroenterology")));
	    $manager->persist($physicianHasSpecialties);

	    $manager->flush();


	    $physician = new Physicians();
	    $physician->setFirstName("Manny")->setLastName("Delucca");
	    $manager->persist($physician);

	    $practicesHasPhysicians = new PracticesHasPhysicians();
	    $practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Desert Sun Pediatrics")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Desert Sun Pediatrics")), "latitude" => "33.725156", "longitude" => "-111.977958")));
	    $manager->persist($practicesHasPhysicians);

	    $physicianHasSpecialties = new PhysiciansHasSpecialties();
	    $physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Pediatrics")));
	    $manager->persist($physicianHasSpecialties);

	    $manager->flush();

	    $physician = new Physicians();
	    $physician->setFirstName("Binita")->setLastName("Patel");
	    $manager->persist($physician);

	    $practicesHasPhysicians = new PracticesHasPhysicians();
	    $practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Desert Sun Pediatrics")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Desert Sun Pediatrics")), "latitude" => "33.725156", "longitude" => "-111.977958")));
	    $manager->persist($practicesHasPhysicians);

	    $physicianHasSpecialties = new PhysiciansHasSpecialties();
	    $physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Pediatrics")));
	    $manager->persist($physicianHasSpecialties);

	    $manager->flush();

	    $physician = new Physicians();
	    $physician->setFirstName("Nancy")->setLastName("Krasnow-Horlick");
	    $manager->persist($physician);

	    $practicesHasPhysicians = new PracticesHasPhysicians();
	    $practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Desert Sun Pediatrics")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Desert Sun Pediatrics")), "latitude" => "33.725156", "longitude" => "-111.977958")));
	    $manager->persist($practicesHasPhysicians);

	    $physicianHasSpecialties = new PhysiciansHasSpecialties();
	    $physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Pediatrics")));
	    $manager->persist($physicianHasSpecialties);

	    $manager->flush();

	    $physician = new Physicians();
	    $physician->setFirstName("Amy")->setLastName("Rampley");
	    $manager->persist($physician);

	    $practicesHasPhysicians = new PracticesHasPhysicians();
	    $practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Desert Sun Pediatrics")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Desert Sun Pediatrics")), "latitude" => "33.725156", "longitude" => "-111.977958")));
	    $manager->persist($practicesHasPhysicians);

	    $physicianHasSpecialties = new PhysiciansHasSpecialties();
	    $physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Pediatrics")));
	    $manager->persist($physicianHasSpecialties);

	    $manager->flush();


	    $physician = new Physicians();
	    $physician->setFirstName("Homan")->setLastName("Mostafavi");
	    $manager->persist($physician);

	    $practicesHasPhysicians = new PracticesHasPhysicians();
	    $practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Enticare, PC")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Enticare, PC")), "latitude" => "33.287458", "longitude" => "-111.75027")));
	    $manager->persist($practicesHasPhysicians);

	    $physicianHasSpecialties = new PhysiciansHasSpecialties();
	    $physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Otolaryngology")));
	    $manager->persist($physicianHasSpecialties);

	    $manager->flush();

	    $physician = new Physicians();
	    $physician->setFirstName("Brian")->setLastName("Trainor");
	    $manager->persist($physician);

	    $practicesHasPhysicians = new PracticesHasPhysicians();
	    $practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Enticare, PC")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Enticare, PC")), "latitude" => "33.287458", "longitude" => "-111.75027")));
	    $manager->persist($practicesHasPhysicians);

	    $physicianHasSpecialties = new PhysiciansHasSpecialties();
	    $physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Oral Maxillofacial")));
	    $manager->persist($physicianHasSpecialties);

	    $manager->flush();


	    // Eye Physicians and Surgeons of Arizona
	    $physician = new Physicians();
	    $physician->setFirstName("Goerge")->setLastName("Reiss");
	    $manager->persist($physician);

	    $practicesHasPhysicians = new PracticesHasPhysicians();
	    $practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Eye Physicians and Surgeons of Arizona")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Eye Physicians and Surgeons of Arizona")), "latitude" => "33.609291", "longitude" => "-112.201531")));
	    $manager->persist($practicesHasPhysicians);

	    $physicianHasSpecialties = new PhysiciansHasSpecialties();
	    $physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Ophthalmology")));
	    $manager->persist($physicianHasSpecialties);

	    $manager->flush();


	    // HonorHealth Gastroenterology - Thompson Peak
	    $physician = new Physicians();
	    $physician->setFirstName("Stacey")->setLastName("Dault");
	    $manager->persist($physician);

	    $practicesHasPhysicians = new PracticesHasPhysicians();
	    $practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Gastroenterology - Thompson Peak")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Gastroenterology - Thompson Peak")), "latitude" => "33.67300", "longitude" => "-111.92368")));
	    $manager->persist($practicesHasPhysicians);

	    $physicianHasSpecialties = new PhysiciansHasSpecialties();
	    $physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Family Medicine")));
	    $manager->persist($physicianHasSpecialties);

	    $manager->flush();


	    // HonorHealth Medical Group - East Tempe
	    $physician = new Physicians();
	    $physician->setFirstName("Karl")->setLastName("Espinosa");
	    $manager->persist($physician);

	    $practicesHasPhysicians = new PracticesHasPhysicians();
	    $practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Medical Group - East Tempe")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Medical Group - East Tempe")), "latitude" => "33.40660", "longitude" => "-111.90752")));
	    $manager->persist($practicesHasPhysicians);

	    $physicianHasSpecialties = new PhysiciansHasSpecialties();
	    $physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Family Medicine")));
	    $manager->persist($physicianHasSpecialties);

	    $manager->flush();


	    // HonorHealth Medical Group - McKellips
	    $physician = new Physicians();
	    $physician->setFirstName("Richard")->setLastName("Dobrusin");
	    $manager->persist($physician);

	    $practicesHasPhysicians = new PracticesHasPhysicians();
	    $practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Medical Group - McKellips")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Medical Group - McKellips")), "latitude" => "33.45207", "longitude" => "-111.80642")));
	    $manager->persist($practicesHasPhysicians);

	    $physicianHasSpecialties = new PhysiciansHasSpecialties();
	    $physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Family Medicine")));
	    $manager->persist($physicianHasSpecialties);

	    $manager->flush();


	    // HonorHealth Neurology - Shea
	    $physician = new Physicians();
	    $physician->setFirstName("Harvinder")->setLastName("Deogun");
	    $manager->persist($physician);

	    $practicesHasPhysicians = new PracticesHasPhysicians();
	    $practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Neurology - Shea")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "HonorHealth Neurology - Shea")), "latitude" => "33.58047", "longitude" => "-111.88277")));
	    $manager->persist($practicesHasPhysicians);

	    $physicianHasSpecialties = new PhysiciansHasSpecialties();
	    $physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Physical Medicine and Rehab")));
	    $manager->persist($physicianHasSpecialties);

	    $manager->flush();


	    // Horizon Eye Specialists and Lasik Center
	    $physician = new Physicians();
	    $physician->setFirstName("Jeffrey")->setLastName("Girardin");
	    $manager->persist($physician);

	    $practicesHasPhysicians = new PracticesHasPhysicians();
	    $practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Horizon Eye Specialists and Lasik Center")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Horizon Eye Specialists and Lasik Center")), "latitude" => "33.65290", "longitude" => "-111.92959")));
	    $manager->persist($practicesHasPhysicians);

	    $physicianHasSpecialties = new PhysiciansHasSpecialties();
	    $physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Optometrist")));
	    $manager->persist($physicianHasSpecialties);

	    $manager->flush();

	    $physician = new Physicians();
	    $physician->setFirstName("Kaci")->setLastName("Kramer");
	    $manager->persist($physician);

	    $practicesHasPhysicians = new PracticesHasPhysicians();
	    $practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Horizon Eye Specialists and Lasik Center")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Horizon Eye Specialists and Lasik Center")), "latitude" => "33.65290", "longitude" => "-111.92959")));
	    $manager->persist($practicesHasPhysicians);

	    $physicianHasSpecialties = new PhysiciansHasSpecialties();
	    $physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Optometrist")));
	    $manager->persist($physicianHasSpecialties);

	    $manager->flush();

	    $physician = new Physicians();
	    $physician->setFirstName("David")->setLastName("Rockwell");
	    $manager->persist($physician);

	    $practicesHasPhysicians = new PracticesHasPhysicians();
	    $practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Horizon Eye Specialists and Lasik Center")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Horizon Eye Specialists and Lasik Center")), "latitude" => "33.65290", "longitude" => "-111.92959")));
	    $manager->persist($practicesHasPhysicians);

	    $physicianHasSpecialties = new PhysiciansHasSpecialties();
	    $physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Optometrist")));
	    $manager->persist($physicianHasSpecialties);

	    $manager->flush();

	    $physician = new Physicians();
	    $physician->setFirstName("Derek")->setLastName("Jacobsen");
	    $manager->persist($physician);

	    $practicesHasPhysicians = new PracticesHasPhysicians();
	    $practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Horizon Eye Specialists and Lasik Center")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Horizon Eye Specialists and Lasik Center")), "latitude" => "33.65290", "longitude" => "-111.92959")));
	    $manager->persist($practicesHasPhysicians);

	    $physicianHasSpecialties = new PhysiciansHasSpecialties();
	    $physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Optometrist")));
	    $manager->persist($physicianHasSpecialties);

	    $manager->flush();


	    // Ironwood Physicians, PC
	    $physician = new Physicians();
	    $physician->setFirstName("Andrei")->setLastName("Balandin");
	    $manager->persist($physician);

	    $practicesHasPhysicians = new PracticesHasPhysicians();
	    $practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Ironwood Physicians, PC")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Ironwood Physicians, PC")), "latitude" => "33.58820", "longitude" => "-111.97649")));
	    $manager->persist($practicesHasPhysicians);

	    $physicianHasSpecialties = new PhysiciansHasSpecialties();
	    $physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Hematology-Oncology")));
	    $manager->persist($physicianHasSpecialties);

	    $manager->flush();

	    $physician = new Physicians();
	    $physician->setFirstName("Tejinder")->setLastName("Kaur");
	    $manager->persist($physician);

	    $practicesHasPhysicians = new PracticesHasPhysicians();
	    $practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Ironwood Physicians, PC")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Ironwood Physicians, PC")), "latitude" => "33.58820", "longitude" => "-111.97649")));
	    $manager->persist($practicesHasPhysicians);

	    $physicianHasSpecialties = new PhysiciansHasSpecialties();
	    $physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Hematology-Oncology")));
	    $manager->persist($physicianHasSpecialties);

	    $manager->flush();

	    $physician = new Physicians();
	    $physician->setFirstName("Leslie")->setLastName("Klein");
	    $manager->persist($physician);

	    $practicesHasPhysicians = new PracticesHasPhysicians();
	    $practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Ironwood Physicians, PC")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Ironwood Physicians, PC")), "latitude" => "33.58820", "longitude" => "-111.97649")));
	    $manager->persist($practicesHasPhysicians);

	    $physicianHasSpecialties = new PhysiciansHasSpecialties();
	    $physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Hematology-Oncology")));
	    $manager->persist($physicianHasSpecialties);

	    $manager->flush();


	    // Jeffrey Copoloff, PLLC
	    $physician = new Physicians();
	    $physician->setFirstName("Jeffrey")->setLastName("Copoloff");
	    $manager->persist($physician);

	    $practicesHasPhysicians = new PracticesHasPhysicians();
	    $practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Jeffrey Copoloff, PLLC")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Jeffrey Copoloff, PLLC")), "latitude" => "33.602249", "longitude" => "-112.263272")));
	    $manager->persist($practicesHasPhysicians);

	    $practicesHasPhysicians_2 = new PracticesHasPhysicians();
	    $practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Jeffrey Copoloff, PLLC")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Jeffrey Copoloff, PLLC")), "latitude" => "33.557086", "longitude" => "-111.890739")));
	    $manager->persist($practicesHasPhysicians_2);

	    $physicianHasSpecialties = new PhysiciansHasSpecialties();
	    $physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Podiatry")));
	    $manager->persist($physicianHasSpecialties);

	    $manager->flush();


        // Joseph P. Leonetti DPM PC
	    $physician = new Physicians();
	    $physician->setFirstName("Joseph")->setLastName("Leonetti");
	    $manager->persist($physician);

	    $practicesHasPhysicians = new PracticesHasPhysicians();
	    $practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Joseph P. Leonetti DPM PC")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Joseph P. Leonetti DPM PC")), "latitude" => "33.639552", "longitude" => "-111.994756")));
	    $manager->persist($practicesHasPhysicians);

	    $physicianHasSpecialties = new PhysiciansHasSpecialties();
	    $physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Podiatry")));
	    $manager->persist($physicianHasSpecialties);

	    $manager->flush();


        // MocDocUrogyn, PLLC
	    $physician = new Physicians();
	    $physician->setFirstName("Mohamed")->setLastName("Akl");
	    $manager->persist($physician);

	    $practicesHasPhysicians = new PracticesHasPhysicians();
	    $practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "MocDocUrogyn, PLLC")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "MocDocUrogyn, PLLC")), "latitude" => "33.573678", "longitude" => "-111.883732")));
	    $manager->persist($practicesHasPhysicians);

	    $physicianHasSpecialties = new PhysiciansHasSpecialties();
	    $physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Urogynecology")));
	    $manager->persist($physicianHasSpecialties);

	    $manager->flush();


        // NovaSpine Pain Institute
	    $physician = new Physicians();
	    $physician->setFirstName("Nikesh")->setLastName("Seth");
	    $manager->persist($physician);

	    $practicesHasPhysicians = new PracticesHasPhysicians();
	    $practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "NovaSpine Pain Institute")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "NovaSpine Pain Institute")), "latitude" => "33.660476", "longitude" => "-112.370097")));
	    $manager->persist($practicesHasPhysicians);

	    $physicianHasSpecialties = new PhysiciansHasSpecialties();
	    $physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Pain Management")));
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
