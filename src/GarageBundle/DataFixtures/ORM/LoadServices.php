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
use GarageBundle\Entity\Service;
use ImageBundle\Entity\Image;
use Symfony\Component\HttpFoundation\File\UploadedFile;


class LoadServices extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $moteur = $this->new_service("Moteur", 45, "icon_moteur");
        $parallelisme = $this->new_service("Parallélisme", 120, "icon_parallelisme");
        $pneus = $this->new_service("Pneus", 120, "icon_pneus");
        $echappement = $this->new_service("Echappement", 120, "icon_echappement");
        $immatriculation = $this->new_service("Immatriculation", 75, "icon_immatriculation");
        $suspensions = $this->new_service("Suspensions", 120, "icon_suspensions");
        $climatisation = $this->new_service("Climatisation", 1200, "icon_climatisation");
        $batterie = $this->new_service("Batterie", 120, "icon_batterie");

        $manager->persist($moteur);
        $manager->persist($parallelisme);
        $manager->persist($pneus);
        $manager->persist($echappement);
        $manager->persist($immatriculation);
        $manager->persist($suspensions);
        $manager->persist($climatisation);
        $manager->persist($batterie);

        $manager->flush();
    }

    public function new_service($name, $price, $icon){
        $service = new Service();
        $service ->setName($name);
        $service ->setPrice($price);
        $service ->setIcon($this->getReference($icon));
        return $service;
    }

    public function getOrder()
    {
        return 2;
    }
}