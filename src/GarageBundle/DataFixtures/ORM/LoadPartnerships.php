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
use GarageBundle\Entity\Partnership;


class LoadPartnerships extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $partnership1 = new Partnership();
        $partnership1->setName('Partenaire1');

        $partnership2 = new Partnership();
        $partnership2->setName('Partenaire2');

        $partnership3 = new Partnership();
        $partnership3->setName('Partenaire3');

        $manager->persist($partnership1);
        $manager->persist($partnership2);
        $manager->persist($partnership3);

        $manager->flush();

        $this->addReference('partnership1', $partnership1);
        $this->addReference('partnership2', $partnership2);
        $this->addReference('partnership3', $partnership3);
    }

    public function getOrder()
    {
        return 1;
    }
}