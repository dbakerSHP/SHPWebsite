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


/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20160119103147 extends AbstractMigration implements ContainerAwareInterface
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
	     * Add Practices / Locations
	     */

        // OneSource Senior Healthcare PLLC
        $practice = new Practices();
        $practice->setPractice("OneSource Senior Healthcare PLLC");
        $manager->persist($practice);
        $manager->flush();

	    $practiceLocation = new PracticesLocations();
	    $practiceLocation->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "OneSource Senior Healthcare PLLC")))->setAddress1("7126 E Osborn Rd.")->setAddress2("Ste. 2026")->setCity("Scottsdale")->setState("AZ")->setZip("85251")->setLatitude("33.488096")->setLongitude("-111.927931")->setPhone("(312) 953-3952");
	    $manager->persist($practiceLocation);
	    $manager->flush();


        // Precision Surgical LLC
        $practice = new Practices();
        $practice->setPractice("Precision Surgical LLC");
        $manager->persist($practice);
        $manager->flush();

	    $practiceLocation = new PracticesLocations();
	    $practiceLocation->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Precision Surgical LLC")))->setAddress1("8776 E Shea Blvd.")->setAddress2("Ste. 106 - 610")->setCity("Scottsdale")->setState("AZ")->setZip("85260")->setLatitude("33.583763")->setLongitude("-111.892531")->setPhone("(602) 559-9310");
	    $manager->persist($practiceLocation);
	    $manager->flush();


        // Randall K. Tozer, M.D., P.C.
        $practice = new Practices();
        $practice->setPractice("Randall K. Tozer, M.D., P.C.");
        $manager->persist($practice);
        $manager->flush();

	    $practiceLocation = new PracticesLocations();
	    $practiceLocation->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Randall K. Tozer, M.D., P.C.")))->setAddress1("9811 N. 95th St.")->setAddress2("Ste. 101")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.570661")->setLongitude("-111.875093")->setPhone("(480) 947-4493");
	    $manager->persist($practiceLocation);
	    $manager->flush();


        // Retinal Consultants of Arizona, LTD
        $practice = new Practices();
        $practice->setPractice("Retinal Consultants of Arizona, LTD");
        $manager->persist($practice);
        $manager->flush();

	    $practiceLocation = new PracticesLocations();
	    $practiceLocation->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Retinal Consultants of Arizona, LTD")))->setAddress1("13943 N. 91st Ave.")->setAddress2("Bldg. D - 101")->setCity("Peoria")->setState("AZ")->setZip("85381")->setLatitude("33.610297")->setLongitude("-112.254215")->setPhone("(602) 222-2221");
	    $manager->persist($practiceLocation);
	    $manager->flush();

	    $practiceLocation_2 = new PracticesLocations();
	    $practiceLocation_2->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Retinal Consultants of Arizona, LTD")))->setAddress1("1101 E. Missouri Ave.")->setCity("Phoenix")->setState("AZ")->setZip("85001")->setLatitude("33.516114")->setLongitude("-112.058119")->setPhone("(602) 222-2221");
	    $manager->persist($practiceLocation_2);
	    $manager->flush();

	    $practiceLocation_3 = new PracticesLocations();
	    $practiceLocation_3->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Retinal Consultants of Arizona, LTD")))->setAddress1("2152 S. Vineyard")->setAddress2("Bldg. 12 Ste. 139")->setCity("Mesa")->setState("AZ")->setZip("85210")->setLatitude("33.375516")->setLongitude("-111.844767")->setPhone("(602) 222-2221");
	    $manager->persist($practiceLocation_3);
	    $manager->flush();


        // Risser Thomas Eye Clinic, Ltd
        $practice = new Practices();
        $practice->setPractice("Risser Thomas Eye Clinic, Ltd");
        $manager->persist($practice);
        $manager->flush();

	    $practiceLocation = new PracticesLocations();
	    $practiceLocation->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Risser Thomas Eye Clinic, Ltd")))->setAddress1("9250 N 3rd St.")->setCity("Phoenix")->setState("AZ")->setZip("85020")->setLatitude("33.570224")->setLongitude("-112.070023")->setPhone("(602) 944-3347");
	    $manager->persist($practiceLocation);
	    $manager->flush();


        // Scottsdale Center for Sight
        $practice = new Practices();
        $practice->setPractice("Scottsdale Center for Sight");
        $manager->persist($practice);
        $manager->flush();

	    $practiceLocation = new PracticesLocations();
	    $practiceLocation->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Scottsdale Center for Sight")))->setAddress1("14275 N 87th St.")->setAddress2("Ste. 112")->setCity("Scottsdale")->setState("AZ")->setZip("85308")->setLatitude("33.615225")->setLongitude("-111.89236")->setPhone("(480) 483-8882");
	    $manager->persist($practiceLocation);
	    $manager->flush();


        // Sonoran Spine
        $practice = new Practices();
        $practice->setPractice("Sonoran Spine");
        $manager->persist($practice);
        $manager->flush();

	    $practiceLocation = new PracticesLocations();
	    $practiceLocation->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Sonoran Spine")))->setAddress1("1255 W. Rio Salado Pkwy.")->setAddress2("Ste. 107")->setCity("Tempe")->setState("AZ")->setZip("85281")->setLatitude("33.430224")->setLongitude("-111.956708")->setPhone("(480) 962-0011");
	    $manager->persist($practiceLocation);
	    $manager->flush();


	    // Southwest Skin Specialists
	    $practice = new Practices();
	    $practice->setPractice("Southwest Skin Specialists");
	    $manager->persist($practice);
	    $manager->flush();

	    $practiceLocation = new PracticesLocations();
	    $practiceLocation->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Southwest Skin Specialists")))->setAddress1("10200 N. 92nd St.")->setAddress2("Ste. 205")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.578324")->setLongitude("-111.881363")->setPhone("(602) 494-1817");
	    $manager->persist($practiceLocation);
	    $manager->flush();


	    // Thompson Peak Internal Medicine
	    $practice = new Practices();
	    $practice->setPractice("Thompson Peak Internal Medicine");
	    $manager->persist($practice);
	    $manager->flush();

	    $practiceLocation = new PracticesLocations();
	    $practiceLocation->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Thompson Peak Internal Medicine")))->setAddress1("7010 E Chauncey Ln.")->setAddress2("Ste. 145")->setCity("Phoenix")->setState("AZ")->setZip("85054")->setLatitude("33.652013")->setLongitude("-111.929718")->setPhone("(480) 502-5533");
	    $manager->persist($practiceLocation);
	    $manager->flush();


	    // Thoracic Cardiovascular Associates
	    $practice = new Practices();
	    $practice->setPractice("Thoracic Cardiovascular Associates");
	    $manager->persist($practice);
	    $manager->flush();

	    $practiceLocation = new PracticesLocations();
	    $practiceLocation->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Thoracic Cardiovascular Associates")))->setAddress1("16601 N. 40th St.")->setCity("Phoenix")->setState("AZ")->setZip("85032")->setLatitude("33.637637")->setLongitude("-111.99549")->setPhone("(602) 264-7741");
	    $manager->persist($practiceLocation);
	    $manager->flush();


	    // Valley Pain Consultants
	    $practiceLocation = new PracticesLocations();
	    $practiceLocation->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Valley Pain Consultants")))->setAddress1("1850 North Central Ave.")->setAddress2("Ste. 1600")->setCity("Phoenix")->setState("AZ")->setZip("85004")->setLatitude("33.468450")->setLongitude("-112.074908")->setPhone("(480) 467-2273");
	    $manager->persist($practiceLocation);
	    $manager->flush();


	    /*
	     * Add Physicians / Physician Specialties
	     */

	    // OneSource Senior Healthcare PLLC
	    $physician = new Physicians();
	    $physician->setFirstName("Marie")->setLastName("Paul");
	    $manager->persist($physician);

	    $practicesHasPhysicians = new PracticesHasPhysicians();
	    $practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "OneSource Senior Healthcare PLLC")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "OneSource Senior Healthcare PLLC")), "latitude" => "33.488096", "longitude" => "-111.927931")));
	    $manager->persist($practicesHasPhysicians);

	    $physicianHasSpecialties = new PhysiciansHasSpecialties();
	    $physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Podiatry")));
	    $manager->persist($physicianHasSpecialties);

	    $manager->flush();


	    // Precision Surgical LLC
	    $physician = new Physicians();
	    $physician->setFirstName("Richard")->setLastName("Chamberlain");
	    $manager->persist($physician);

	    $practicesHasPhysicians = new PracticesHasPhysicians();
	    $practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Precision Surgical LLC")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Precision Surgical LLC")), "latitude" => "33.583763", "longitude" => "-111.892531")));
	    $manager->persist($practicesHasPhysicians);

	    $physicianHasSpecialties = new PhysiciansHasSpecialties();
	    $physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "General Surgery")));
	    $manager->persist($physicianHasSpecialties);

	    $manager->flush();


	    // Randall K. Tozer, M.D., P.C.
	    $physician = new Physicians();
	    $physician->setFirstName("Randall")->setLastName("Tozer");
	    $manager->persist($physician);

	    $practicesHasPhysicians = new PracticesHasPhysicians();
	    $practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Randall K. Tozer, M.D., P.C.")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Randall K. Tozer, M.D., P.C.")), "latitude" => "33.570661", "longitude" => "-111.875093")));
	    $manager->persist($practicesHasPhysicians);

	    $physicianHasSpecialties = new PhysiciansHasSpecialties();
	    $physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Ophthalmology")));
	    $manager->persist($physicianHasSpecialties);

	    $manager->flush();


	    // Retinal Consultants of Arizona, LTD
	    $physician = new Physicians();
	    $physician->setFirstName("Edward")->setLastName("Quinlan");
	    $manager->persist($physician);

	    // 91st Ave
	    $practicesHasPhysicians = new PracticesHasPhysicians();
	    $practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Retinal Consultants of Arizona, LTD")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Retinal Consultants of Arizona, LTD")), "latitude" => "33.610297", "longitude" => "-112.254215")));
	    $manager->persist($practicesHasPhysicians);

	    // Missouri Ave
	    $practicesHasPhysicians_2 = new PracticesHasPhysicians();
	    $practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Retinal Consultants of Arizona, LTD")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Retinal Consultants of Arizona, LTD")), "latitude" => "33.516114", "longitude" => "-112.058119")));
	    $manager->persist($practicesHasPhysicians_2);

	    $physicianHasSpecialties = new PhysiciansHasSpecialties();
	    $physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Ophthalmology")));
	    $manager->persist($physicianHasSpecialties);

	    $manager->flush();

	    $physician = new Physicians();
	    $physician->setFirstName("Derek")->setLastName("Kunimoto");
	    $manager->persist($physician);

	    // Missouri Ave
	    $practicesHasPhysicians = new PracticesHasPhysicians();
	    $practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Retinal Consultants of Arizona, LTD")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Retinal Consultants of Arizona, LTD")), "latitude" => "33.516114", "longitude" => "-112.058119")));
	    $manager->persist($practicesHasPhysicians);

	    // Vinyard
	    $practicesHasPhysicians_2 = new PracticesHasPhysicians();
	    $practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Retinal Consultants of Arizona, LTD")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Retinal Consultants of Arizona, LTD")), "latitude" => "33.375516", "longitude" => "-111.844767")));
	    $manager->persist($practicesHasPhysicians_2);

	    $physicianHasSpecialties = new PhysiciansHasSpecialties();
	    $physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Ophthalmology")));
	    $manager->persist($physicianHasSpecialties);

	    $manager->flush();

	    $physician = new Physicians();
	    $physician->setFirstName("Pravin")->setLastName("Dugel");
	    $manager->persist($physician);

	    // Missouri Ave
	    $practicesHasPhysicians = new PracticesHasPhysicians();
	    $practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Retinal Consultants of Arizona, LTD")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Retinal Consultants of Arizona, LTD")), "latitude" => "33.516114", "longitude" => "-112.058119")));
	    $manager->persist($practicesHasPhysicians);

	    $physicianHasSpecialties = new PhysiciansHasSpecialties();
	    $physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Ophthalmology")));
	    $manager->persist($physicianHasSpecialties);

	    $manager->flush();

	    $physician = new Physicians();
	    $physician->setFirstName("Karim")->setLastName("Jamal");
	    $manager->persist($physician);

	    // Vinyard
	    $practicesHasPhysicians = new PracticesHasPhysicians();
	    $practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Retinal Consultants of Arizona, LTD")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Retinal Consultants of Arizona, LTD")), "latitude" => "33.375516", "longitude" => "-111.844767")));
	    $manager->persist($practicesHasPhysicians);

	    $physicianHasSpecialties = new PhysiciansHasSpecialties();
	    $physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Ophthalmology")));
	    $manager->persist($physicianHasSpecialties);

	    $manager->flush();

	    $physician = new Physicians();
	    $physician->setFirstName("Milad")->setLastName("Haak");
	    $manager->persist($physician);

	    // Missouri Ave
	    $practicesHasPhysicians = new PracticesHasPhysicians();
	    $practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Retinal Consultants of Arizona, LTD")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Retinal Consultants of Arizona, LTD")), "latitude" => "33.516114", "longitude" => "-112.058119")));
	    $manager->persist($practicesHasPhysicians);

	    $physicianHasSpecialties = new PhysiciansHasSpecialties();
	    $physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Ophthalmology")));
	    $manager->persist($physicianHasSpecialties);

	    $manager->flush();

	    $physician = new Physicians();
	    $physician->setFirstName("Mark")->setLastName("Barakat");
	    $manager->persist($physician);

	    // Missouri Ave
	    $practicesHasPhysicians = new PracticesHasPhysicians();
	    $practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Retinal Consultants of Arizona, LTD")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Retinal Consultants of Arizona, LTD")), "latitude" => "33.516114", "longitude" => "-112.058119")));
	    $manager->persist($practicesHasPhysicians);

	    $physicianHasSpecialties = new PhysiciansHasSpecialties();
	    $physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Ophthalmology")));
	    $manager->persist($physicianHasSpecialties);

	    $manager->flush();

	    $physician = new Physicians();
	    $physician->setFirstName("Matthew")->setLastName("Whitmer");
	    $manager->persist($physician);

	    // Missouri Ave
	    $practicesHasPhysicians = new PracticesHasPhysicians();
	    $practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Retinal Consultants of Arizona, LTD")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Retinal Consultants of Arizona, LTD")), "latitude" => "33.516114", "longitude" => "-112.058119")));
	    $manager->persist($practicesHasPhysicians);

	    // Vinyard
	    $practicesHasPhysicians_2 = new PracticesHasPhysicians();
	    $practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Retinal Consultants of Arizona, LTD")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Retinal Consultants of Arizona, LTD")), "latitude" => "33.375516", "longitude" => "-111.844767")));
	    $manager->persist($practicesHasPhysicians_2);

	    $physicianHasSpecialties = new PhysiciansHasSpecialties();
	    $physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Ophthalmology")));
	    $manager->persist($physicianHasSpecialties);

	    $manager->flush();

	    $physician = new Physicians();
	    $physician->setFirstName("Sachin")->setLastName("Mehta");
	    $manager->persist($physician);

	    // Missouri Ave
	    $practicesHasPhysicians = new PracticesHasPhysicians();
	    $practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Retinal Consultants of Arizona, LTD")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Retinal Consultants of Arizona, LTD")), "latitude" => "33.516114", "longitude" => "-112.058119")));
	    $manager->persist($practicesHasPhysicians);

	    // Vinyard
	    $practicesHasPhysicians_2 = new PracticesHasPhysicians();
	    $practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Retinal Consultants of Arizona, LTD")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Retinal Consultants of Arizona, LTD")), "latitude" => "33.375516", "longitude" => "-111.844767")));
	    $manager->persist($practicesHasPhysicians_2);

	    $physicianHasSpecialties = new PhysiciansHasSpecialties();
	    $physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Ophthalmology")));
	    $manager->persist($physicianHasSpecialties);

	    $manager->flush();

	    $physician = new Physicians();
	    $physician->setFirstName("David")->setLastName("Goldberg");
	    $manager->persist($physician);

	    // Missouri Ave
	    $practicesHasPhysicians = new PracticesHasPhysicians();
	    $practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Retinal Consultants of Arizona, LTD")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Retinal Consultants of Arizona, LTD")), "latitude" => "33.516114", "longitude" => "-112.058119")));
	    $manager->persist($practicesHasPhysicians);

	    // 91st Ave
	    $practicesHasPhysicians_2 = new PracticesHasPhysicians();
	    $practicesHasPhysicians_2->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Retinal Consultants of Arizona, LTD")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Retinal Consultants of Arizona, LTD")), "latitude" => "33.610297", "longitude" => "-112.254215")));
	    $manager->persist($practicesHasPhysicians_2);

	    $physicianHasSpecialties = new PhysiciansHasSpecialties();
	    $physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Ophthalmology")));
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
