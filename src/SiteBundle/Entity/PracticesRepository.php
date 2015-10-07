<?php

namespace SiteBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * PracticesRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class PracticesRepository extends EntityRepository
{

	public function getAllPractices() {
		$queryBuilder = $this->getEntityManager()->createQueryBuilder("practices", "practices_locations");
		$queryBuilder->select([
			"practices.id as practice_id",
			"practices_locations.id as location_id",
			"practices.practice",
			"practices_locations.address1",
			"practices_locations.address2",
			"practices_locations.city",
			"practices_locations.state",
			"practices_locations.zip",
			"practices_locations.phone",
			"practices_locations.latitude",
			"practices_locations.longitude",
		])
			->from("SiteBundle:Practices", "practices")
			->where("practices.deletedDate IS NULL")
			->leftJoin("SiteBundle:PracticesLocations", "practices_locations")
			->where("practices.id = practices_locations.practice")
		;
		return $queryBuilder->getQuery()->getResult();
	}

	public function getAllPracticesByZipRange($postalCode, $distance) {
		$queryBuilder = $this->getEntityManager()->createQueryBuilder("practices", "practices_locations");
		$queryBuilder->select([
			"practices.id as practice_id",
			"practices_locations.id as location_id",
			"practices.practice",
			"practices_locations.address1",
			"practices_locations.address2",
			"practices_locations.city",
			"practices_locations.state",
			"practices_locations.zip",
			"practices_locations.phone",
			"practices_locations.latitude",
			"practices_locations.longitude",
		])
			->from("SiteBundle:Practices", "practices")
			->where("practices.deletedDate IS NULL")
			->leftJoin("SiteBundle:PracticesLocations", "practices_locations")
			->where("practices.id = practices_locations.practice")
		;
		return $queryBuilder->getQuery()->getResult();
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
