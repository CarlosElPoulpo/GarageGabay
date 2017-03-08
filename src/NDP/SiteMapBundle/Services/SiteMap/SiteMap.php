<?php

namespace NDP\SiteMapBundle\Services\SiteMap;

use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Routing\RouterInterface;

class SiteMap
{
    private $router;
    private $em;

    public function __construct(RouterInterface $router, ObjectManager $em)
    {
        $this->router = $router;
        $this->em = $em;
    }

    /**
     * Génère l'ensemble des valeurs des balises <url> du sitemap.
     *
     * @return array Tableau contenant l'ensemble des balise url du sitemap.
     */
    public function generer()
    {
        $urls = array();

        $articles = $this->em->getRepository('AppBundle:Article')->findAll();

        foreach ($articles as $article) {
            $urls[] = array(
                'loc' => $this->router->generate('article', array('id' => $article->getId()), UrlGeneratorInterface::ABSOLUTE_URL)
            );
        }

        $secondhandcars = $this->em->getRepository('GarageBundle:SecondHandCar')->findAll();

        foreach ($secondhandcars as $secondhandcar) {
            $urls[] = array(
                'loc' => $this->router->generate('secondhandcar_details', array('id' => $secondhandcar->getId()), UrlGeneratorInterface::ABSOLUTE_URL)
            );
        }

        $newcars = $this->em->getRepository("GarageBundle:NewCar")->findAll();

        foreach ($newcars as $newcar) {
            $urls[] = array(
                'loc' => $this->router->generate('newcar_details', array('id' => $newcar->getId()), UrlGeneratorInterface::ABSOLUTE_URL)
            );
        }

        $urls[] = array(
            'loc' => $this->router->generate('homepage', array(), UrlGeneratorInterface::ABSOLUTE_URL)
        );
        $urls[] = array(
            'loc' => $this->router->generate('cars', array(), UrlGeneratorInterface::ABSOLUTE_URL)
        );
        $urls[] = array(
            'loc' => $this->router->generate('promotions', array(), UrlGeneratorInterface::ABSOLUTE_URL)
        );
        $urls[] = array(
            'loc' => $this->router->generate('articles', array(), UrlGeneratorInterface::ABSOLUTE_URL)
        );
        $urls[] = array(
            'loc' => $this->router->generate('contact', array(), UrlGeneratorInterface::ABSOLUTE_URL)
        );
        return $urls;
    }
}
