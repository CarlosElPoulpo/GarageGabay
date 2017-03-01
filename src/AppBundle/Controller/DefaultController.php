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

        $repository = $this->getDoctrine()->getRepository('GarageBundle:Garage');
        $garage = $repository->findOneBy([]);

        $repository = $this->getDoctrine()->getRepository('AppBundle:Promotion');
        $promos = $repository->findPromosToDisplay();

        $repository = $this->getDoctrine()->getRepository('AppBundle:Employee');
        $employees = $repository->findAll(array('arrange' => 'ASC'));

        $repository = $this->getDoctrine()->getRepository('GarageBundle:SecondHandCar');
        $secondhandcars = $repository->findAll(array('creationDate' => 'DESC'));

        $repository = $this->getDoctrine()->getRepository('AppBundle:HomePage');
        $homepage = $repository->findOneBy([]);

        return $this->render('default/index.html.twig', array("utilitaires"=>$utilitaires, "particuliers"=>$particuliers, "electriques"=>$electriques, "services"=>$services, "garage"=>$garage, "secondhandcars"=>$secondhandcars , "employees"=>$employees, "homepage"=>$homepage));
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

        $repository = $this->getDoctrine()->getRepository('GarageBundle:SecondHandCar');
        $secondhandcars = $repository->findAll();

        return $this->render('default/voitures.html.twig', array("utilitaires"=>$utilitaires, "particuliers"=>$particuliers, "electriques"=>$electriques, "secondhandcars"=>$secondhandcars));
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
        $repository = $this->getDoctrine()->getRepository('AppBundle:Article');
        $articles = $repository->findAll(array('publicationDate' => 'DESC'));
        return $this->render('default/articles.html.twig', array("articles"=>$articles));
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contactAction(Request $request)
    {
        $repository = $this->getDoctrine()->getRepository('GarageBundle:Garage');
        $garage = $repository->findOneBy([]);
        return $this->render('default/contact.html.twig', array("garage"=>$garage));
    }

    public function contactButtonAction()
    {
        $repository = $this->getDoctrine()->getRepository('GarageBundle:Garage');
        $garage = $repository->findOneBy([]);
        return $this->render('elements/contactbutton.html.twig', array(
            'garage' => $garage,
        ));
    }

    /**
     * @Route("/promotions", name="promotions")
     */
    public function promotionsAction(Request $request)
    {
        $repository = $this->getDoctrine()->getRepository('AppBundle:Promotion');
        $promotions = $repository->findPromosToDisplay();
        return $this->render('default/promotions.html.twig', array("promotions"=>$promotions));
    }
}
