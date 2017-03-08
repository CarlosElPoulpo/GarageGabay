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
use AppBundle\Entity\Promotion;
use AppBundle\Entity\PromotionNew;


class LoadPromotion extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $promoNew1 = new PromotionNew();
        $promoNew1
            ->setDiscount("30%")
            ->setStartDate(new \DateTime('2017-03-01'))
            ->setEndDate(new \DateTime('2017-03-08'));
        $promo1 = new Promotion();
        $promo1
            ->setTitle("La saison des pluies")
            ->setDescription("Venez profiter de notre offre spéciale sur les essui-glaces Bosch !")
            ->setPromotion($promoNew1)
            ->setImage($this->getReference('imageEssuiGlace'));

        $promoNew2 = new PromotionNew();
        $promoNew2
            ->setDiscount("25%")
            ->setStartDate(new \DateTime('2017-03-02'))
            ->setEndDate(new \DateTime('2017-03-09'));
        $promo2 = new Promotion();
        $promo2
            ->setTitle("Bonne année avec les pneus GoodYear")
            ->setDescription("Pour l'achat de 3 pneus GoodYear, le 4eme est offert !")
            ->setPromotion($promoNew2)
            ->setImage($this->getReference('imagePneusGY'));



        $manager->persist($promo1);
        $manager->persist($promo2);
        $manager->flush();
    }

    public function getOrder()
    {
        return 2;
    }
}