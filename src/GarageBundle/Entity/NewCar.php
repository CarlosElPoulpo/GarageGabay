<?php

namespace GarageBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * NewCar
 *
 * @ORM\Table(name="new_car")
 * @ORM\Entity(repositoryClass="GarageBundle\Repository\NewCarRepository")
 */
class NewCar extends Car
{
    /**
     * @var int
     *
     * @ORM\Column(name="pricePerMonth", type="integer", nullable=true)
     *
     * @Assert\GreaterThanOrEqual(0)
     */
    private $pricePerMonth;

    /**
     * @var int
     *
     * @ORM\Column(name="duration", type="integer", nullable=true)
     *
     * @Assert\GreaterThanOrEqual(0)
     */
    private $duration;

    /**
     * @var string
     *
     * @ORM\Column(name="renault_link", type="text")
     *
     * @Assert\NotNull()
     */
    private $renaultLink;

    /**
     * @ORM\ManyToOne(targetEntity="GarageBundle\Entity\VehiculeType")
     * @ORM\JoinColumn(nullable=true)
     */
    private $vehiculeType;

    /**
     * @ORM\OneToOne(targetEntity="ImageBundle\Entity\Image", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     * @Assert\NotNull
     * @Assert\Valid()
     */
    private $coverImage;

    /**
     * @ORM\OneToOne(targetEntity="ImageBundle\Entity\Image", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     * @Assert\NotNull
     * @Assert\Valid()
     */
    private $icone;

    /**
     * @ORM\ManyToMany(targetEntity="GarageBundle\Entity\Partnership")
     * @ORM\JoinTable(name="newCars_partnerships",
     *      joinColumns={@ORM\JoinColumn(name="newCar_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="partnership_id", referencedColumnName="id")}
     *      )
     */
    private $partnerships;

    /**
     * NewCar constructor.
     * @param $partnerships
     */
    public function __construct()
    {
        $this->partnerships = new \Doctrine\Common\Collections\ArrayCollection() ;
    }

    /**
     * Set pricePerMonth
     *
     * @param integer $pricePerMonth
     *
     * @return Car
     */
    public function setPricePerMonth($pricePerMonth)
    {
        $this->pricePerMonth = $pricePerMonth;

        return $this;
    }

    /**
     * Get pricePerMonth
     *
     * @return int
     */
    public function getPricePerMonth()
    {
        return $this->pricePerMonth;
    }


    /**
     * Set description
     *
     * @param string $description
     *
     * @return NewCar
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
     * Set renaultLink
     *
     * @param string $renaultLink
     *
     * @return NewCar
     */
    public function setRenaultLink($renaultLink)
    {
        $this->renaultLink = $renaultLink;

        return $this;
    }

    /**
     * Get renaultLink
     *
     * @return string
     */
    public function getRenaultLink()
    {
        return $this->renaultLink;
    }

    /**
     * Set vehiculeType
     *
     * @param \GarageBundle\Entity\VehiculeType $vehiculeType
     *
     * @return NewCar
     */
    public function setVehiculeType(\GarageBundle\Entity\VehiculeType $vehiculeType)
    {
        $this->vehiculeType = $vehiculeType;

        return $this;
    }

    /**
     * Get vehiculeType
     *
     * @return \GarageBundle\Entity\VehiculeType
     */
    public function getVehiculeType()
    {
        return $this->vehiculeType;
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
     * @return NewCar
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
     * Set icone
     *
     * @param \ImageBundle\Entity\Image $icone
     *
     * @return NewCar
     */
    public function setIcone(\ImageBundle\Entity\Image $icone = null)
    {
        $this->icone = $icone;

        return $this;
    }

    /**
     * Get icone
     *
     * @return \ImageBundle\Entity\Image
     */
    public function getIcone()
    {
        return $this->icone;
    }

    /**
     * Add partnership
     *
     * @param \GarageBundle\Entity\Partnership $partnership
     *
     * @return NewCar
     */
    public function addPartnership(\GarageBundle\Entity\Partnership $partnership)
    {
        $this->partnerships[] = $partnership;

        return $this;
    }

    /**
     * Remove partnership
     *
     * @param \GarageBundle\Entity\Partnership $partnership
     */
    public function removePartnership(\GarageBundle\Entity\Partnership $partnership)
    {
        $this->partnerships->removeElement($partnership);
    }

    /**
     * Get partnerships
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPartnerships()
    {
        return $this->partnerships;
    }

    /**
     * Set duration
     *
     * @param integer $duration
     *
     * @return Car
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get duration
     *
     * @return integer
     */
    public function getDuration()
    {
        return $this->duration;
    }
}
