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
        $repository = $this->getDoctrine()->getRepository('GarageBundle:NewCar');

        $utilitaires = $repository->findByType("Utilitaire");
        $particuliers = $repository->findByType("Particulier");
        $electriques = $repository->findByType("Electrique");

        $repository = $this->getDoctrine()->getRepository('GarageBundle:Service');
        $services = $repository->findAll();
        return $this->render('default/index.html.twig', array("utilitaires"=>$utilitaires, "particuliers"=>$particuliers, "electriques"=>$electriques, "services"=>$services));
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

        $repository = $this->getDoctrine()->getRepository('GarageBundle:NewCar');

        $utilitaires = $repository->findByType("Utilitaire");
        $particuliers = $repository->findByType("Particulier");
        $electriques = $repository->findByType("Electrique");

        return $this->render('default/voitures.html.twig', array("utilitaires"=>$utilitaires, "particuliers"=>$particuliers, "electriques"=>$electriques));
    }

    /**
     * @Route("/voiture/{id}", name="voiture")
     */
    public function detailsvoitureAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('GarageBundle:NewCar');
        $car = $repository->find($id);
        return $this->render('default/detailsvoiture.html.twig', array("car"=>$car));
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
