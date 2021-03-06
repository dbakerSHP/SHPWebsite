<?php

namespace SiteBundle\Entity;

use Doctrine\ORM\EntityRepository;
use FOS\RestBundle\Request\ParamFetcher;

/**
 * PracticesRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class PracticesRepository extends EntityRepository
{

	public function getAllPractices(ParamFetcher $paramFetcher) {
//		echo $paramFetcher->get ('specialty'); die;
		$queryBuilder = $this->getEntityManager()->createQueryBuilder();
		$queryBuilder->select([
			"practice.id as practice_id",
			"location.id as location_id",
			"practice.practice",
			"location.address1",
			"location.address2",
			"location.city",
			"location.state",
			"location.zip",
			"location.phone",
			"location.latitude",
			"location.longitude",
			"physician.id as physician_id",
			"CONCAT(physician.firstName, ' ', physician.lastName) as full_name",
			"specialties.specialty",
		]);
		if ($paramFetcher->get('postal_code')) {
			$queryBuilder->addSelect([
				"( 3959 * acos( cos( radians( postal_codes.latitude ) ) * cos( radians( location.latitude ) ) * cos( radians( location.longitude ) - radians( postal_codes.longitude ) ) + sin( radians( postal_codes.latitude ) ) * sin( radians( location.latitude ) ) ) ) AS distance ",
			]);
		}
		$queryBuilder->from("SiteBundle:Practices", "practice")
			->where("practice.deletedDate IS NULL")
			->leftJoin("SiteBundle:PracticesLocations", "location", "WITH", "practice.id = location.practice")
			->leftJoin("SiteBundle:PracticesHasPhysicians", "xref_practice_physicians", "WITH", "practice.id = xref_practice_physicians.practice and location.id = xref_practice_physicians.practiceLocation")
			->leftJoin("SiteBundle:Physicians", "physician", "WITH", "physician.id = xref_practice_physicians.physician")
			->leftJoin("SiteBundle:PhysiciansHasSpecialties", "xref_specialties", "WITH", "physician.id = xref_specialties.physician")
			->leftJoin("SiteBundle:Specialties", "specialties", "WITH", "specialties.id = xref_specialties.specialty")
		;
		if ($paramFetcher->get('postal_code')) {
			$queryBuilder->leftJoin ("SiteBundle:PostalCodes", "postal_codes", "WITH", "postal_codes.postalCode = :postalCode")
				->setParameter("postalCode", $paramFetcher->get('postal_code'))
			;
//			if ($paramFetcher->get('location_distance')) {
//				$queryBuilder->groupBy("distance")
//					->having("distance <= :locationDistance")
//					->setParameter("locationDistance", $paramFetcher->get('location_distance'))
//				;
//			}
		}
		$queryBuilder->andWhere("physician.deletedDate IS NULL");
		if ($paramFetcher->get('pcp')) {
			$queryBuilder->andWhere ("specialties.specialty = 'family medicine' OR specialties.specialty = 'internal medicine'");
		}
		if ($paramFetcher->get('practice')) {
			$queryBuilder->andWhere ($queryBuilder->expr()->like("practice.practice", "'%" . $paramFetcher->get('practice') . "%'"));
		}
		if ($paramFetcher->get('physician')) {
			$queryBuilder->andWhere ($queryBuilder->expr()->like("CONCAT(physician.firstName, ' ', physician.lastName)", "'%" . $paramFetcher->get('physician') . "%'"));
		}
		if ($paramFetcher->get('specialty')) {
			$queryBuilder->andWhere ("specialties.id = :specialtyId")
				->setParameter("specialtyId", $paramFetcher->get('specialty'))
			;
		}
		if ($paramFetcher->get('city')) {
			$queryBuilder->andWhere ($queryBuilder->expr()->like("location.city", "'%" . $paramFetcher->get('city') . "%'"));
		}
		if ($paramFetcher->get('postal_code')) {
			$queryBuilder->orderBy("distance", "ASC");
		} else {
			$queryBuilder->orderBy("practice.practice", "ASC");
		}
//		echo $queryBuilder;
		return $queryBuilder->distinct()->getQuery()->getResult();
	}


	public function getAllPracticesWithZipRange($postalCode = null) {
		$queryBuilder = $this->getEntityManager()->createQueryBuilder();
		$queryBuilder->select([
			"practice.id as practice_id",
			"location.id as location_id",
			"practice.practice",
			"location.address1",
			"location.address2",
			"location.city",
			"location.state",
			"location.zip",
			"location.phone",
			"location.latitude",
			"location.longitude",
			"physician.id as physician_id",
			"physician.firstName as first_name",
			"physician.lastName as last_name",
			"specialties.specialty",
			"( 3959 * acos( cos( radians( postal_codes.latitude ) ) * cos( radians( location.latitude ) ) * cos( radians( location.longitude ) - radians( postal_codes.longitude ) ) + sin( radians( postal_codes.latitude ) ) * sin( radians( location.latitude ) ) ) ) AS distance ",
		])
			->from("SiteBundle:Practices", "practice")
			->leftJoin("SiteBundle:PracticesLocations", "location", "WITH", "practice.id = location.practice")
			->leftJoin("SiteBundle:PracticesHasPhysicians", "xref_practice_physicians", "WITH", "practice.id = xref_practice_physicians.practice and location.id = xref_practice_physicians.practiceLocation")
			->leftJoin("SiteBundle:Physicians", "physician", "WITH", "physician.id = xref_practice_physicians.physician")
			->leftJoin("SiteBundle:PhysiciansHasSpecialties", "xref_specialties", "WITH", "physician.id = xref_specialties.physician")
			->leftJoin("SiteBundle:Specialties", "specialties", "WITH", "specialties.id = xref_specialties.specialty")
			->leftJoin("SiteBundle:PostalCodes", "postal_codes", "WITH", "postal_codes.postalCode = :postalCode")
			->where("practice.deletedDate IS NULL")
			->orderBy("distance", "ASC")
			->setParameter("postalCode", $postalCode)
		;
		return $queryBuilder->distinct()->getQuery()->getResult();
	}

	public function getAllPracticesAndPhysicians() {
		$queryBuilder = $this->getEntityManager()->createQueryBuilder();
		$queryBuilder->select([
			"practices_locations", "physicians"
		])
			->from("SiteBundle:PracticesHasPhysicians", "practices_has_physicians")
			->leftJoin("SiteBundle:Practices", "practices", "WITH", "practices.id = practices_has_physicians.practice")
			->leftJoin("SiteBundle:PracticesLocations", "practices_locations", "WITH", "practices_locations.id = practices_has_physicians.practiceLocation")
			->leftJoin("SiteBundle:Physicians", "physicians", "WITH", "physicians.id = practices_has_physicians.physician")
			->groupBy("physicians.id, practices_locations.practice")
		;

		return $queryBuilder->distinct()->getQuery()->getResult();
	}

}
