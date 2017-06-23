<?php

namespace GarageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * VehiculeType
 *
 * @ORM\Table(name="vehicule_type")
 * @ORM\Entity(repositoryClass="GarageBundle\Repository\VehiculeTypeRepository")
 */
class VehiculeType
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
     * @ORM\Column(name="string", type="string", length=255)
     *
     * @Assert\NotNull()
     */
    private $name;


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
     * @return VehiculeType
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

    public function __toString()
    {
        if ($this->getName() <> null )
            return $this->getName();
        else {
            return '';
        }
    }


}
