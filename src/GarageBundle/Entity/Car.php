<?php

namespace GarageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Car
 *
 * @ORM\Entity
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="discr", type="string")
 * @ORM\HasLifecycleCallbacks()
 *
 * @ORM\Table(name="car")
 * @ORM\Entity(repositoryClass="GarageBundle\Repository\CarRepository")
 */
class Car
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
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="brand", type="string", length=255)
     */
    private $brand;

    /**
     * @var string
     *
     * @ORM\Column(name="model", type="string", length=255)
     */
    private $model;

    /**
     * @var int
     *
     * @ORM\Column(name="year", type="integer")
     */
    private $year;

    /**
     * @var int
     *
     * @ORM\Column(name="price", type="integer")
     */
    private $price;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="creationDate", type="datetime", nullable=true)
     */
    private $creationDate;

    /**
     * @var int
     *
     * @ORM\Column(name="pricePerMonth", type="integer", nullable=true)
     */
    private $pricePerMonth;

    /**
     * @var string
     *
     * @ORM\Column(name="gear", type="string", length=255)
     */
    private $gear;

    /**
     * @var string
     *
     * @ORM\Column(name="fuel", type="string", length=255)
     */
    private $fuel;


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
     * Set title
     *
     * @param string $title
     *
     * @return Car
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

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
     * Set model
     *
     * @param string $model
     *
     * @return Car
     */
    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Get model
     *
     * @return string
     */
    public function getModel()
    {
        return $this->model;
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
     * Set price
     *
     * @param integer $price
     *
     * @return Car
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return int
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set creationDate
     *
     * @param \DateTime $creationDate
     *
     * @return Car
     */
    public function setCreationDate($creationDate)
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    /**
     * Get creationDate
     *
     * @return \DateTime
     */
    public function getCreationDate()
    {
        return $this->creationDate;
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
     * @ORM\PrePersist
     * @ORM\PreUpdate
     */
    public function setAutomaticCreationDate()
    {
        $this->setCreationDate(new \DateTimeImmutable());
    }
}
