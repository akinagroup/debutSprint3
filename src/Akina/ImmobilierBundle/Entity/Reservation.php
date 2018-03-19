<?php

namespace Akina\ImmobilierBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservation.
 *
 * @ORM\Table(name="reservation")
 * @ORM\Entity(repositoryClass="Akina\ImmobilierBundle\Repository\ReservationRepository")
 */
class Reservation
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
     * @var string
     *
     * @ORM\Column(name="DateDeReservation", type="string")
     */
    private $dateDeReservation;

    /**
     * @var bool
     *
     * @ORM\Column(name="Etat", type="boolean")
     */
    private $etat;

    /**
     * @ORM\ManyToOne(targetEntity="Akina\ImmobilierBundle\Entity\Clients")
     * @ORM\JoinColumn(nullable=true)
     */
    private $Client;

    /**
     * @ORM\ManyToOne(targetEntity="Akina\ImmobilierBundle\Entity\Biens")
     * @ORM\JoinColumn(nullable=true)
     */
    private $Bien;

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set dateDeReservation.
     *
     * @param \DateTime $dateDeReservation
     *
     * @return Reservation
     */
    public function setDateDeReservation($dateDeReservation)
    {
        $this->dateDeReservation = $dateDeReservation;

        return $this;
    }

    /**
     * Get dateDeReservation.
     *
     * @return \DateTime
     */
    public function getDateDeReservation()
    {
        return $this->dateDeReservation;
    }

    /**
     * Set etat.
     *
     * @param bool $etat
     *
     * @return Reservation
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat.
     *
     * @return bool
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->Bien = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set client.
     *
     * @param \Akina\ImmobilierBundle\Entity\Clients $client
     *
     * @return Reservation
     */
    public function setClient(\Akina\ImmobilierBundle\Entity\Clients $client = null)
    {
        $this->Client = $client;

        return $this;
    }

    public function setClientI($client)
    {
        $this->Client = $client;

        return $this;
    }

    /**
     * Get client.
     *
     * @return \Akina\ImmobilierBundle\Entity\Clients
     */
    public function getClient()
    {
        return $this->Client;
    }

    /**
     * Add bien.
     *
     * @param \Akina\ImmobilierBundle\Entity\Biens $bien
     *
     * @return Reservation
     */
    public function addBien(\Akina\ImmobilierBundle\Entity\Biens $bien)
    {
        $this->Bien[] = $bien;

        return $this;
    }

    /**
     * Remove bien.
     *
     * @param \Akina\ImmobilierBundle\Entity\Biens $bien
     */
    public function removeBien(\Akina\ImmobilierBundle\Entity\Biens $bien)
    {
        $this->Bien->removeElement($bien);
    }

    /**
     * Get bien.
     *
     * @return \Akina\ImmobilierBundle\Entity\Biens
     */
    public function getBien()
    {
        return $this->Bien;
    }

    /**
     * Set bien.
     *
     * @param \Akina\ImmobilierBundle\Entity\Biens $bien
     *
     * @return Reservation
     */
    public function setBien(\Akina\ImmobilierBundle\Entity\Biens $bien = null)
    {
        $this->Bien = $bien;

        return $this;
    }

    public function setBienI($bien)
    {
        $this->Bien = $bien;

        return $this;
    }

    public function __toString()
    {
        return $this->dateDeReservation;
    }
}
