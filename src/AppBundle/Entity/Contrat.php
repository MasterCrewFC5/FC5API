<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contrat
 *
 * @ORM\Table(name="contrat")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ContratRepository")
 */
class Contrat
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="salaire", type="integer", length=4)
     */
    private $salaire;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=125)
     */
    private $description;

    /**
     * @var int
     *
     * @ORM\Column(name="value", type="integer", length=2)
     */
    private $value;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_start", type="date")
     */
    private $date_start;

    /**
     * @var interger
     *
     * @ORM\Column(name="duration", type="interger", length=2)
     */
    private $duration;

    /**
     * @var bool
     *
     * @ORM\Column(name="on_going", type="boolean")
     */
    private $on_going;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set salaire
     *
     * @param $salaire
     *
     * @return Contrat
     */
    public function setSalaire($salaire)
    {
        $this->salaire = $salaire;

        return $this;
    }

    /**
     * Get salaire
     *
     * @return int
     */
    public function getSalaire()
    {
        return $this->salaire;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Contrat
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set value
     *
     * @param integer $value
     *
     * @return Contrat
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return int
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set dateStart
     *
     * @param \DateTime $dateStart
     *
     * @return Contrat
     */
    public function setDateStart($dateStart)
    {
        $this->date_start = $dateStart;

        return $this;
    }

    /**
     * Get dateStart
     *
     * @return \DateTime
     */
    public function getDateStart()
    {
        return $this->date_start;
    }

    /**
     * Set duration
     *
     * @param \interger $duration
     *
     * @return Contrat
     */
    public function setDuration(\interger $duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get duration
     *
     * @return \interger
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Set onGoing
     *
     * @param boolean $onGoing
     *
     * @return Contrat
     */
    public function setOnGoing($onGoing)
    {
        $this->on_going = $onGoing;

        return $this;
    }

    /**
     * Get onGoing
     *
     * @return bool
     */
    public function getOnGoing()
    {
        return $this->on_going;
    }
}
