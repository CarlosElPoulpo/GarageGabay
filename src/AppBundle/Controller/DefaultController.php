<?php

namespace AppBundle\Controller;

use GarageBundle\Entity\ContactMail;
use GarageBundle\Entity\ContactMailNC;
use GarageBundle\Entity\ContactMailSHC;
use GarageBundle\Form\ContactMailNCType;
use GarageBundle\Form\ContactMailType;
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


        $contactmailnc = new ContactMailNC();
        $contactmailnc->setNewCar($car);
        $contactmailnc->setBody("nothing");
        $form = $this->createForm(ContactMailNCType::class, $contactmailnc);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $contactmailnc = $form->getData();

            $mailer = $this->get('mailer');

            $message = \Swift_Message::newInstance()
                ->setSubject($contactmailnc->subject())
                ->setContentType("text/html")
                ->setFrom(array($this->container->getParameter('mailer_user') => 'Garage Heritier'))
                ->setTo(array($this->container->getParameter('mailer_garage')))
                ->setReplyTo($contactmailnc->getEmail())
                ->setBody($this->renderView(':emails:email_new_car.html.twig', ['datas'=>$contactmailnc]))
            ;
            $mailer->send($message);

            $flash_message = "Demande de contact pour la voiture : ";
            if($contactmailnc->getEssai()){
                $flash_message = "Demande de contact et d'essai pour la voiture : ";
            }
            $flash_message .= $contactmailnc->getNewCar()->getTitle();
            $this->get('session')->getFlashBag()->set('success', $flash_message);
            return $this->redirectToRoute('cars');
        }

        return $this->render('default/new_car_details.html.twig', array("car"=>$car, "form"=>$form->createView()));
    }

    /**
     * @Route("/voiture-occasion/{id}", name="secondhandcar_details")
     */
    public function secondHandCarDetailsAction(Request $request, $id)
    {
        $repository = $this->getDoctrine()->getRepository('GarageBundle:SecondHandCar');
        $car = $repository->find($id);

        $repository = $this->getDoctrine()->getRepository('GarageBundle:Garage');
        $garage = $repository->findOneBy([]);

        $contactmailshc = new ContactMailSHC();
        $contactmailshc->setSecondHandCar($car);

        $form = $this->createForm(ContactMailType::class, $contactmailshc);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $contactmailshc = $form->getData();

            $mailer = $this->get('mailer');

            $message = \Swift_Message::newInstance()
                ->setSubject($contactmailshc->subject())
                ->setContentType("text/html")
                ->setFrom(array($this->container->getParameter('mailer_user') => 'Garage Heritier'))
                ->setTo(array($this->container->getParameter('mailer_garage')))
                ->setReplyTo($contactmailshc->getEmail())
                ->setBody($this->renderView(':emails:email_second_hand_car.html.twig', ['datas'=>$contactmailshc]))
            ;
            $mailer->send($message);

            $this->get('session')->getFlashBag()->set('success', "Demande de contact pour la voiture : ".$contactmailshc->getSecondHandCar()->getTitle());
            return $this->redirectToRoute('cars');
        }

        return $this->render(':default:secondhand_car_details.html.twig', array("car"=>$car, "garage"=>$garage, "form"=>$form->createView()));
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
