<?php

namespace GarageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Status
 *
 * @ORM\Table(name="status")
 * @ORM\Entity(repositoryClass="GarageBundle\Repository\StatusRepository")
 */
class Status
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
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity="GarageBundle\Entity\SecondHandcar", mappedBy="status")
     */
    private $secondHandCars;

    /**
     * @var string
     *
     * @ORM\Column(name="tagcss", type="string", length=255)
     */
    private $tagcss;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    public function __toString() {
        if ($this->getName() <> null )
            return $this->getName();
        else {
            return '';
        }
    }

    /**
     * Set tagcss
     *
     * @param string $tagcss
     *
     * @return Status
     */
    public function setTagcss($tagcss)
    {
        $this->tagcss = $tagcss;

        return $this;
    }

    /**
     * Get tagcss
     *
     * @return string
     */
    public function getTagcss()
    {
        return $this->tagcss;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Status
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
}
