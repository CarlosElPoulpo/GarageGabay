<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HomePage
 *
 * @ORM\Table(name="home_page")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\HomePageRepository")
 */
class HomePage
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
     * @ORM\Column(name="title", type="text", nullable=true)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="welcomeParagraph", type="text", nullable=true)
     */
    private $welcomeParagraph;

    /**
     * @var string
     *
     * @ORM\Column(name="titleCarSales", type="text", nullable=true)
     */
    private $titleCarSales;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptionCarSales", type="text", nullable=true)
     */
    private $descriptionCarSales;

    /**
     * @var string
     *
     * @ORM\Column(name="videoUrl", type="string", length=255, nullable=true)
     */
    private $videoUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="titleCarSalesSecondHand", type="text", nullable=true)
     */
    private $titleCarSalesSecondHand;

    /**
     * @var string
     *
     * @ORM\Column(name="titleServices", type="string", length=255, nullable=true)
     */
    private $titleServices;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptionServices", type="string", length=255, nullable=true)
     */
    private $descriptionServices;


    /**
     * @var string
     *
     * @ORM\Column(name="titleTeam", type="string", length=255, nullable=true)
     */
    private $titleTeam;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptionTeam", type="string", length=255, nullable=true)
     */
    private $descriptionTeam;

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
     * @return HomePage
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
     * Set welcomeParagraph
     *
     * @param string $welcomeParagraph
     *
     * @return HomePage
     */
    public function setWelcomeParagraph($welcomeParagraph)
    {
        $this->welcomeParagraph = $welcomeParagraph;

        return $this;
    }

    /**
     * Get welcomeParagraph
     *
     * @return string
     */
    public function getWelcomeParagraph()
    {
        return $this->welcomeParagraph;
    }

    /**
     * Set titleCarSales
     *
     * @param string $titleCarSales
     *
     * @return HomePage
     */
    public function setTitleCarSales($titleCarSales)
    {
        $this->titleCarSales = $titleCarSales;

        return $this;
    }

    /**
     * Get titleCarSales
     *
     * @return string
     */
    public function getTitleCarSales()
    {
        return $this->titleCarSales;
    }

    /**
     * Set descriptionCarSales
     *
     * @param string $descriptionCarSales
     *
     * @return HomePage
     */
    public function setDescriptionCarSales($descriptionCarSales)
    {
        $this->descriptionCarSales = $descriptionCarSales;

        return $this;
    }

    /**
     * Get descriptionCarSales
     *
     * @return string
     */
    public function getDescriptionCarSales()
    {
        return $this->descriptionCarSales;
    }

    /**
     * Set videoUrl
     *
     * @param string $videoUrl
     *
     * @return HomePage
     */
    public function setVideoUrl($videoUrl)
    {
        $this->videoUrl = $videoUrl;

        return $this;
    }

    /**
     * Get videoUrl
     *
     * @return string
     */
    public function getVideoUrl()
    {
        return $this->videoUrl;
    }

    /**
     * Set titleServices
     *
     * @param string $titleServices
     *
     * @return HomePage
     */
    public function setTitleServices($titleServices)
    {
        $this->titleServices = $titleServices;

        return $this;
    }

    /**
     * Get titleServices
     *
     * @return string
     */
    public function getTitleServices()
    {
        return $this->titleServices;
    }

    /**
     * Set descriptionServices
     *
     * @param string $descriptionServices
     *
     * @return HomePage
     */
    public function setDescriptionServices($descriptionServices)
    {
        $this->descriptionServices = $descriptionServices;

        return $this;
    }

    /**
     * Get descriptionServices
     *
     * @return string
     */
    public function getDescriptionServices()
    {
        return $this->descriptionServices;
    }

    /**
     * Set titleTeam
     *
     * @param string $titleTeam
     *
     * @return HomePage
     */
    public function setTitleTeam($titleTeam)
    {
        $this->titleTeam = $titleTeam;

        return $this;
    }

    /**
     * Get titleTeam
     *
     * @return string
     */
    public function getTitleTeam()
    {
        return $this->titleTeam;
    }

    /**
     * Set descriptionTeam
     *
     * @param string $descriptionTeam
     *
     * @return HomePage
     */
    public function setDescriptionTeam($descriptionTeam)
    {
        $this->descriptionTeam = $descriptionTeam;

        return $this;
    }

    /**
     * Get descriptionTeam
     *
     * @return string
     */
    public function getDescriptionTeam()
    {
        return $this->descriptionTeam;
    }

    /**
     * Set titleCarSalesSecondHand
     *
     * @param string $titleCarSalesSecondHand
     *
     * @return HomePage
     */
    public function setTitleCarSalesSecondHand($titleCarSalesSecondHand)
    {
        $this->titleCarSalesSecondHand = $titleCarSalesSecondHand;

        return $this;
    }

    /**
     * Get titleCarSalesSecondHand
     *
     * @return string
     */
    public function getTitleCarSalesSecondHand()
    {
        return $this->titleCarSalesSecondHand;
    }

    public function __toString()
    {
        return "Page d'accueil";
    }
}
