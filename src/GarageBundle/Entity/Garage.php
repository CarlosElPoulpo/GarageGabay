<?php

namespace GarageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Garage
 *
 * @ORM\Table(name="garage")
 * @ORM\Entity(repositoryClass="GarageBundle\Repository\GarageRepository")
 */
class Garage
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
     * @ORM\Column(name="name", type="string", length=150)
     */
    private $name;

    /**
     * @ORM\OneToOne(targetEntity="ImageBundle\Entity\Image", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=true)
     * @Assert\Valid()
     */
    private $image;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="roadNumber", type="string", length=20)
     */
    private $roadNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="road", type="string", length=255)
     */
    private $road;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=255)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="postalCode", type="string", length=255)
     */
    private $postalCode;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=50)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="facebookPageLink", type="string", length=255)
     */
    private $facebookPageLink;

    /**
     * @var string
     *
     * @ORM\Column(name="googlePageLink", type="string", length=255)
     */
    private $googlePageLink;


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
     * Set name
     *
     * @param string $name
     *
     * @return Garage
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }


    /**
     * Set description
     *
     * @param string $description
     *
     * @return Garage
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
     * Set roadNumber
     *
     * @param string $roadNumber
     *
     * @return Garage
     */
    public function setRoadNumber($roadNumber)
    {
        $this->roadNumber = $roadNumber;

        return $this;
    }

    /**
     * Get roadNumber
     *
     * @return string
     */
    public function getRoadNumber()
    {
        return $this->roadNumber;
    }

    /**
     * Set road
     *
     * @param string $road
     *
     * @return Garage
     */
    public function setRoad($road)
    {
        $this->road = $road;

        return $this;
    }

    /**
     * Get road
     *
     * @return string
     */
    public function getRoad()
    {
        return $this->road;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return Garage
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set postalCode
     *
     * @param string $postalCode
     *
     * @return Garage
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    /**
     * Get postalCode
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * Set phone
     *
     * @param string $phone
     *
     * @return Garage
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Garage
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set facebookPageLink
     *
     * @param string $facebookPageLink
     *
     * @return Garage
     */
    public function setFacebookPageLink($facebookPageLink)
    {
        $this->facebookPageLink = $facebookPageLink;

        return $this;
    }

    /**
     * Get facebookPageLink
     *
     * @return string
     */
    public function getFacebookPageLink()
    {
        return $this->facebookPageLink;
    }

    /**
     * Set googlePageLink
     *
     * @param string $googlePageLink
     *
     * @return Garage
     */
    public function setGooglePageLink($googlePageLink)
    {
        $this->googlePageLink = $googlePageLink;

        return $this;
    }

    /**
     * Get googlePageLink
     *
     * @return string
     */
    public function getGooglePageLink()
    {
        return $this->googlePageLink;
    }

    public function __toString()
    {
        return $this->getName();
    }

    /**
     * Set image
     *
     * @param \ImageBundle\Entity\Image $image
     *
     * @return Garage
     */
    public function setImage(\ImageBundle\Entity\Image $image = null)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return \ImageBundle\Entity\Image
     */
    public function getImage()
    {
        return $this->image;
    }
}
