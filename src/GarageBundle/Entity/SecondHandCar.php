<?php

namespace GarageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use ImageBundle\Entity\Image;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * SecondHandCar
 *
 * @ORM\Table(name="second_hand_car")
 * @ORM\Entity(repositoryClass="GarageBundle\Repository\SecondHandCarRepository")
 */
class SecondHandCar extends Car
{

    /**
     * @var int
     *
     * @ORM\Column(name="km", type="integer")
     */
    private $km;

    /**
     * @var string
     *
     * @ORM\Column(name="LBClink", type="string", length=255)
     */
    private $lBClink;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var bool
     *
     * @ORM\Column(name="sold", type="boolean", nullable=true)
     */
    private $sold;

    /**
     * @ORM\OneToOne(targetEntity="ImageBundle\Entity\Image", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=true)
     * @Assert\Valid()
     */
    private $coverImage;

    /**
     * Many User have Many Phonenumbers.
     * @ORM\ManyToMany(targetEntity="ImageBundle\Entity\Image", cascade={"persist", "remove"})
     * @ORM\JoinTable(name="images_secondHandCars",
     *      joinColumns={@ORM\JoinColumn(name="secondHandCar_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="image_id", referencedColumnName="id", unique=true)}
     *      )
     */
     private $images;

//    /**
//     * @ORM\OneToMany(targetEntity="ImageBundle\Entity\Image", mappedBy="secondHandCar", cascade={"persist", "remove"}, orphanRemoval = true)
//     *
//     */
//    private $images;

    /**
     * Set km
     *
     * @param integer $km
     *
     * @return SecondHandCar
     */
    public function setKm($km)
    {
        $this->km = $km;

        return $this;
    }


    /**
     * Get km
     *
     * @return int
     */
    public function getKm()
    {
        return $this->km;
    }

    /**
     * Set lBClink
     *
     * @param string $lBClink
     *
     * @return SecondHandCar
     */
    public function setLBClink($lBClink)
    {
        $this->lBClink = $lBClink;

        return $this;
    }

    /**
     * Get lBClink
     *
     * @return string
     */
    public function getLBClink()
    {
        return $this->lBClink;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return SecondHandCar
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
     * Set sold
     *
     * @param boolean $sold
     *
     * @return SecondHandCar
     */
    public function setSold($sold)
    {
        $this->sold = $sold;

        return $this;
    }

    /**
     * Get sold
     *
     * @return boolean
     */
    public function getSold()
    {
        return $this->sold;
    }

    function __toString()
    {
        return $this->getTitle();
    }

    /**
     * Set coverImage
     *
     * @param \ImageBundle\Entity\Image $coverImage
     *
     * @return SecondHandCar
     */
    public function setCoverImage(\ImageBundle\Entity\Image $coverImage = null)
    {
        $this->coverImage = $coverImage;

        return $this;
    }

    /**
     * Get coverImage
     *
     * @return \ImageBundle\Entity\Image
     */
    public function getCoverImage()
    {
        return $this->coverImage;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->images = new \Doctrine\Common\Collections\ArrayCollection();
    }

//    /**
//     * Add image
//     *
//     * @param Image $image
//     *
//     * @return SecondHandCar
//     */
//    public function addImage(UploadedFile $file)
//    {
//        $image = new Image();
//        $image->setFile($file);
//        $image->setAlt("test");
//        $image->setSecondHandCar($this);
//        $this->images[] = $image;
//
//        return $this;
//    }
//
//    /**
//     * Remove image
//     *
//     * @param Image $image
//     */
//    public function removeImage(\GarageBundle\Entity\Image $image)
//    {
//        $this->images->removeElement($image);
//    }
//
//    /**
//     * Get images
//     *
//     * @return \Doctrine\Common\Collections\Collection
//     */
//    public function getImages()
//    {
//        return $this->images;
//    }

    /**
     * Add image
     *
     * @param Image $image
     *
     * @return SecondHandCar
     */
    public function addImage(Image $image)
    {

        $this->images[] = $image;

        return $this;
    }

    /**
     * Remove image
     *
     * @param \ImageBundle\Entity\Image $image
     */
    public function removeImage(\ImageBundle\Entity\Image $image)
    {
        $this->images->removeElement($image);
    }

    /**
     * Get images
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getImages()
    {
        return $this->images;
    }
}
