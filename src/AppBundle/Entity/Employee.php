<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Employee
 *
 * @ORM\Table(name="employee")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EmployeeRepository")
 */
class Employee
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
     * @ORM\Column(name="name", type="string", length=100)
     *
     * @Assert\NotNull()
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=100)
     *
     * @Assert\NotNull()
     */
    private $lastname;

    /**
     * @ORM\OneToOne(targetEntity="ImageBundle\Entity\Image", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=true)
     * @Assert\Valid()
     */
    private $image;

    /**
     * @var string
     *
     * @ORM\Column(name="jobTitle", type="string", length=200)
     *
     * @Assert\NotNull()
     */
    private $jobTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     *
     * @Assert\Length(
     *      min = 50,
     *      max = 200,
     *      minMessage = "Votre description dois être supérieure à {{ limit }} caractères",
     *      maxMessage = "Votre description dois être inférieure à {{ limit }} caractères"
     * )
     * @Assert\NotNull()
     */
    private $description;

    /**
     * @var int
     *
     * @ORM\Column(name="arrange", type="integer", nullable=true)
     */
    private $arrange;


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
     * @return Employee
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
     * Set lastname
     *
     * @param string $lastname
     *
     * @return Employee
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }


    /**
     * Set jobTitle
     *
     * @param string $jobTitle
     *
     * @return Employee
     */
    public function setJobTitle($jobTitle)
    {
        $this->jobTitle = $jobTitle;

        return $this;
    }

    /**
     * Get jobTitle
     *
     * @return string
     */
    public function getJobTitle()
    {
        return $this->jobTitle;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Employee
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

    public function fullname(){
        return $this->getName()." ".$this->getLastname();
    }

    public function __toString()
    {
        return $this->fullname();
    }


    /**
     * Set image
     *
     * @param \ImageBundle\Entity\Image $image
     *
     * @return Employee
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

    /**
     * Set arrange
     *
     * @param integer $arrange
     *
     * @return Employee
     */
    public function setArrange($arrange)
    {
        $this->arrange = $arrange;

        return $this;
    }

    /**
     * Get arrange
     *
     * @return integer
     */
    public function getArrange()
    {
        return $this->arrange;
    }
}
