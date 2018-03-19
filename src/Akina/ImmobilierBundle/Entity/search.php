<?php

namespace Akina\ImmobilierBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * search
 *
 * @ORM\Table(name="search")
 * @ORM\Entity(repositoryClass="Akina\ImmobilierBundle\Repository\searchRepository")
 */
class search
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
     *
     * @ORM\ManyToOne(targetEntity="Akina\ImmobilierBundle\Entity\Localite")
     * @ORM\JoinColumn(nullable=false)
     */

    private $Localite;

    /**
     * @var int
     *
     * @ORM\Column(name="prix", type="integer")
     */
    private $Prix;

    /**
     *
     * @ORM\ManyToOne(targetEntity="Akina\ImmobilierBundle\Entity\TypeBien")
     * @ORM\JoinColumn(nullable=false)
     */
    
private $Type;

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
     * Set prix
     *
     * @param string $prix
     *
     * @return search
     */
    public function setPrix($prix)
    {
        $this->Prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return string
     */
    public function getPrix()
    {
        return $this->Prix;
    }

    /**
     * Set localite
     *
     * @param \Akina\ImmobilierBundle\Entity\Localite $localite
     *
     * @return search
     */
    public function setLocalite(\Akina\ImmobilierBundle\Entity\Localite $localite)
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
     * Set type
     *
     * @param \Akina\ImmobilierBundle\Entity\TypeBien $type
     *
     * @return search
     */
    public function setType(\Akina\ImmobilierBundle\Entity\TypeBien $type)
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
    public function __toString()
    {
        return $this->id;
    }
}
