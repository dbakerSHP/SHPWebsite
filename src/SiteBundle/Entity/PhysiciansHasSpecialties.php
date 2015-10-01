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
	private $physician;

	/**
	 * @var \SiteBundle\Entity\Specialties
	 *
	 * @ORM\ManyToOne(targetEntity="SiteBundle\Entity\Specialties")
	 * @ORM\JoinColumns({
	 *	@ORM\JoinColumn(name="specialty_id", referencedColumnName="id")
	 * })
	 */
	private $specialty;

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
	public function getPhysician()
	{
		return $this->physician;
	}

	/**
	 * Set physician
	 *
	 * @param \SiteBundle\Entity\Physicians $physician
	 * @return PhysiciansHasSpecialties
	 */
	public function setPhysician(\SiteBundle\Entity\Physicians $physician)
	{
		$this->physician = $physician;

		return $this;
	}

	/**
	 * @return Specialties
	 */
	public function getSpecialty()
	{
		return $this->specialty;
	}

	/**
	 * Set specialty
	 *
	 * @param \SiteBundle\Entity\Specialties $specialty
	 * @return PhysiciansHasSpecialties
	 */
	public function setSpecialty(\SiteBundle\Entity\Specialties $specialty)
	{
		$this->specialty = $specialty;

		return $this;
	}
}