<?php
/**
 * Created by PhpStorm.
 * User: LP
 * Date: 12/02/2017
 * Time: 15:03
 */

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\HomePage;


class LoadHomePage extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $homePage = new HomePage();
        $homePage->setTitle("Garage HERITIER");
        $homePage->setWelcomeParagraph("Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem repellendus quasi fuga nesciunt dolorum nulla magnam veniam sapiente, fugiat! Commodi sequi non animi ea dolor molestiae, quisquam iste, maiores. Nulla.");
        $homePage->setTitleCarSales("Ventes de voitures");
        $homePage->setVideoUrl("https://www.youtube.com/embed/gNX9ktDjV4s");
        $homePage->setDescriptionCarSales("Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, consequatur doloremque ea eligendi expedita fugiat, illum inventore maxime optio perspiciatis porro recusandae sapiente. Corporis eligendi exercitationem porro ratione rerum sequi?");
        $homePage->setTitleCarSalesSecondHand("Les dernières voitures d'occasion");
        $homePage->setTitleServices("Nos prestations");
        $homePage->setDescriptionServices("Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam eum porro a pariatur accusamus veniam. Quia, minima?");
        $homePage->setTitleTeam("L'équipe");
        $homePage->setDescriptionTeam("Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam eum porro a pariatur accusamus veniam. Quia, minima?");
        $manager->persist($homePage);

        $manager->flush();
    }

    public function getOrder()
    {
        return 2;
    }
}