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
 * @ORM\Entity(repositoryClass="SiteBundle\Entity\PracticesHasPhysiciansRepository")
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
	private $practice;

	/**
	 * @var \SiteBundle\Entity\PracticesLocations
	 *
	 * @ORM\ManyToOne(targetEntity="SiteBundle\Entity\PracticesLocations")
	 * @ORM\JoinColumns({
	 * 	@ORM\JoinColumn(name="practice_location_id", referencedColumnName="id")
	 * })
	 */
	private $practiceLocation;

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
	public function getPractice()
	{
		return $this->practice;
	}

	/**
	 * Set practice
	 *
	 * @param \SiteBundle\Entity\Practices $practice
	 * @return PracticesHasPhysicians
	 */
	public function setPractice(\SiteBundle\Entity\Practices $practice)
	{
		$this->practice = $practice;

		return $this;
	}

	/**
	 * @return PracticesLocations
	 */
	public function getPracticeLocation()
	{
		return $this->practiceLocation;
	}

	/**
	 * Set practice location
	 *
	 * @param \SiteBundle\Entity\PracticesLocations $practiceLocation
	 * @return PracticesLocations
	 */
	public function setPracticeLocation(\SiteBundle\Entity\PracticesLocations $practiceLocation)
	{
		$this->practiceLocation = $practiceLocation;

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
	 * @return PracticesHasPhysicians
	 */
	public function setPhysician(\SiteBundle\Entity\Physicians $physician)
	{
		$this->physician = $physician;

		return $this;
	}
}