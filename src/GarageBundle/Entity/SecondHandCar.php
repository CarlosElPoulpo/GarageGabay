<?php

namespace GarageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
}
