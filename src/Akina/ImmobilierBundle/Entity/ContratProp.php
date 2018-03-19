<?php

namespace Akina\ImmobilierBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ContratProp
 *
 * @ORM\Table(name="contrat_prop")
 * @ORM\Entity(repositoryClass="Akina\ImmobilierBundle\Repository\ContratPropRepository")
 */
class ContratProp
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
     * @ORM\Column(name="DateDeDebut", type="string", length=255)
     */
    private $dateDeDebut;

    /**
     * @var string
     *
     * @ORM\Column(name="DateDeFin", type="string", length=255)
     */
    private $dateDeFin;

    /**
     * @var string
     *
     * @ORM\Column(name="Duree", type="string", length=40)
     */
    private $duree;

    /**
     * @var int
     *
     * @ORM\Column(name="MontantAllocation", type="integer")
     */
    private $montantAllocation;

    /**
     * @var int
     *
     * @ORM\Column(name="CommissionAgence", type="integer")
     */
    private $commissionAgence;

    /**
     * @var int
     *
     * @ORM\Column(name="Total", type="integer")
     */
    private $total;

    /**
     * @ORM\ManyToOne(targetEntity="Akina\ImmobilierBundle\Entity\Biens")
     */
    private $Bien;

    /**
     * @ORM\ManyToOne(targetEntity="Akina\ImmobilierBundle\Entity\Proprietaire")
     */
    private $proprietaire;



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
     * Set dateDeDebut
     *
     * @param string $dateDeDebut
     *
     * @return ContratProp
     */
    public function setDateDeDebut($dateDeDebut)
    {
        $this->dateDeDebut = $dateDeDebut;

        return $this;
    }

    /**
     * Get dateDeDebut
     *
     * @return string
     */
    public function getDateDeDebut()
    {
        return $this->dateDeDebut;
    }

    /**
     * Set dateDeFin
     *
     * @param string $dateDeFin
     *
     * @return ContratProp
     */
    public function setDateDeFin($dateDeFin)
    {
        $this->dateDeFin = $dateDeFin;

        return $this;
    }

    /**
     * Get dateDeFin
     *
     * @return string
     */
    public function getDateDeFin()
    {
        return $this->dateDeFin;
    }

    /**
     * Set duree
     *
     * @param string $duree
     *
     * @return ContratProp
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
     * Set montantAllocation
     *
     * @param integer $montantAllocation
     *
     * @return ContratProp
     */
    public function setMontantAllocation($montantAllocation)
    {
        $this->montantAllocation = $montantAllocation;

        return $this;
    }

    /**
     * Get montantAllocation
     *
     * @return int
     */
    public function getMontantAllocation()
    {
        return $this->montantAllocation;
    }

    /**
     * Set commissionAgence
     *
     * @param integer $commissionAgence
     *
     * @return ContratProp
     */
    public function setCommissionAgence($commissionAgence)
    {
        $this->commissionAgence = $commissionAgence;

        return $this;
    }

    /**
     * Get commissionAgence
     *
     * @return int
     */
    public function getCommissionAgence()
    {
        return $this->commissionAgence;
    }

    /**
     * Set total
     *
     * @param integer $total
     *
     * @return ContratProp
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * Get total
     *
     * @return int
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Set bien
     *
     * @param \Akina\ImmobilierBundle\Entity\Biens $bien
     *
     * @return ContratProp
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

    /**
     * Set proprietaire
     *
     * @param \Akina\ImmobilierBundle\Entity\Proprietaire $proprietaire
     *
     * @return ContratProp
     */
    public function setProprietaire(\Akina\ImmobilierBundle\Entity\Proprietaire $proprietaire = null)
    {
        $this->proprietaire = $proprietaire;

        return $this;
    }

    /**
     * Get proprietaire
     *
     * @return \Akina\ImmobilierBundle\Entity\Proprietaire
     */
    public function getProprietaire()
    {
        return $this->proprietaire;
    }
}
