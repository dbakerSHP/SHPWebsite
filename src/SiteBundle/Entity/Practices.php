<?php

namespace SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Practices
 *
 * @ORM\Table(name="practices")
 * @ORM\Entity(repositoryClass="SiteBundle\Entity\PracticesRepository")
 */
class Practices
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="practice", type="string", length=255)
     */
    private $practice;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_date", type="datetime")
     */
    private $createdDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="deleted_date", type="datetime", nullable=true)
     */
    private $deletedDate;


    public function __construct()
    {
        $createdDate = new \DateTime();
        $this->createdDate = $createdDate;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set practice
     *
     * @param string $practice
     * @return Practices
     */
    public function setPractice($practice)
    {
        $this->practice = $practice;

        return $this;
    }

    /**
     * Get practice
     *
     * @return string 
     */
    public function getPractice()
    {
        return $this->practice;
    }

    /**
     * Set createdDate
     *
     * @param \DateTime $createdDate
     * @return Practices
     */
    public function setCreatedDate($createdDate)
    {
        $this->createdDate = $createdDate;

        return $this;
    }

    /**
     * Get createdDate
     *
     * @return \DateTime 
     */
    public function getCreatedDate()
    {
        return $this->createdDate;
    }

    /**
     * Set deletedDate
     *
     * @param \DateTime $deletedDate
     * @return Practices
     */
    public function setDeletedDate($deletedDate)
    {
        $this->deletedDate = $deletedDate;

        return $this;
    }

    /**
     * Get deletedDate
     *
     * @return \DateTime 
     */
    public function getDeletedDate()
    {
        return $this->deletedDate;
    }
}
