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
use GarageBundle\Entity\Status;



class LoadStatus extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $status = new Status();
        $status->setName('En arrivage');
        $status->setTagcss('arrive');

        $status1 = new Status();
        $status1->setName('Disponible sous 15 jours');
        $status1->setTagcss('delay');

        $status2 = new Status();
        $status2->setName('En Vente');
        $status2->setTagcss('on-sale');

        $status3 = new Status();
        $status3->setName('Vendue');
        $status3->setTagcss('sold');

        $manager->persist($status);
        $manager->persist($status1);
        $manager->persist($status2);
        $manager->persist($status3);

        $manager->flush();
    }

    public function getOrder()
    {
        return 2;
    }
}