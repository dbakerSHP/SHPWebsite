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
class Version20160115182701 extends AbstractMigration implements ContainerAwareInterface
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

	    $physician = new Physicians();
	    $physician->setFirstName("Vismal")->setLastName("Verma");
	    $manager->persist($physician);

	    $practicesHasPhysicians = new PracticesHasPhysicians();
	    $practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "4C Medical Group")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "4C Medical Group")), "latitude" => "33.58693", "longitude" => "-111.92674")));
	    $manager->persist($practicesHasPhysicians);

	    $physicianHasSpecialties = new PhysiciansHasSpecialties();
	    $physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Hospitalist")));
	    $manager->persist($physicianHasSpecialties);

	    $manager->flush();


	    // Academic Urology and Urogynecology of Arizona
	    $practice = new Practices();
	    $practice->setPractice("Academic Urology and Urogynecology of Arizona");
	    $manager->persist($practice);
	    $manager->flush();

	    $practiceLocation = new PracticesLocations();
	    $practiceLocation->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Academic Urology and Urogynecology of Arizona")))->setAddress1("14044 W Camelback Rd.")->setAddress2("Ste. 118 and 216")->setCity("Litchfield Park")->setState("AZ")->setZip("85340")->setLatitude("33.509371")->setLongitude("-112.362134")->setPhone("(623) 547-2600");
	    $manager->persist($practiceLocation);
	    $manager->flush();


	    $physician = new Physicians();
	    $physician->setFirstName("Chandan")->setLastName("Kundavaram");
	    $manager->persist($physician);

	    $physician_2 = new Physicians();
	    $physician_2->setFirstName("David")->setLastName("Kaplan");
	    $manager->persist($physician_2);

	    $physician_3 = new Physicians();
	    $physician_3->setFirstName("Jennifer")->setLastName("Klauschie");
	    $manager->persist($physician_3);

	    $physician_4 = new Physicians();
	    $physician_4->setFirstName("Aaron")->setLastName("Latowsky");
	    $manager->persist($physician_4);

	    $physician_5 = new Physicians();
	    $physician_5->setFirstName("Amy")->setLastName("Schlaifer");
	    $manager->persist($physician_5);

	    $physician_6 = new Physicians();
	    $physician_6->setFirstName("Jeff")->setLastName("Stern");
	    $manager->persist($physician_6);

	    $physician_7 = new Physicians();
	    $physician_7->setFirstName("Keri")->setLastName("Wong");
	    $manager->persist($physician_7);

	    $practicesHasPhysicians = new PracticesHasPhysicians();
	    $practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Academic Urology and Urogynecology of Arizona")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Academic Urology and Urogynecology of Arizona")), "latitude" => "33.509371", "longitude" => "-112.362134")));
	    $manager->persist($practicesHasPhysicians);

	    $practicesHasPhysicians_2 = new PracticesHasPhysicians();
	    $practicesHasPhysicians_2->setPhysician($physician_2)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Academic Urology and Urogynecology of Arizona")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Academic Urology and Urogynecology of Arizona")), "latitude" => "33.509371", "longitude" => "-112.362134")));
	    $manager->persist($practicesHasPhysicians_2);

	    $practicesHasPhysicians_3 = new PracticesHasPhysicians();
	    $practicesHasPhysicians_3->setPhysician($physician_3)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Academic Urology and Urogynecology of Arizona")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Academic Urology and Urogynecology of Arizona")), "latitude" => "33.509371", "longitude" => "-112.362134")));
	    $manager->persist($practicesHasPhysicians_3);

	    $practicesHasPhysicians_4 = new PracticesHasPhysicians();
	    $practicesHasPhysicians_4->setPhysician($physician_4)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Academic Urology and Urogynecology of Arizona")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Academic Urology and Urogynecology of Arizona")), "latitude" => "33.509371", "longitude" => "-112.362134")));
	    $manager->persist($practicesHasPhysicians_4);

	    $practicesHasPhysicians_5 = new PracticesHasPhysicians();
	    $practicesHasPhysicians_5->setPhysician($physician_5)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Academic Urology and Urogynecology of Arizona")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Academic Urology and Urogynecology of Arizona")), "latitude" => "33.509371", "longitude" => "-112.362134")));
	    $manager->persist($practicesHasPhysicians_5);

	    $practicesHasPhysicians_6 = new PracticesHasPhysicians();
	    $practicesHasPhysicians_6->setPhysician($physician_6)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Academic Urology and Urogynecology of Arizona")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Academic Urology and Urogynecology of Arizona")), "latitude" => "33.509371", "longitude" => "-112.362134")));
	    $manager->persist($practicesHasPhysicians_6);

	    $practicesHasPhysicians_7 = new PracticesHasPhysicians();
	    $practicesHasPhysicians_7->setPhysician($physician_7)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Academic Urology and Urogynecology of Arizona")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Academic Urology and Urogynecology of Arizona")), "latitude" => "33.509371", "longitude" => "-112.362134")));
	    $manager->persist($practicesHasPhysicians_7);

	    $physicianHasSpecialties = new PhysiciansHasSpecialties();
	    $physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Urology")));
	    $manager->persist($physicianHasSpecialties);

	    $physicianHasSpecialties_2 = new PhysiciansHasSpecialties();
	    $physicianHasSpecialties_2->setPhysician($physician_2)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Urology")));
	    $manager->persist($physicianHasSpecialties_2);

	    $physicianHasSpecialties_3 = new PhysiciansHasSpecialties();
	    $physicianHasSpecialties_3->setPhysician($physician_3)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Urogynecology")));
	    $manager->persist($physicianHasSpecialties_3);

	    $physicianHasSpecialties_4 = new PhysiciansHasSpecialties();
	    $physicianHasSpecialties_4->setPhysician($physician_4)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Urology")));
	    $manager->persist($physicianHasSpecialties_4);

	    $physicianHasSpecialties_5 = new PhysiciansHasSpecialties();
	    $physicianHasSpecialties_5->setPhysician($physician_5)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Urology")));
	    $manager->persist($physicianHasSpecialties_5);

	    $physicianHasSpecialties_6 = new PhysiciansHasSpecialties();
	    $physicianHasSpecialties_6->setPhysician($physician_6)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Urology")));
	    $manager->persist($physicianHasSpecialties_6);

	    $physicianHasSpecialties_7 = new PhysiciansHasSpecialties();
	    $physicianHasSpecialties_7->setPhysician($physician_7)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Urology")));
	    $manager->persist($physicianHasSpecialties_7);

	    $manager->flush();


	    // Arizona Associates for Reproductive Health
	    $practice = new Practices();
	    $practice->setPractice("Arizona Associates for Reproductive Health");
	    $manager->persist($practice);
	    $manager->flush();

	    $practiceLocation = new PracticesLocations();
	    $practiceLocation->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Associates for Reproductive Health")))->setAddress1("8573 E. Princess Dr.")->setAddress2("Ste. 101")->setCity("Scottsdale")->setState("AZ")->setZip("85255")->setLatitude("33.645301")->setLongitude("-111.894348")->setPhone("(480) 946-9900");
	    $manager->persist($practiceLocation);
	    $manager->flush();


	    $physician = new Physicians();
	    $physician->setFirstName("Ketan")->setLastName("Patel");
	    $manager->persist($physician);

	    $practicesHasPhysicians = new PracticesHasPhysicians();
	    $practicesHasPhysicians->setPhysician($physician)->setPractice($manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Associates for Reproductive Health")))->setPracticeLocation($manager->getRepository("SiteBundle:PracticesLocations")->findOneBy(array("practice" => $manager->getRepository("SiteBundle:Practices")->findOneBy(array("practice" => "Arizona Associates for Reproductive Health")), "latitude" => "33.645301", "longitude" => "-111.894348")));
	    $manager->persist($practicesHasPhysicians);

	    $physicianHasSpecialties = new PhysiciansHasSpecialties();
	    $physicianHasSpecialties->setPhysician($physician)->setSpecialty($manager->getRepository("SiteBundle:Specialties")->findOneBy(array("specialty" => "Fertility")));
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
