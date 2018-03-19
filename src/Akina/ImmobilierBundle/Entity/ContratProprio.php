<?php

namespace Akina\ImmobilierBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ContratProprio
 *
 * @ORM\Table(name="contrat_proprio")
 * @ORM\Entity(repositoryClass="Akina\ImmobilierBundle\Repository\ContratProprioRepository")
 */
class ContratProprio
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
     * @ORM\Column(name="Duree", type="string", length=255)
     */
    private $duree;

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
     * Set duree
     *
     * @param string $duree
     *
     * @return ContratProprio
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
     * Set bien
     *
     * @param \Akina\ImmobilierBundle\Entity\Biens $bien
     *
     * @return ContratProprio
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
     * @return ContratProprio
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
