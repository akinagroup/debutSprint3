<?php

namespace Akina\ImmobilierBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * Image
 *
 * @ORM\Table(name="image")
 * @ORM\Entity(repositoryClass="Akina\ImmobilierBundle\Repository\ImageRepository")
 */
class Image
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
     * @ORM\Column(name="Image",type="string",length=50)
     *
     */
    private $image;
    /**
     * @ORM\ManyToOne(targetEntity="Akina\ImmobilierBundle\Entity\Biens")
     */
    private $biens;
   

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    
    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }
    public function __toString(){
        return $this->image ;
            }

    /**
     * Set biens
     *
     * @param \Akina\ImmobilierBundle\Entity\Biens $biens
     *
     * @return Image
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

}
