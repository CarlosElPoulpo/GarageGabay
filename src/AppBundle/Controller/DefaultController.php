<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

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

        $repository = $this->getDoctrine()->getRepository('AppBundle:Employee');
        $employees = $repository->findAll(array('arrange' => 'ASC'));

        $repository = $this->getDoctrine()->getRepository('GarageBundle:SecondHandCar');
        $secondhandcars = $repository->findAll(array('creationDate' => 'DESC'));

        $repository = $this->getDoctrine()->getRepository('AppBundle:HomePage');
        $homepage = $repository->findOneBy([]);

        return $this->render('default/homepage.html.twig', array("utilitaires"=>$utilitaires, "particuliers"=>$particuliers, "electriques"=>$electriques, "services"=>$services, "garage"=>$garage, "secondhandcars"=>$secondhandcars , "employees"=>$employees, "homepage"=>$homepage));
    }

    /**
     * @Route("/voitures", name="cars")
     */
    public function voituresAction(Request $request)
    {

        $repository = $this->getDoctrine()->getRepository('GarageBundle:NewCar');

        $utilitaires = $repository->findByType("Utilitaire");
        $particuliers = $repository->findByType("Particulier");
        $electriques = $repository->findByType("Electrique");

        $repository = $this->getDoctrine()->getRepository('GarageBundle:SecondHandCar');
        $secondhandcars = $repository->findAllNotSold();

        return $this->render('default/cars.html.twig', array("utilitaires"=>$utilitaires, "particuliers"=>$particuliers, "electriques"=>$electriques, "secondhandcars"=>$secondhandcars));
    }

    /**
     * @Route("/voiture-neuve/{id}", name="newcar_details")
     */
    public function detailsvoitureAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('GarageBundle:NewCar');
        $car = $repository->find($id);
        return $this->render('default/new_car_details.html.twig', array("car"=>$car));
    }

    /**
     * @Route("/voiture-occasion/{id}", name="secondhandcar_details")
     */
    public function secondHandCarDetailsAction(Request $request, $id)
    {
        $repository = $this->getDoctrine()->getRepository('GarageBundle:Garage');
        $garage = $repository->findOneBy([]);

        $repository = $this->getDoctrine()->getRepository('GarageBundle:SecondHandCar');
        $car = $repository->find($id);
        return $this->render(':default:secondhand_car_details.html.twig', array("car"=>$car, "garage"=>$garage));
    }

    /**
     * @Route("/send")
     */
    public function sendAction()
    {
        $this_is = 'this is';
        $the_message = ' the message of the email';
        $mailer = $this->get('mailer');

        $message = \Swift_Message::newInstance()
            ->setSubject('The Subject for this Message')
            ->setFrom($this->container->getParameter('mailer_user'))
            ->setTo('de.pachtere.nat@gmail.com')
            ->setBody($this->renderView(':emails:email.html.twig', ['this'=>$this_is, 'message'=>$the_message]))
        ;
        $mailer->send($message);
        return new Response('<html><body>The email has been sent successfully!</body></html>');
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
