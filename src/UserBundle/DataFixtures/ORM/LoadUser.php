<?php
/**
 * Created by PhpStorm.
 * User: LP
 * Date: 12/02/2017
 * Time: 15:03
 */

namespace UserBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use UserBundle\Entity\User;


class LoadUser extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $admin = new User();
        $admin
            ->setEmail('garage.heritier@gmail.com')
            ->setUsername('admin')
            ->setPlainPassword('admin')
            ->setRoles(array('ROLE_ADMIN'))
            ->setEnabled(true);

        $manager->persist($admin);

        $manager->flush();
    }

    public function getOrder()
    {
        return 2;
    }
}