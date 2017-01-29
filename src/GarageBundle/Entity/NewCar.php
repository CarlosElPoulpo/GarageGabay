<?php

namespace GarageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NewCar
 *
 * @ORM\Table(name="new_car")
 * @ORM\Entity(repositoryClass="GarageBundle\Repository\NewCarRepository")
 */
class NewCar extends Car
{

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=100)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="renault_link", type="string", length=100)
     */
    private $renaultLink;

    /**
     * @ORM\ManyToOne(targetEntity="GarageBundle\Entity\VehiculeType")
     * @ORM\JoinColumn(nullable=true)
     */
    private $vehiculeType;


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
}
