<?php

namespace Akina\ImmobilierBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ConfessionBiens
 *
 * @ORM\Table(name="confession_biens")
 * @ORM\Entity(repositoryClass="Akina\ImmobilierBundle\Repository\ConfessionBiensRepository")
 */
class ConfessionBiens
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
     * @ORM\Column(name="DateConfession", type="string", length=50)
     */
    private $dateConfession;

    /**
     * @var int
     *
     * @ORM\Column(name="MontantDemande", type="integer")
     */
    private $montantDemande;

    /**
     * @var string
     *
     * @ORM\Column(name="FrequenceDePaiement", type="string", length=60)
     */
    private $frequenceDePaiement;

    /**
     * @var bool
     *
     * @ORM\Column(name="Etat", type="boolean")
     */
    private $etat;

    /**
     * @var string
     *
     * @ORM\Column(name="DateDeValidation", type="string", length=255, nullable=true)
     */
    private $dateDeValidation;

    /**
     * @ORM\ManyToOne(targetEntity="Akina\ImmobilierBundle\Entity\Biens")
     */
    private $Bien;

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
     * Set dateConfession
     *
     * @param string $dateConfession
     *
     * @return ConfessionBiens
     */
    public function setDateConfession($dateConfession)
    {
        $this->dateConfession = $dateConfession;

        return $this;
    }

    /**
     * Get dateConfession
     *
     * @return string
     */
    public function getDateConfession()
    {
        return $this->dateConfession;
    }

    /**
     * Set montantDemande
     *
     * @param integer $montantDemande
     *
     * @return ConfessionBiens
     */
    public function setMontantDemande($montantDemande)
    {
        $this->montantDemande = $montantDemande;

        return $this;
    }

    /**
     * Get montantDemande
     *
     * @return int
     */
    public function getMontantDemande()
    {
        return $this->montantDemande;
    }

    /**
     * Set frequenceDePaiement
     *
     * @param string $frequenceDePaiement
     *
     * @return ConfessionBiens
     */
    public function setFrequenceDePaiement($frequenceDePaiement)
    {
        $this->frequenceDePaiement = $frequenceDePaiement;

        return $this;
    }

    /**
     * Get frequenceDePaiement
     *
     * @return string
     */
    public function getFrequenceDePaiement()
    {
        return $this->frequenceDePaiement;
    }

    /**
     * Set etat
     *
     * @param boolean $etat
     *
     * @return ConfessionBiens
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return bool
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set dateDeValidation
     *
     * @param string $dateDeValidation
     *
     * @return ConfessionBiens
     */
    public function setDateDeValidation($dateDeValidation)
    {
        $this->dateDeValidation = $dateDeValidation;

        return $this;
    }

    /**
     * Get dateDeValidation
     *
     * @return string
     */
    public function getDateDeValidation()
    {
        return $this->dateDeValidation;
    }

    /**
     * Set bien
     *
     * @param \Akina\ImmobilierBundle\Entity\Biens $bien
     *
     * @return ConfessionBiens
     */
    public function setBien(\Akina\ImmobilierBundle\Entity\Biens $bien = null)
    {
        $this->Bien = $bien;

        return $this;
    }

    /**
     * Get bien
     *
     * @return \Akina\ImmobilierBundle\Entity\Biens
     */
    public function getBien()
    {
        return $this->Bien;
    }
}
