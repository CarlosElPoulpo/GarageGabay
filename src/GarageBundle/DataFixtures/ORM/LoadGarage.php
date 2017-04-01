<?php
/**
 * Created by PhpStorm.
 * User: LP
 * Date: 12/02/2017
 * Time: 15:03
 */

namespace GarageBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use GarageBundle\Entity\Garage;
use ImageBundle\Entity\Image;
use Symfony\Component\HttpFoundation\File\UploadedFile;


class LoadGarages extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $garage = new Garage();
        $garage->setName("Garage HERITIER");
        $garage->setDescription("Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad autem consequatur cupiditate eaque, enim, eum id in itaque libero quae reiciendis suscipit. Beatae expedita laborum maiores odit qui velit voluptatibus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis culpa cum et expedita nam officiis perferendis praesentium quaerat sunt tempora. A ad ");
        $garage->setEmail("garage.heritier@gmail.com");
        $garage->setFacebookPageLink("");
        $garage->setGooglePageLink("");
        $garage->setPhone("+ 33 4 76 51 75 50");
        $garage->setCity("Grenoble");
        $garage->setPostalCode("38100");
        $garage->setRoad("Av Jean Perrot");
        $garage->setRoadNumber("28");
        $garage->setImage($this->getReference("image_garage"));

        $manager->persist($garage);

        $manager->flush();
    }

    public function getOrder()
    {
        return 2;
    }
}