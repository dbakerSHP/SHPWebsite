<?php

namespace SiteBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * PracticesHasPhysiciansRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class PracticesHasPhysiciansRepository extends EntityRepository
{

	public function getPracticebyLocationId($practiceId, $practiceLocationId) {
		$queryBuilder = $this->getEntityManager()->createQueryBuilder();
		$queryBuilder->select(
			"physicians.firstName",
			"physicians.lastName"
		)
			->from("SiteBundle:PracticesHasPhysicians", "practices_has_physicians")
			->leftJoin("SiteBundle:Practices", "practices", "WITH", "practices.id = practices_has_physicians.practiceId")
			->leftJoin("SiteBundle:PracticesLocations", "practices_locations", "WITH", "practices_locations.id = practices_has_physicians.practiceLocationId")
			->leftJoin("SiteBundle:Physicians", "physicians", "WITH", "physicians.id = practices_has_physicians.physicianId")
			->where("practices_has_physicians.practiceId = :practices_id")
			->andWhere("practices_has_physicians.practiceLocationId = :practice_location_id")
			->setParameters(
				array(
					"practices_id" => $practiceId,
					"practice_location_id" => $practiceLocationId
				)
			)
		;

		return $queryBuilder->getQuery()->getResult();
	}

}
