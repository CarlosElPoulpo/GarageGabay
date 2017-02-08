<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        return $this->render('default/index.html.twig');
    }

    /**
     * @Route("/apropos", name="apropos")
     */
    public function aproposAction(Request $request)
    {
        return $this->render('default/apropos.html.twig');
    }

    /**
     * @Route("/voitures", name="voitures")
     */
    public function voituresAction(Request $request)
    {
        return $this->render('default/voitures.html.twig');
    }

    /**
     * @Route("/voiture", name="voiture")
     */
    public function detailsvoitureAction(Request $request)
    {
        return $this->render('default/detailsvoiture.html.twig');
    }

    /**
     * @Route("/article/{id}", name="article")
     */
    public function detailsarticleAction(Request $request)
    {
        return $this->render('default/detailsvoiture.html.twig');
    }

    /**
     * @Route("/articles", name="articles")
     */
    public function articlesAction(Request $request)
    {
        return $this->render('default/articles.html.twig');
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contactAction(Request $request)
    {
        return $this->render('default/contact.html.twig');
    }

    /**
     * @Route("/promotions", name="promotions")
     */
    public function promotionsAction(Request $request)
    {
        return $this->render('default/promotions.html.twig');
    }
}
