<?php

namespace GarageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use GarageBundle\Entity\ContactMailNC;
use GarageBundle\Entity\ContactMailSHC;
use GarageBundle\Form\Type\ContactMailNCType;
use GarageBundle\Form\Type\ContactMailType;

class DefaultController extends Controller
{
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

            $message = new \Swift_Message($contactmailnc->subject());
            $message
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
            $flash_message .= $contactmailnc->getNewCar()->getModel()." ";
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
}
