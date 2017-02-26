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
        $homePage->setDescription("Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem repellendus quasi fuga nesciunt dolorum nulla magnam veniam sapiente, fugiat! Commodi sequi non animi ea dolor molestiae, quisquam iste, maiores. Nulla.");
        $homePage->setVideoUrl("https://www.youtube.com/embed/gNX9ktDjV4s");
        $homePage->setImage($this->getReference("imageIndexFullScreen"));

        $manager->persist($homePage);

        $manager->flush();
    }

    public function getOrder()
    {
        return 2;
    }
}