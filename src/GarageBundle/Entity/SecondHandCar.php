<?php

namespace GarageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use ImageBundle\Entity\Image;
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
     * @var string
     *
     * @ORM\Column(name="brand", type="string", length=255)
     *
     * @Assert\NotNull()
     */
    private $brand;

    /**
     * @var int
     *
     * @ORM\Column(name="year", type="integer")
     *
     * @Assert\GreaterThanOrEqual(1900)
     * @Assert\NotNull()
     */
    private $year;

    /**
     * @var string
     *
     * @ORM\Column(name="fuel", type="string", length=255)
     *
     * @Assert\NotNull()
     */
    private $fuel;

    /**
     * @var string
     *
     * @ORM\Column(name="gear", type="string", length=255)
     *
     * @Assert\NotNull()
     */
    private $gear;

    /**
     * @var int
     *
     * @ORM\Column(name="km", type="integer")
     *
     * @Assert\NotNull()
     * @Assert\GreaterThanOrEqual(0)
     */
    private $km;

    /**
     * @var string
     *
     * @ORM\Column(name="LBClink", type="string", length=255, nullable=true)
     */
    private $lBClink;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     *
     * @Assert\NotNull()
     */
    private $description;

    /**
     * @ORM\OneToOne(targetEntity="ImageBundle\Entity\Image", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     * @Assert\NotNull()
     * @Assert\Valid()
     */
    private $coverImage;

    /**
     * @ORM\ManyToMany(targetEntity="ImageBundle\Entity\Image", cascade={"persist", "remove"})
     * @ORM\JoinTable(name="images_secondhandcars",
     *      joinColumns={@ORM\JoinColumn(name="secondHandCar_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="image_id", referencedColumnName="id", unique=true)}
     *      )
     */
     private $images;


    /**
     * @ORM\ManyToOne(targetEntity="GarageBundle\Entity\Status", inversedBy="secondHandCars")
     * @ORM\JoinColumn(nullable=false)
     * @Assert\Valid()
     */
    private $status;

    /**
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\PromotionNew", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=true)
     * @Assert\Valid()
     */
    private $promotion;

    /**
     * Set brand
     *
     * @param string $brand
     *
     * @return Car
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * Get brand
     *
     * @return string
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Set fuel
     *
     * @param string $fuel
     *
     * @return Car
     */
    public function setFuel($fuel)
    {
        $this->fuel = $fuel;

        return $this;
    }

    /**
     * Get fuel
     *
     * @return string
     */
    public function getFuel()
    {
        return $this->fuel;
    }

    /**
     * Set year
     *
     * @param integer $year
     *
     * @return Car
     */
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Get year
     *
     * @return int
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set gear
     *
     * @param string $gear
     *
     * @return Car
     */
    public function setGear($gear)
    {
        $this->gear = $gear;

        return $this;
    }

    /**
     * Get gear
     *
     * @return string
     */
    public function getGear()
    {
        return $this->gear;
    }

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

    public function __toString()
    {
        if ($this->getTitle() <> null )
            return $this->getTitle();
        else {
            return '';
        }
    }

    /**
     * Set status
     *
     * @param \GarageBundle\Entity\Status $status
     *
     * @return SecondHandCar
     */
    public function setStatus(\GarageBundle\Entity\Status $status = null)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return \GarageBundle\Entity\Status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set promotion
     *
     * @param \AppBundle\Entity\PromotionNew $promotion
     *
     * @return SecondHandCar
     */
    public function setPromotion(\AppBundle\Entity\PromotionNew $promotion = null)
    {
        $this->promotion = $promotion;

        return $this;
    }

    /**
     * Get promotion
     *
     * @return \AppBundle\Entity\PromotionNew
     */
    public function getPromotion()
    {
        return $this->promotion;
    }


}
