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

        $formations = $this->em->getRepository('AppBundle:Formation')->findAll();

        foreach ($formations as $formation) {
            $urls[] = array(
                'loc' => $this->router->generate('details_formation', array('id' => $formation->getId()), UrlGeneratorInterface::ABSOLUTE_URL)
            );
        }

        $interventions = $this->em->getRepository('AppBundle:Intervention')->findAll();

        foreach ($interventions as $intervention) {
            $urls[] = array(
                'loc' => $this->router->generate('details_intervention', array('id' => $intervention->getId()), UrlGeneratorInterface::ABSOLUTE_URL)
            );
        }

        $stages = $this->em->getRepository('AppBundle:Stage')->findAll();

        foreach ($stages as $stage) {
            $urls[] = array(
                'loc' => $this->router->generate('details_stage', array('id' => $stage->getId()), UrlGeneratorInterface::ABSOLUTE_URL)
            );
        }

        $urls[] = array(
            'loc' => $this->router->generate('homepage', array(), UrlGeneratorInterface::ABSOLUTE_URL)
        );
        $urls[] = array(
            'loc' => $this->router->generate('enquetes', array(), UrlGeneratorInterface::ABSOLUTE_URL)
        );
        $urls[] = array(
            'loc' => $this->router->generate('publications', array(), UrlGeneratorInterface::ABSOLUTE_URL)
        );
        $urls[] = array(
            'loc' => $this->router->generate('articles_courts', array(), UrlGeneratorInterface::ABSOLUTE_URL)
        );
        $urls[] = array(
            'loc' => $this->router->generate('sportifs', array(), UrlGeneratorInterface::ABSOLUTE_URL)
        );
        $urls[] = array(
            'loc' => $this->router->generate('style_guide', array(), UrlGeneratorInterface::ABSOLUTE_URL)
        );
        return $urls;
    }
}
