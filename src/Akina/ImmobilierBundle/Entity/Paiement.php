<?php

namespace Akina\ImmobilierBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Paiement
 *
 * @ORM\Table(name="paiement")
 * @ORM\Entity(repositoryClass="Akina\ImmobilierBundle\Repository\PaiementRepository")
 */
class Paiement
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
     * @ORM\Column(name="DateDePaiement", type="string", length=255)
     */
    private $dateDePaiement;

    /**
     * @var string
     *
     * @ORM\Column(name="Duree", type="string", length=255)
     */
    private $duree;

    /**
     * @var int
     *
     * @ORM\Column(name="MontantPayer", type="integer")
     */
    private $montantPayer;


 /**
     * @ORM\OneToOne(targetEntity="Akina\ImmobilierBundle\Entity\Contrat")
     */
    private $Contrat;
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
     * Set dateDePaiement
     *
     * @param string $dateDePaiement
     *
     * @return Paiement
     */
    public function setDateDePaiement($dateDePaiement)
    {
        $this->dateDePaiement = $dateDePaiement;

        return $this;
    }

    /**
     * Get dateDePaiement
     *
     * @return string
     */
    public function getDateDePaiement()
    {
        return $this->dateDePaiement;
    }

    /**
     * Set duree
     *
     * @param string $duree
     *
     * @return Paiement
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;

        return $this;
    }

    /**
     * Get duree
     *
     * @return string
     */
    public function getDuree()
    {
        return $this->duree;
    }

    /**
     * Set montantPayer
     *
     * @param integer $montantPayer
     *
     * @return Paiement
     */
    public function setMontantPayer($montantPayer)
    {
        $this->montantPayer = $montantPayer;

        return $this;
    }

    /**
     * Get montantPayer
     *
     * @return int
     */
    public function getMontantPayer()
    {
        return $this->montantPayer;
    }

    /**
     * Set contrat
     *
     * @param \Akina\ImmobilierBundle\Entity\Contrat $contrat
     *
     * @return Paiement
     */
    public function setContrat(\Akina\ImmobilierBundle\Entity\Contrat $contrat = null)
    {
        $this->Contrat = $contrat;

        return $this;
    }

    /**
     * Get contrat
     *
     * @return \Akina\ImmobilierBundle\Entity\Contrat
     */
    public function getContrat()
    {
        return $this->Contrat;
    }
}
