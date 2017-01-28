<?php

namespace NDP\SiteMapBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function siteMapAction()
    {
        return $this->render(
            'NDPSiteMapBundle::sitemap.xml.twig',
            ['urls' => $this->get('ndp_site_map.sitemap')->generer()]
        );
    }
}
