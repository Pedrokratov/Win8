<?php

namespace Win8\EnrolBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Termin
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Win8\EnrolBundle\Entity\TerminRepository")
 */
class Termin
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
     * @var \DateTime
     *
     * @ORM\Column(name="datefrom", type="datetime")
     */
    private $datefrom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateto", type="datetime")
     */
    private $dateto;

    /**
     * @var integer
     *
     * @ORM\Column(name="availableplaceno", type="integer")
     */
    private $availableplaceno;


    /**
     * @var ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="Register", mappedBy="terminCourse")
     */
    private $registers;
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
     * Set datefrom
     *
     * @param \DateTime $datefrom
     * @return Termin
     */
    public function setDatefrom($datefrom)
    {
        $this->datefrom = $datefrom;

        return $this;
    }

    /**
     * Get datefrom
     *
     * @return \DateTime 
     */
    public function getDatefrom()
    {
        return $this->datefrom;
    }

    /**
     * Set dateto
     *
     * @param \DateTime $dateto
     * @return Termin
     */
    public function setDateto($dateto)
    {
        $this->dateto = $dateto;

        return $this;
    }

    /**
     * Get dateto
     *
     * @return \DateTime 
     */
    public function getDateto()
    {
        return $this->dateto;
    }

    /**
     * Set availableplaceno
     *
     * @param integer $availableplaceno
     * @return Termin
     */
    public function setAvailableplaceno($availableplaceno)
    {
        $this->availableplaceno = $availableplaceno;

        return $this;
    }

    /**
     * Get availableplaceno
     *
     * @return integer 
     */
    public function getAvailableplaceno()
    {
        return $this->availableplaceno;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->registers = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add registers
     *
     * @param \Win8\EnrolBundle\Entity\Register $registers
     * @return Termin
     */
    public function addRegister(\Win8\EnrolBundle\Entity\Register $registers)
    {
        $this->registers[] = $registers;

        return $this;
    }

    /**
     * Remove registers
     *
     * @param \Win8\EnrolBundle\Entity\Register $registers
     */
    public function removeRegister(\Win8\EnrolBundle\Entity\Register $registers)
    {
        $this->registers->removeElement($registers);
    }

    /**
     * Get registers
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRegisters()
    {
        return $this->registers;
    }

    public function __toString()
    {
        return 'Od: ' . $this->datefrom->format('d-m-y') . ' Do:' . $this->dateto->format('d-m-y') ;
    }
}
