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

        $voitures_neuves = array("utilitaires"=>$utilitaires, "particuliers"=>$particuliers, "electriques"=>$electriques);

        $repository = $this->getDoctrine()->getRepository('GarageBundle:Service');
        $services = $repository->findAll();

        $repository = $this->getDoctrine()->getRepository('GarageBundle:Garage');
        $garage = $repository->findOneBy([]);

        $repository = $this->getDoctrine()->getRepository('AppBundle:Employee');
        $employees = $repository->findBy(array(), array('arrange' => 'ASC'));

        $repository = $this->getDoctrine()->getRepository('GarageBundle:SecondHandCar');
        $secondhandcars = $repository->findBy(array(), array('creationDate' => 'DESC'));

        $repository = $this->getDoctrine()->getRepository('AppBundle:HomePage');
        $homepage = $repository->findOneBy([]);

        return $this->render('default/homepage.html.twig', array("newcar"=>$voitures_neuves, "services"=>$services, "garage"=>$garage, "secondhandcars"=>$secondhandcars , "employees"=>$employees, "homepage"=>$homepage));
    }

    /**
     * @Route("/article/{id}", name="article")
     */
    public function detailsarticleAction(Request $request, $id)
    {
        $repository = $this->getDoctrine()->getRepository('AppBundle:Article');
        $article = $repository->find($id);
        return $this->render('default/article_details.html.twig', array("article"=>$article));
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
        return $this->render(':elements:contact_button.html.twig', array(
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

        $repository = $this->getDoctrine()->getRepository('GarageBundle:SecondHandCar');
        $secondhandcars = $repository->findAllWithPromotion();

        $repository = $this->getDoctrine()->getRepository('GarageBundle:Service');
        $services = $repository->findAllWithPromotion();

        return $this->render('default/promotions.html.twig', array("promotions"=>$promotions, "services"=>$services, "secondhandcars"=>$secondhandcars));
    }

    /**
     * @Route("/informations-legales", name="cgu")
     */
    public function infosLegalesAction(Request $request)
    {
        return $this->render('default/cgu.html.twig');
    }
}
