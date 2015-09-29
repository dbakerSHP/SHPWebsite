<?php
/**
 * Created by PhpStorm.
 * User: jstgermain
 * Date: 9/24/15
 * Time: 2:22 PM
 */

namespace SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class PracticesHasPhysicians
 *
 * @ORM\Table(name="practices_has_physicians", uniqueConstraints={@ORM\UniqueConstraint(name="id_UNIQUE", columns={"id"})})
 * @ORM\Entity(repositoryClass="")
 */
class PracticesHasPhysicians
{
	/**
	 * @var integer
	 *
	 * @ORM\ID
	 * @ORM\Column(name="id", type="integer")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;

	/**
	 * @var \SiteBundle\Entity\Practices
	 *
	 * @ORM\ManyToOne(targetEntity="SiteBundle\Entity\Practices")
	 * @ORM\JoinColumns({
	 * 	@ORM\JoinColumn(name="practice_id", referencedColumnName="id")
	 * })
	 */
	private $practiceId;

	/**
	 * @var \SiteBundle\Entity\PracticesLocations
	 *
	 * @ORM\ManyToOne(targetEntity="SiteBundle\Entity\PracticesLocations")
	 * @ORM\JoinColumns({
	 * 	@ORM\JoinColumn(name="practice_location_id", referencedColumnName="id")
	 * })
	 */
	private $practiceLocationId;

	/**
	 * @var \SiteBundle\Entity\Physicians
	 *
	 * @ORM\ManyToOne(targetEntity="SiteBundle\Entity\Physicians")
	 * @ORM\JoinColumns({
	 *	@ORM\JoinColumn(name="physician_id", referencedColumnName="id")
	 * })
	 */
	private $physicianId;

	/**
	 * @return int
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * @param int $id
	 * @return PracticesHasPhysicians
	 */
	public function setId($id)
	{
		$this->id = $id;

		return $this;
	}

	/**
	 * @return Practices
	 */
	public function getPracticeId()
	{
		return $this->practiceId;
	}

	/**
	 * Set practice
	 *
	 * @param \SiteBundle\Entity\Practices $practiceId
	 * @return PracticesHasPhysicians
	 */
	public function setPracticeId(\SiteBundle\Entity\Practices $practiceId)
	{
		$this->practiceId = $practiceId;

		return $this;
	}

	/**
	 * @return PracticesLocations
	 */
	public function getPracticeLocationId()
	{
		return $this->practiceLocationId;
	}

	/**
	 * Set practice location
	 *
	 * @param \SiteBundle\Entity\PracticesLocations $practiceLocationId
	 * @return PracticesLocations
	 */
	public function setPracticeLocationId(\SiteBundle\Entity\PracticesLocations $practiceLocationId)
	{
		$this->practiceLocationId = $practiceLocationId;

		return $this;
	}

	/**
	 * @return Physicians
	 */
	public function getPhysicianId()
	{
		return $this->physicianId;
	}

	/**
	 * Set physician
	 *
	 * @param \SiteBundle\Entity\Physicians $physicianId
	 * @return PracticesHasPhysicians
	 */
	public function setPhysicianId(\SiteBundle\Entity\Physicians $physicianId)
	{
		$this->physicianId = $physicianId;

		return $this;
	}
}