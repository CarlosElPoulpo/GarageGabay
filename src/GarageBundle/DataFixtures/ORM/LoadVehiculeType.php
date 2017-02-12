<?php
/**
 * Created by PhpStorm.
 * User: LP
 * Date: 12/02/2017
 * Time: 14:59
 */

namespace GarageBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use GarageBundle\Entity\VehiculeType;


class LoadVehiculeTypeData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $particulier = new VehiculeType();
        $particulier->setName('Particulier');

        $utilitaire = new VehiculeType();
        $utilitaire->setName('Utilitaire');

        $electrique = new VehiculeType();
        $electrique->setName('Electrique');

        $manager->persist($particulier);
        $manager->persist($utilitaire);
        $manager->persist($electrique);

        $manager->flush();

        $this->addReference('vehiculeType-particulier', $particulier);
        $this->addReference('vehiculeType-utilitaire', $utilitaire);
        $this->addReference('vehiculeType-electrique', $electrique);
    }

    public function getOrder()
    {
        return 1;
    }
}