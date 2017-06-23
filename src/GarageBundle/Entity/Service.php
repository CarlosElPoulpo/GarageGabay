<?php

namespace GarageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * Service
 *
 * @ORM\Table(name="service")
 * @ORM\Entity(repositoryClass="GarageBundle\Repository\ServiceRepository")
 */
class Service
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
     * @ORM\Column(name="name", type="string", length=255)
     *
     * @Assert\NotNull()
     */
    private $name;

    /**
     * @ORM\OneToOne(targetEntity="ImageBundle\Entity\Image", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=true)
     * @Assert\Valid()
     */
    private $icon;

    /**
     * @var float
     *
     * @ORM\Column(name="price", type="float")
     *
     * @Assert\NotNull()
     * @Assert\GreaterThanOrEqual(0)
     */
    private $price;

    /**
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\PromotionNew", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=true)
     * @Assert\Valid()
     */
    private $promotion;

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
     * @return Service
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
     * Set price
     *
     * @param float $price
     *
     * @return Service
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    public function __toString()
    {
        if ($this->getName() <> null )
            return $this->getName();
        else {
            return '';
        }
    }

    /**
     * Set icon
     *
     * @param \ImageBundle\Entity\Image $icon
     *
     * @return Service
     */
    public function setIcon(\ImageBundle\Entity\Image $icon = null)
    {
        $this->icon = $icon;

        return $this;
    }

    /**
     * Get icon
     *
     * @return \ImageBundle\Entity\Image
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * Set promotion
     *
     * @param \AppBundle\Entity\PromotionNew $promotion
     *
     * @return Service
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
