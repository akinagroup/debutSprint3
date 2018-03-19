<?php

namespace Akina\ImmobilierBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Images.
 *
 * @ORM\Table(name="images")
 * @ORM\Entity(repositoryClass="Akina\ImmobilierBundle\Repository\ImagesRepository")
 */
class Images
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
     * @ORM\Column(name="image", type="blob")
     */
    private $image;

    /**
     * @ORM\ManyToOne(targetEntity="Akina\ImmobilierBundle\Entity\Biens")
     */
    private $biens;

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
     * Set image.
     *
     * @param string $image
     *
     * @return Images
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image.
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set biens
     *
     * @param \Akina\ImmobilierBundle\Entity\Biens $biens
     *
     * @return Images
     */
    public function setBiens(\Akina\ImmobilierBundle\Entity\Biens $biens = null)
    {
        $this->biens = $biens;

        return $this;
    }

    /**
     * Get biens
     *
     * @return \Akina\ImmobilierBundle\Entity\Biens
     */
    public function getBiens()
    {
        return $this->biens;
    }
    public function __toString(){
        return $this->image ;
            }
            
}
