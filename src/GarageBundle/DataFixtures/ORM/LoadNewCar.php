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
use GarageBundle\Entity\NewCar;
use ImageBundle\Entity\Image;
use Symfony\Component\HttpFoundation\File\UploadedFile;


class LoadNewCar extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        //---------------------Particuliers-------------------------
        $twingo = new NewCar();
        $twingo->setModel('TWINGO');
        $twingo->setTitle("Agile de corps et d'esprit");
        $twingo->setVehiculeType($this->getReference('vehiculeType-particulier'));
        $twingo->setPrice(11100);
        $twingo->setRenaultLink("https://www.renault.fr/vehicules/vehicules-particuliers/twingo.html");
        $twingo->addPartnership($this->getReference('partnership1'));
        $twingo->setPricePerMonth(158);
        $twingo->setDuration(49);
        $twingo->setCoverImage($this->getReference('imageTwingo'));
        $twingo->setIcone($this->getReference('iconeTwingo'));

        $clio = new NewCar();
        $clio->setModel('CLIO');
        $clio->setTitle("Instinct de séduction");
        $clio->setVehiculeType($this->getReference('vehiculeType-particulier'));
        $clio->setPrice(13800);
        $clio->setRenaultLink("https://www.renault.fr/vehicules/vehicules-particuliers/clio-berline.html");
        $clio->addPartnership($this->getReference('partnership1'));
        $clio->setPricePerMonth(215);
        $clio->setDuration(49);
        $clio->setCoverImage($this->getReference('imageClio'));
        $clio->setIcone($this->getReference('iconeClio'));

        $captur = new NewCar();
        $captur->setModel('CAPTUR');
        $captur->setTitle("Vivez l'instant");
        $captur->setVehiculeType($this->getReference('vehiculeType-particulier'));
        $captur->setPrice(16900);
        $captur->setRenaultLink("https://www.renault.fr/vehicules/vehicules-particuliers/captur.html");
        $captur->addPartnership($this->getReference('partnership1'));
        $captur->setPricePerMonth(257);
        $captur->setDuration(49);
        $captur->setCoverImage($this->getReference('imageCaptur'));
        $captur->setIcone($this->getReference('iconeCaptur'));

        //---------------------Utilitaires-------------------------

        $trafic = new NewCar();
        $trafic->setModel('TRAFIC');
        $trafic->setTitle("Le vrai talent c'est de durer !");
        $trafic->setVehiculeType($this->getReference('vehiculeType-utilitaire'));
        $trafic->setPrice(20600);
        $trafic->setRenaultLink("https://www.renault.fr/vehicules/vehicules-professionnels/trafic.html");
        $trafic->addPartnership($this->getReference('partnership2'));
        $trafic->addPartnership($this->getReference('partnership3'));
        $trafic->setPricePerMonth(366);
        $trafic->setDuration(60);
        $trafic->setCoverImage($this->getReference('imageTrafic'));
        $trafic->setIcone($this->getReference('iconeTrafic'));

        $kangoo = new NewCar();
        $kangoo->setModel('KANGOO Z.E.');
        $kangoo->setTitle("L'utilitaire autrement");
        $kangoo->setVehiculeType($this->getReference('vehiculeType-utilitaire'));
        $kangoo->setPrice(21050);
        $kangoo->setRenaultLink("https://www.renault.fr/vehicules/vehicules-electriques/kangoo-ze.html");
        $kangoo->addPartnership($this->getReference('partnership2'));
        $kangoo->addPartnership($this->getReference('partnership3'));
        $kangoo->setPricePerMonth(393);
        $kangoo->setDuration(60);
        $kangoo->setCoverImage($this->getReference('imageKangoo'));
        $kangoo->setIcone($this->getReference('iconeKangoo'));

        $master = new NewCar();
        $master->setModel('MASTER Fourgon');
        $master->setTitle("Un modèle pour vous, quels que soient vos besoins");
        $master->setVehiculeType($this->getReference('vehiculeType-utilitaire'));
        $master->setPrice(20600);
        $master->setRenaultLink("https://www.renault.fr/vehicules/vehicules-professionnels/master-fourgon.html");
        $master->addPartnership($this->getReference('partnership2'));
        $master->addPartnership($this->getReference('partnership3'));
        $master->setPricePerMonth(475);
        $master->setDuration(60);
        $master->setCoverImage($this->getReference('imageMaster'));
        $master->setIcone($this->getReference('iconeMaster'));

        //---------------------Electriques-------------------------

        $zoe = new NewCar();
        $zoe->setModel('Zoe');
        $zoe->setTitle("400 km NEDC*, 300 km en conditions réelles, 100 % électrique !");
        $zoe->setVehiculeType($this->getReference('vehiculeType-electrique'));
        $zoe->setPrice(23600);
        $zoe->setRenaultLink("https://www.renault.fr/vehicules/vehicules-electriques/zoe.html");
        $zoe->setCoverImage($this->getReference('imageZoe'));
        $zoe->setIcone($this->getReference('iconeZoe'));

        $kangooE = new NewCar();
        $kangooE->setModel('KANGOO Z.E.');
        $kangooE->setTitle("L'utilitaire autrement");
        $kangooE->setVehiculeType($this->getReference('vehiculeType-electrique'));
        $kangooE->setPrice(21050);
        $kangooE->setRenaultLink("https://www.renault.fr/vehicules/vehicules-electriques/kangoo-ze.html");
        $kangooE->addPartnership($this->getReference('partnership2'));
        $kangooE->addPartnership($this->getReference('partnership3'));
        $kangooE->setPricePerMonth(393);
        $kangooE->setDuration(60);
        $kangooE->setCoverImage($this->getReference('imageKangooE'));
        $kangooE->setIcone($this->getReference('iconeKangooE'));

        $masterE = new NewCar();
        $masterE->setModel('Nouveau MASTER Z.E');
        $masterE->setTitle("Le meilleur de l'utilitaire et du 100% électrique Renault réunis dans un grand fourgon.");
        $masterE->setVehiculeType($this->getReference('vehiculeType-electrique'));
        $masterE->setPrice(25000);
        $masterE->setRenaultLink("https://www.renault.fr/vehicules/vehicules-professionnels/master-ze-reveal.html");
        $masterE->setCoverImage($this->getReference('imageMasterE'));
        $masterE->setIcone($this->getReference('iconeMasterE'));


        $manager->persist($twingo);
        $manager->persist($clio);
        $manager->persist($captur);
        
        $manager->persist($trafic);
        $manager->persist($kangoo);
        $manager->persist($master);
        
        $manager->persist($zoe);
        $manager->persist($kangooE);
        $manager->persist($masterE);


        $manager->flush();
    }

    public function getOrder()
    {
        return 2;
    }
}