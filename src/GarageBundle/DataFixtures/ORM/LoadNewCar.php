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

        $zoeP = new NewCar();
        $zoeP->setModel('Nouvelle ZOE');
        $zoeP->setTitle("400 km NEDC*, 300 km en conditions réelles, 100 % électrique !");
        $zoeP->setVehiculeType($this->getReference('vehiculeType-particulier'));
        $zoeP->setPrice(17600);
        $zoeP->setRenaultLink("https://www.renault.fr/vehicules/vehicules-electriques/zoe.html");
        $zoeP->addPartnership($this->getReference('partnership1'));
        $zoeP->setCoverImage($this->getReference('imageZoeP'));
        $zoeP->setIcone($this->getReference('iconeZoeP'));

        $clio = new NewCar();
        $clio->setModel('Nouvelle CLIO');
        $clio->setTitle("Instinct de séduction");
        $clio->setVehiculeType($this->getReference('vehiculeType-particulier'));
        $clio->setPrice(13800);
        $clio->setRenaultLink("https://www.renault.fr/vehicules/vehicules-particuliers/clio-berline.html");
        $clio->addPartnership($this->getReference('partnership1'));
        $clio->setPricePerMonth(215);
        $clio->setDuration(49);
        $clio->setCoverImage($this->getReference('imageClio'));
        $clio->setIcone($this->getReference('iconeClio'));

        $clioEstate = new NewCar();
        $clioEstate->setModel('Nouvelle CLIO Estate');
        $clioEstate->setTitle("Plus de place à la passion");
        $clioEstate->setVehiculeType($this->getReference('vehiculeType-particulier'));
        $clioEstate->setPrice(14400);
        $clioEstate->setRenaultLink("https://www.renault.fr/vehicules/vehicules-particuliers/clio-estate.html");
        $clioEstate->addPartnership($this->getReference('partnership1'));
        $clioEstate->setPricePerMonth(226);
        $clioEstate->setDuration(49);
        $clioEstate->setCoverImage($this->getReference('imageClioEstate'));
        $clioEstate->setIcone($this->getReference('iconeClioEstate'));

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

        $kangooP = new NewCar();
        $kangooP->setModel('KANGOO');
        $kangooP->setTitle("Le ludospace des familles exigeantes");
        $kangooP->setVehiculeType($this->getReference('vehiculeType-particulier'));
        $kangooP->setPrice(20050);
        $kangooP->setRenaultLink("https://www.renault.fr/vehicules/vehicules-particuliers/kangoo.html");
        $kangooP->addPartnership($this->getReference('partnership1'));
        $kangooP->setPricePerMonth(307);
        $kangooP->setDuration(49);
        $kangooP->setCoverImage($this->getReference('imageKangooP'));
        $kangooP->setIcone($this->getReference('iconeKangooP'));

        $megane = new NewCar();
        $megane->setModel('MEGANE');
        $megane->setTitle("Notre technologie, votre réussite");
        $megane->setVehiculeType($this->getReference('vehiculeType-particulier'));
        $megane->setPrice(19200);
        $megane->setRenaultLink("https://www.renault.fr/vehicules/vehicules-particuliers/megane-berline.html");
        $megane->addPartnership($this->getReference('partnership1'));
        $megane->setPricePerMonth(276);
        $megane->setDuration(49);
        $megane->setCoverImage($this->getReference('imageMegane'));
        $megane->setIcone($this->getReference('iconeMegane'));

        $meganeEstate = new NewCar();
        $meganeEstate->setModel('Nouvelle MEGANE Estate');
        $meganeEstate->setTitle("Notre technologie, votre réussite");
        $meganeEstate->setVehiculeType($this->getReference('vehiculeType-particulier'));
        $meganeEstate->setPrice(20100);
        $meganeEstate->setRenaultLink("https://www.renault.fr/vehicules/vehicules-particuliers/megane-estate.html");
        $meganeEstate->addPartnership($this->getReference('partnership1'));
        $meganeEstate->setPricePerMonth(319);
        $meganeEstate->setDuration(49);
        $meganeEstate->setCoverImage($this->getReference('imageMeganeEstate'));
        $meganeEstate->setIcone($this->getReference('iconeMeganeEstate'));

        $scenic = new NewCar();
        $scenic->setModel('Nouveau SCENIC');
        $scenic->setTitle("Réinventons le Quotidien");
        $scenic->setVehiculeType($this->getReference('vehiculeType-particulier'));
        $scenic->setPrice(24000);
        $scenic->setRenaultLink("https://www.renault.fr/vehicules/vehicules-particuliers/scenic.html");
        $scenic->addPartnership($this->getReference('partnership1'));
        $scenic->setPricePerMonth(386);
        $scenic->setDuration(48);
        $scenic->setCoverImage($this->getReference('imageScenic'));
        $scenic->setIcone($this->getReference('iconeScenic'));

        $grandScenic = new NewCar();
        $grandScenic->setModel('Nouveau Grand SCENIC');
        $grandScenic->setTitle("Réinventons le Quotidien");
        $grandScenic->setVehiculeType($this->getReference('vehiculeType-particulier'));
        $grandScenic->setPrice(25300);
        $grandScenic->setRenaultLink("https://www.renault.fr/vehicules/vehicules-particuliers/grand-scenic.html");
        $grandScenic->addPartnership($this->getReference('partnership1'));
        $grandScenic->setPricePerMonth(401);
        $grandScenic->setDuration(49);
        $grandScenic->setCoverImage($this->getReference('imageGrandScenic'));
        $grandScenic->setIcone($this->getReference('iconeGrandScenic'));

        $kadjar = new NewCar();
        $kadjar->setModel('KADJAR');
        $kadjar->setTitle("Vivez plus fort");
        $kadjar->setVehiculeType($this->getReference('vehiculeType-particulier'));
        $kadjar->setPrice(24400);
        $kadjar->setRenaultLink("https://www.renault.fr/vehicules/vehicules-particuliers/kadjar.html");
        $kadjar->addPartnership($this->getReference('partnership1'));
        $kadjar->setPricePerMonth(342);
        $kadjar->setDuration(49);
        $kadjar->setCoverImage($this->getReference('imageKadjar'));
        $kadjar->setIcone($this->getReference('iconeKadjar'));

        $talisman = new NewCar();
        $talisman->setModel('TALISMAN');
        $talisman->setTitle("Maîtrisez votre trajectoire");
        $talisman->setVehiculeType($this->getReference('vehiculeType-particulier'));
        $talisman->setPrice(28500);
        $talisman->setRenaultLink("https://www.renault.fr/vehicules/vehicules-particuliers/talisman.html");
        $talisman->addPartnership($this->getReference('partnership1'));
        $talisman->setPricePerMonth(469);
        $talisman->setDuration(49);
        $talisman->setCoverImage($this->getReference('imageTalisman'));
        $talisman->setIcone($this->getReference('iconeTalisman'));

        $talismanEstate = new NewCar();
        $talismanEstate->setModel('TALISMAN Estate');
        $talismanEstate->setTitle("Maîtrisez votre trajectoire");
        $talismanEstate->setVehiculeType($this->getReference('vehiculeType-particulier'));
        $talismanEstate->setPrice(29700);
        $talismanEstate->setRenaultLink("https://www.renault.fr/vehicules/vehicules-particuliers/talisman-estate.html");
        $talismanEstate->addPartnership($this->getReference('partnership1'));
        $talismanEstate->setPricePerMonth(439);
        $talismanEstate->setDuration(49);
        $talismanEstate->setCoverImage($this->getReference('imageTalismanEstate'));
        $talismanEstate->setIcone($this->getReference('iconeTalismanEstate'));

        $espace = new NewCar();
        $espace->setModel('Espace');
        $espace->setTitle("Le temps vous appartient");
        $espace->setVehiculeType($this->getReference('vehiculeType-particulier'));
        $espace->setPrice(35700);
        $espace->setRenaultLink("https://www.renault.fr/vehicules/vehicules-particuliers/espace.html");
        $espace->addPartnership($this->getReference('partnership1'));
        $espace->setPricePerMonth(525);
        $espace->setDuration(49);
        $espace->setCoverImage($this->getReference('imageEspace'));
        $espace->setIcone($this->getReference('iconeEspace'));

        $traficCombi = new NewCar();
        $traficCombi->setModel('TRAFIC Combi');
        $traficCombi->setTitle("Invitation au voyage");
        $traficCombi->setVehiculeType($this->getReference('vehiculeType-particulier'));
        $traficCombi->setPrice(29950);
        $traficCombi->setRenaultLink("https://www.renault.fr/vehicules/vehicules-particuliers/trafic-combi.html");
        $traficCombi->addPartnership($this->getReference('partnership1'));
        $traficCombi->setPricePerMonth(481);
        $traficCombi->setDuration(49);
        $traficCombi->setCoverImage($this->getReference('imageTraficCombi'));
        $traficCombi->setIcone($this->getReference('iconeTraficCombi'));

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

        $kangooExpress = new NewCar();
        $kangooExpress->setModel('KANGOO Express');
        $kangooExpress->setTitle("L'utilitaire sur-mesure pour les professionnels exigeants");
        $kangooExpress->setVehiculeType($this->getReference('vehiculeType-utilitaire'));
        $kangooExpress->setPrice(13600);
        $kangooExpress->setRenaultLink("https://www.renault.fr/vehicules/vehicules-professionnels/kangoo-express.html");
        $kangooExpress->setPricePerMonth(241);
        $kangooExpress->setDuration(60);
        $kangooExpress->setCoverImage($this->getReference('imageKangooExpress'));
        $kangooExpress->setIcone($this->getReference('iconeKangooExpress'));

        $masterCabine = new NewCar();
        $masterCabine->setModel('MASTER Cabine Approfondie');
        $masterCabine->setTitle("Un modèle pour vous, quels que soient vos besoins");
        $masterCabine->setVehiculeType($this->getReference('vehiculeType-utilitaire'));
        $masterCabine->setPrice(30950);
        $masterCabine->setRenaultLink("https://www.renault.fr/vehicules/vehicules-professionnels/master-cabine-approfondie.html");
        $masterCabine->setPricePerMonth(549);
        $masterCabine->setDuration(60);
        $masterCabine->setCoverImage($this->getReference('imageMasterCabine'));
        $masterCabine->setIcone($this->getReference('iconeMasterCabine'));

        $masterGrandVolume = new NewCar();
        $masterGrandVolume->setModel('MASTER Grand Volume');
        $masterGrandVolume->setTitle("Un modèle pour vous, quels que soient vos besoins");
        $masterGrandVolume->setVehiculeType($this->getReference('vehiculeType-utilitaire'));
        $masterGrandVolume->setPrice(41220);
        $masterGrandVolume->setRenaultLink("https://www.renault.fr/vehicules/vehicules-professionnels/master-grand-volume.html");
        $masterGrandVolume->setPricePerMonth(734);
        $masterGrandVolume->setDuration(60);
        $masterGrandVolume->setCoverImage($this->getReference('imageMasterGrandVolume'));
        $masterGrandVolume->setIcone($this->getReference('iconeMasterGrandVolume'));

        $masterTransportsOuverts = new NewCar();
        $masterTransportsOuverts->setModel('MASTER Transports ouverts');
        $masterTransportsOuverts->setTitle("Un modèle pour vous, quels que soient vos besoins");
        $masterTransportsOuverts->setVehiculeType($this->getReference('vehiculeType-utilitaire'));
        $masterTransportsOuverts->setPrice(28300);
        $masterTransportsOuverts->setRenaultLink("https://www.renault.fr/vehicules/vehicules-professionnels/master-transport-ouvert.html");
        $masterTransportsOuverts->setPricePerMonth(502);
        $masterTransportsOuverts->setDuration(60);
        $masterTransportsOuverts->setCoverImage($this->getReference('imageMasterTransportsOuverts'));
        $masterTransportsOuverts->setIcone($this->getReference('iconeMasterTransportsOuverts'));

        $nouveauMasterZEU = new NewCar();
        $nouveauMasterZEU->setModel('Nouveau MASTER Z.E.');
        $nouveauMasterZEU->setTitle("Le meilleur de l'utilitaire et du 100% électrique Renault réunis dans un grand fourgon.");
        $nouveauMasterZEU->setVehiculeType($this->getReference('vehiculeType-utilitaire'));
        $nouveauMasterZEU->setPrice(0);
        $nouveauMasterZEU->setRenaultLink("https://www.renault.fr/vehicules/vehicules-professionnels/master-ze-reveal.html");
        $nouveauMasterZEU->setCoverImage($this->getReference('imageNouveauMasterZEU'));
        $nouveauMasterZEU->setIcone($this->getReference('iconeNouveauMasterZEU'));

        $nouveauKangooZEU = new NewCar();
        $nouveauKangooZEU->setModel('Nouveau KANGOO Z.E.');
        $nouveauKangooZEU->setTitle("270km NEDC*, 200km en conditions réelles, 100% électrique !");
        $nouveauKangooZEU->setVehiculeType($this->getReference('vehiculeType-utilitaire'));
        $nouveauKangooZEU->setPrice(0);
        $nouveauKangooZEU->setRenaultLink("https://www.renault.fr/vehicules/vehicules-electriques/kangoo-ze-reveal.html");
        $nouveauKangooZEU->setCoverImage($this->getReference('imageNouveauKangooZEU'));
        $nouveauKangooZEU->setIcone($this->getReference('iconeNouveauKangooZEU'));

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

        $twizy = new NewCar();
        $twizy->setModel('TWIZY');
        $twizy->setTitle("Fun au quotidien");
        $twizy->setVehiculeType($this->getReference('vehiculeType-electrique'));
        $twizy->setPrice(7440);
        $twizy->setRenaultLink("https://www.renault.fr/vehicules/vehicules-electriques/twizy.html");
        $twizy->setPricePerMonth(120);
        $twizy->setDuration(48);
        $twizy->setCoverImage($this->getReference('imageTwizy'));
        $twizy->setIcone($this->getReference('iconeTwizy'));

        $twizyCargo = new NewCar();
        $twizyCargo->setModel('TWIZY Cargo');
        $twizyCargo->setTitle("Le quadricycle 100% électrique qui a du coffre !");
        $twizyCargo->setVehiculeType($this->getReference('vehiculeType-electrique'));
        $twizyCargo->setPrice(0);
        $twizyCargo->setRenaultLink("https://www.renault.fr/vehicules/vehicules-electriques/twizy/twizy-cargo.html");
        $twizyCargo->setCoverImage($this->getReference('imageTwizyCargo'));
        $twizyCargo->setIcone($this->getReference('iconeTwizyCargo'));

        $nouveauKangooZE = new NewCar();
        $nouveauKangooZE->setModel('Nouveau KANGOO Z.E.');
        $nouveauKangooZE->setTitle("270km NEDC*, 200km en conditions réelles, 100% électrique !");
        $nouveauKangooZE->setVehiculeType($this->getReference('vehiculeType-electrique'));
        $nouveauKangooZE->setPrice(0);
        $nouveauKangooZE->setRenaultLink("https://www.renault.fr/vehicules/vehicules-electriques/kangoo-ze-reveal.html");
        $nouveauKangooZE->setCoverImage($this->getReference('imageNouveauKangooZE'));
        $nouveauKangooZE->setIcone($this->getReference('iconeNouveauKangooZE'));

        $manager->persist($twingo);
        $manager->persist($zoeP);
        $manager->persist($clio);
        $manager->persist($clioEstate);
        $manager->persist($captur);
        $manager->persist($kangooP);
        $manager->persist($megane);
        $manager->persist($meganeEstate);
        $manager->persist($scenic);
        $manager->persist($grandScenic);
        $manager->persist($kadjar);
        $manager->persist($talisman);
        $manager->persist($talismanEstate);
        $manager->persist($espace);
        $manager->persist($traficCombi);

        $manager->persist($kangoo);
        $manager->persist($kangooExpress);
        $manager->persist($trafic);
        $manager->persist($master);
        $manager->persist($masterCabine);
        $manager->persist($masterGrandVolume);
        $manager->persist($masterTransportsOuverts);
        $manager->persist($nouveauMasterZEU);
        $manager->persist($nouveauKangooZEU);

        $manager->persist($zoe);
        $manager->persist($kangooE);
        $manager->persist($twizy);
        $manager->persist($twizyCargo);
        $manager->persist($masterE);
        $manager->persist($nouveauKangooZE);


        $manager->flush();
    }

    public function getOrder()
    {
        return 2;
    }
}