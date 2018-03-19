<?php

namespace Akina\ImmobilierBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Biens
 *
 * @ORM\Table(name="biens")
 * @ORM\Entity(repositoryClass="Akina\ImmobilierBundle\Repository\BiensRepository")
 */
class Biens
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
     * @ORM\Column(name="NomBien", type="string", length=30)
     */
    private $nomBien;

    /**
     * @var bool
     *
     * @ORM\Column(name="Etat", type="boolean")
     */
    private $etat;

    /**
     * @var int
     *
     * @ORM\Column(name="Prix", type="integer")
     */
    private $prix;


    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="text")
     */
    private $description;

    /**
     * @ORM\ManyToOne(targetEntity="Akina\ImmobilierBundle\Entity\Biens")
     * @ORM\JoinColumn(nullable=true)
     */
    private $bienParent;

    /**
     * @ORM\ManyToOne(targetEntity="Akina\ImmobilierBundle\Entity\Proprietaire")
     */
  private $Proprietaire;



    /**
     * @ORM\ManyToOne(targetEntity="Akina\ImmobilierBundle\Entity\TypeBien")
     */
  private $Type;

    /**
     * @ORM\ManyToOne(targetEntity="Akina\ImmobilierBundle\Entity\Localite")
     */
  private $Localite;

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
     * Set nomBien
     *
     * @param string $nomBien
     *
     * @return Biens
     */
    public function setNomBien($nomBien)
    {
        $this->nomBien = $nomBien;

        return $this;
    }

    /**
     * Get nomBien
     *
     * @return string
     */
    public function getNomBien()
    {
        return $this->nomBien;
    }

    /**
     * Set etat
     *
     * @param boolean $etat
     *
     * @return Biens
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
     * Set Prix
     *
     * @param int $prix
     *
     * @return Biens
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return Biens
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Biens
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
     * Set type
     *
     * @param \Akina\ImmobilierBundle\Entity\TypeBien $type
     *
     * @return Biens
     */
    public function setType(\Akina\ImmobilierBundle\Entity\TypeBien $type = null)
    {
        $this->Type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return \Akina\ImmobilierBundle\Entity\TypeBien
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * Set localite
     *
     * @param \Akina\ImmobilierBundle\Entity\Localite $localite
     *
     * @return Biens
     */
    public function setLocalite(\Akina\ImmobilierBundle\Entity\Localite $localite = null)
    {
        $this->Localite = $localite;

        return $this;
    }

    /**
     * Get localite
     *
     * @return \Akina\ImmobilierBundle\Entity\Localite
     */
    public function getLocalite()
    {
        return $this->Localite;
    }
    
    /**
     * Set bienParent
     *
     * @param \Akina\ImmobilierBundle\Entity\Biens $bienParent
     *
     * @return Biens
     */
    public function setBienParent(\Akina\ImmobilierBundle\Entity\Biens $bienParent = null)
    {
        $this->bienParent = $bienParent;

        return $this;
    }

    /**
     * Get bienParent
     *
     * @return \Akina\ImmobilierBundle\Entity\Biens
     */
    public function getBienParent()
    {
        return $this->bienParent;
    }

    /**
     * Set proprietaire
     *
     * @param \Akina\ImmobilierBundle\Entity\Proprietaire $proprietaire
     *
     * @return Biens
     */
    public function setProprietaire(\Akina\ImmobilierBundle\Entity\Proprietaire $proprietaire = null)
    {
        $this->Proprietaire = $proprietaire;

        return $this;
    }

    /**
     * Get proprietaire
     *
     * @return \Akina\ImmobilierBundle\Entity\Proprietaire
     */
    public function getProprietaire()
    {
        return $this->Proprietaire;
    }

    public function __toString(){
        return $this->nomBien ;
            }
        
   
}
