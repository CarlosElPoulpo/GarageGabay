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
use AppBundle\Entity\Employee;


class LoadEmployees extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $employee1 = new Employee();
        $employee1->setName("Djuda");
        $employee1->setLastname("Heritier");
        $employee1->setJobTitle("Gérant");
        $employee1->setDescription("Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id officiis hic tenetur quae quaerat ad velit ab.");
        $employee1->setImage($this->getReference('imageDjuda'));
        $employee1->setArrange(1);

        $employee2 = new Employee();
        $employee2->setName("Adrien");
        $employee2->setLastname("Heritier");
        $employee2->setJobTitle("Gérant");
        $employee2->setDescription("Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi.");
        $employee2->setImage($this->getReference('imageAdrien'));
        $employee2->setArrange(2);

        $employee3 = new Employee();
        $employee3->setName("Giles");
        $employee3->setLastname("JeSaisPas");
        $employee3->setJobTitle("Mecanicien");
        $employee3->setDescription("Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id officiis hic tenetur quae quaerat ad velit ab.");
        $employee3->setImage($this->getReference('imageGiles'));
        $employee3->setArrange(3);

        $manager->persist($employee1);
        $manager->persist($employee2);
        $manager->persist($employee3);

        $manager->flush();
    }

    public function getOrder()
    {
        return 2;
    }
}