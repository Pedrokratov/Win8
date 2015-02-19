<?php

namespace Win8\EnrolBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Register
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Win8\EnrolBundle\Entity\RegisterRepository")
 */
class Register
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
     * @ORM\Column(name="firstname", type="string", length=255)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="surname", type="string", length=255)
     */
    private $surname;

    /**
     * @var string
     *
     * @ORM\Column(name="department", type="string", length=255)
     */
    private $department;

    /**
     *
     * @ORM\ManyToOne(targetEntity="Termin", inversedBy="registers")
     * @ORM\JoinColumn(name="terminCourse", referencedColumnName="id")
     */
    private $terminCourse;

    public function __construct()
    {
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
     * Set firstname
     *
     * @param string $firstname
     * @return Register
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string 
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set surname
     *
     * @param string $surname
     * @return Register
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * Get surname
     *
     * @return string 
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Set department
     *
     * @param string $department
     * @return Register
     */
    public function setDepartment($department)
    {
        $this->department = $department;

        return $this;
    }

    /**
     * Get department
     *
     * @return string 
     */
    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * Set terminCourse
     *
     * @param \Win8\EnrolBundle\Entity\Termin $terminCourse
     * @return Register
     */
    public function setTerminCourse(\Win8\EnrolBundle\Entity\Termin $terminCourse = null)
    {
        $this->terminCourse = $terminCourse;

        return $this;
    }

    /**
     * Get terminCourse
     *
     * @return \Win8\EnrolBundle\Entity\Termin 
     */
    public function getTerminCourse()
    {
        return $this->terminCourse;
    }
}
