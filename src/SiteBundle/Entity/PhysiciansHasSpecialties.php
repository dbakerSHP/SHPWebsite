<?php
/**
 * Created by PhpStorm.
 * User: jstgermain
 * Date: 9/24/15
 * Time: 2:54 PM
 */

namespace SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class PhysiciansHasSpecialties
 *
 * @ORM\Table(name="physicians_has_specialties", uniqueConstraints={@ORM\UniqueConstraint(name="id_UNIQUE", columns={"id"})})
 * @ORM\Entity(repositoryClass="")
 */
class PhysiciansHasSpecialties
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
	 * @var \SiteBundle\Entity\Physicians
	 *
	 * @ORM\ManyToOne(targetEntity="SiteBundle\Entity\Physicians")
	 * @ORM\JoinColumns({
	 *	@ORM\JoinColumn(name="physician_id", referencedColumnName="id")
	 * })
	 */
	private $physicianId;

	/**
	 * @var \SiteBundle\Entity\Specialties
	 *
	 * @ORM\ManyToOne(targetEntity="SiteBundle\Entity\Specialties")
	 * @ORM\JoinColumns({
	 *	@ORM\JoinColumn(name="specialty_id", referencedColumnName="id")
	 * })
	 */
	private $specialtyId;

	/**
	 * @return int
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * @param int $id
	 * @return PhysiciansHasSpecialties
	 */
	public function setId($id)
	{
		$this->id = $id;

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
	 * @return PhysiciansHasSpecialties
	 */
	public function setPhysicianId(\SiteBundle\Entity\Physicians $physicianId)
	{
		$this->physicianId = $physicianId;

		return $this;
	}

	/**
	 * @return Specialties
	 */
	public function getSpecialtyId()
	{
		return $this->specialtyId;
	}

	/**
	 * Set specialty
	 *
	 * @param \SiteBundle\Entity\Specialties $specialtyId
	 * @return PhysiciansHasSpecialties
	 */
	public function setSpecialtyId(\SiteBundle\Entity\Specialties $specialtyId)
	{
		$this->specialtyId = $specialtyId;

		return $this;
	}
}