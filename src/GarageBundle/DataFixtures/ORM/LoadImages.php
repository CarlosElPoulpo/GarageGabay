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
use ImageBundle\Entity\Image;
use Symfony\Component\HttpFoundation\File\UploadedFile;


class LoadImages extends AbstractFixture implements OrderedFixtureInterface
{
    private $imgPath = __DIR__ .'/../../../../'.'web/media/imgFixtures/';
    private $imgpath_services = __DIR__ .'/../../../../'.'web/media/imgFixtures/services/';

    public function load(ObjectManager $manager)
    {
        /*VEHICULES NEUFS*/
        //--------------------------------------
        // PARTICULIER
        //--------------------------------------
        $twingo = new Image();
        $this->jpg($twingo,'twingo');
        $manager->persist($twingo);

        $iconeTwingo = new Image();
        $this->jpg($iconeTwingo,'iconeTwingo','.jpeg');
        $manager->persist($iconeTwingo);
        //--------------------------------------
        $zoeP = new Image();
        $this->jpg($zoeP,'zoeP');
        $manager->persist($zoeP);

        $iconeZoeP = new Image();
        $this->jpg($iconeZoeP,'iconeZoeP','.jpeg');
        $manager->persist($iconeZoeP);
        //--------------------------------------

        $clio = new Image();
        $this->jpg($clio,'clio');
        $manager->persist($clio);

        $iconeClio = new Image();
        $this->jpg($iconeClio,'iconeClio','.jpeg');
        $manager->persist($iconeClio);
        //--------------------------------------
        $clioEstate = new Image();
        $this->jpg($clioEstate,'clioEstate');
        $manager->persist($clioEstate);

        $iconeClioEstate = new Image();
        $this->jpg($iconeClioEstate,'iconeClioEstate','.jpeg');
        $manager->persist($iconeClioEstate);
        //--------------------------------------
        $kangooP = new Image();
        $this->jpg($kangooP,'kangooP');
        $manager->persist($kangooP);

        $iconeKangooP = new Image();
        $this->jpg($iconeKangooP,'iconeKangooP','.jpeg');
        $manager->persist($iconeKangooP);
        //--------------------------------------
        $captur = new Image();
        $this->jpg($captur,'captur');
        $manager->persist($captur);

        $iconeCaptur = new Image();
        $this->jpg($iconeCaptur,'iconeCaptur','.jpeg');
        $manager->persist($iconeCaptur);
        //--------------------------------------
        $megane = new Image();
        $this->jpg($megane,'megane');
        $manager->persist($megane);

        $iconeMegane = new Image();
        $this->jpg($iconeMegane,'iconeMegane','.jpeg');
        $manager->persist($iconeMegane);
        //--------------------------------------
        $meganeEstate = new Image();
        $this->jpg($meganeEstate,'meganeEstate','.jpeg');
        $manager->persist($meganeEstate);

        $iconeMeganeEstate = new Image();
        $this->jpg($iconeMeganeEstate,'iconeMeganeEstate','.jpeg');
        $manager->persist($iconeMeganeEstate);
        //--------------------------------------
        $scenic = new Image();
        $this->jpg($scenic,'scenic');
        $manager->persist($scenic);

        $iconeScenic = new Image();
        $this->jpg($iconeScenic,'iconeScenic','.jpeg');
        $manager->persist($iconeScenic);
        //--------------------------------------
        $grandScenic = new Image();
        $this->jpg($grandScenic,'grandScenic');
        $manager->persist($grandScenic);

        $iconeGrandScenic = new Image();
        $this->jpg($iconeGrandScenic,'iconeGrandScenic','.jpeg');
        $manager->persist($iconeGrandScenic);
        //--------------------------------------
        $kadjar = new Image();
        $this->jpg($kadjar,'kadjar');
        $manager->persist($kadjar);

        $iconeKadjar = new Image();
        $this->jpg($iconeKadjar,'iconeKadjar','.jpeg');
        $manager->persist($iconeKadjar);
        //--------------------------------------
        $talisman = new Image();
        $this->jpg($talisman,'talisman');
        $manager->persist($talisman);

        $iconeTalisman = new Image();
        $this->jpg($iconeTalisman,'iconeTalisman','.jpeg');
        $manager->persist($iconeTalisman);
        //--------------------------------------
        $talismanEstate = new Image();
        $this->jpg($talismanEstate,'talismanEstate');
        $manager->persist($talismanEstate);

        $iconeTalismanEstate = new Image();
        $this->jpg($iconeTalismanEstate,'iconeTalismanEstate','.jpeg');
        $manager->persist($iconeTalismanEstate);
        //--------------------------------------
        $espace = new Image();
        $this->jpg($espace,'espace');
        $manager->persist($espace);

        $iconeEspace = new Image();
        $this->jpg($iconeEspace,'iconeEspace','.jpeg');
        $manager->persist($iconeEspace);
        //--------------------------------------
        $traficCombi = new Image();
        $this->jpg($traficCombi,'traficCombi');
        $manager->persist($traficCombi);

        $iconeTraficCombi = new Image();
        $this->jpg($iconeTraficCombi,'iconeTraficCombi','.jpeg');
        $manager->persist($iconeTraficCombi);
        //--------------------------------------
        // UTILITAIRE
        //--------------------------------------
        $trafic = new Image();
        $this->jpg($trafic,'trafic');
        $manager->persist($trafic);

        $iconeTrafic = new Image();
        $this->jpg($iconeTrafic,'iconeTrafic','.jpeg');
        $manager->persist($iconeTrafic);
        //--------------------------------------
        $kangoo = new Image();
        $this->jpg($kangoo,'kangoo');
        $manager->persist($kangoo);

        $iconeKangoo = new Image();
        $this->jpg($iconeKangoo,'iconeKangoo','.jpeg');
        $manager->persist($iconeKangoo);
        //--------------------------------------
        $master = new Image();
        $this->jpg($master,'masterFourgon');
        $manager->persist($master);

        $iconeMaster = new Image();
        $this->jpg($iconeMaster,'iconeMasterFourgon','.jpeg');
        $manager->persist($iconeMaster);
        //--------------------------------------
        //--------------------------------------
        $kangooExpress = new Image();
        $this->jpg($kangooExpress,'kangooExpress');
        $manager->persist($kangooExpress);

        $iconeKangooExpress = new Image();
        $this->jpg($iconeKangooExpress,'iconeKangooExpress','.jpeg');
        $manager->persist($iconeKangooExpress);
        //--------------------------------------
        $masterCabine = new Image();
        $this->jpg($masterCabine,'masterCabine');
        $manager->persist($masterCabine);

        $iconeMasterCabine = new Image();
        $this->jpg($iconeMasterCabine,'iconeMasterCabine','.jpeg');
        $manager->persist($iconeMasterCabine);
        //--------------------------------------
        $masterGrandVolume = new Image();
        $this->jpg($masterGrandVolume,'masterGrandVolume');
        $manager->persist($masterGrandVolume);

        $iconeMasterGrandVolume = new Image();
        $this->jpg($iconeMasterGrandVolume,'iconeMasterGrandVolume','.jpeg');
        $manager->persist($iconeMasterGrandVolume);
        //--------------------------------------
        $masterTransportsOuverts = new Image();
        $this->jpg($masterTransportsOuverts,'masterTransportsOuverts');
        $manager->persist($masterTransportsOuverts);

        $iconeMasterTransportsOuverts = new Image();
        $this->jpg($iconeMasterTransportsOuverts,'iconeMasterTransportsOuverts','.jpeg');
        $manager->persist($iconeMasterTransportsOuverts);
        //--------------------------------------
        $nouveauMasterZEU = new Image();
        $this->jpg($nouveauMasterZEU,'nouveauMasterZEU');
        $manager->persist($nouveauMasterZEU);

        $iconeNouveauMasterZEU = new Image();
        $this->jpg($iconeNouveauMasterZEU,'iconeNouveauMasterZEU','.jpeg');
        $manager->persist($iconeNouveauMasterZEU);
        //--------------------------------------
        $nouveauKangooZEU = new Image();
        $this->jpg($nouveauKangooZEU,'nouveauKangooZEU');
        $manager->persist($nouveauKangooZEU);

        $iconeNouveauKangooZEU = new Image();
        $this->jpg($iconeNouveauKangooZEU,'iconeNouveauKangooZEU','.jpeg');
        $manager->persist($iconeNouveauKangooZEU);
        //--------------------------------------
        // ELECTRIQUE
        //--------------------------------------
        $zoe = new Image();
        $this->jpg($zoe,'zoe');
        $manager->persist($zoe);

        $iconeZoe = new Image();
        $this->jpg($iconeZoe,'iconeZoe','.jpeg');
        $manager->persist($iconeZoe);
        //--------------------------------------
        $kangooE = new Image();
        $this->jpg($kangooE,'kangooE');
        $manager->persist($kangooE);

        $iconeKangooE = new Image();
        $this->jpg($iconeKangooE,'iconeKangooE','.jpeg');
        $manager->persist($iconeKangooE);
        //--------------------------------------
        $masterE = new Image();
        $this->jpg($masterE,'masterE');
        $manager->persist($masterE);

        $iconeMasterE = new Image();
        $this->jpg($iconeMasterE,'iconeMasterE','.jpeg');
        $manager->persist($iconeMasterE);
        //--------------------------------------
        $twizy = new Image();
        $this->jpg($twizy,'twizy');
        $manager->persist($twizy);

        $iconeTwizy = new Image();
        $this->jpg($iconeTwizy,'iconeTwizy','.jpeg');
        $manager->persist($iconeTwizy);
        //--------------------------------------
        $twizyCargo = new Image();
        $this->jpg($twizyCargo,'twizyCargo');
        $manager->persist($twizyCargo);

        $iconeTwizyCargo = new Image();
        $this->jpg($iconeTwizyCargo,'iconeTwizyCargo','.jpeg');
        $manager->persist($iconeTwizyCargo);
        //--------------------------------------
        $nouveauKangooZE = new Image();
        $this->jpg($nouveauKangooZE,'nouveauKangooZE');
        $manager->persist($nouveauKangooZE);

        $iconeNouveauKangooZE = new Image();
        $this->jpg($iconeNouveauKangooZE,'iconeNouveauKangooZE','.jpeg');
        $manager->persist($iconeNouveauKangooZE);

        $manager->flush();

        $this->addReference('imageTwingo', $twingo);
        $this->addReference('iconeTwingo', $iconeTwingo);
        $this->addReference('imageZoeP', $zoeP);
        $this->addReference('iconeZoeP', $iconeZoeP);
        $this->addReference('imageClio', $clio);
        $this->addReference('iconeClio', $iconeClio);
        $this->addReference('imageClioEstate', $clioEstate);
        $this->addReference('iconeClioEstate', $iconeClioEstate);
        $this->addReference('imageCaptur', $captur);
        $this->addReference('iconeCaptur', $iconeCaptur);
        $this->addReference('imageKangooP', $kangooP);
        $this->addReference('iconeKangooP', $iconeKangooP);
        $this->addReference('imageMegane', $megane);
        $this->addReference('iconeMegane', $iconeMegane);
        $this->addReference('imageMeganeEstate', $meganeEstate);
        $this->addReference('iconeMeganeEstate', $iconeMeganeEstate);
        $this->addReference('imageScenic', $scenic);
        $this->addReference('iconeScenic', $iconeScenic);
        $this->addReference('imageGrandScenic', $grandScenic);
        $this->addReference('iconeGrandScenic', $iconeGrandScenic);
        $this->addReference('imageKadjar', $kadjar);
        $this->addReference('iconeKadjar', $iconeKadjar);
        $this->addReference('imageTalisman', $talisman);
        $this->addReference('iconeTalisman', $iconeTalisman);
        $this->addReference('imageTalismanEstate', $talismanEstate);
        $this->addReference('iconeTalismanEstate', $iconeTalismanEstate);
        $this->addReference('imageEspace', $espace);
        $this->addReference('iconeEspace', $iconeEspace);
        $this->addReference('imageTraficCombi', $traficCombi);
        $this->addReference('iconeTraficCombi', $iconeTraficCombi);


        $this->addReference('imageTrafic', $trafic);
        $this->addReference('iconeTrafic', $iconeTrafic);
        $this->addReference('imageKangoo', $kangoo);
        $this->addReference('iconeKangoo', $iconeKangoo);
        $this->addReference('imageMaster', $master);
        $this->addReference('iconeMaster', $iconeMaster);

        $this->addReference('imageKangooExpress', $kangooExpress);
        $this->addReference('iconeKangooExpress', $iconeKangooExpress);
        $this->addReference('imageMasterCabine', $masterCabine);
        $this->addReference('iconeMasterCabine', $iconeMasterCabine);
        $this->addReference('imageMasterGrandVolume', $masterGrandVolume);
        $this->addReference('iconeMasterGrandVolume', $iconeMasterGrandVolume);
        $this->addReference('imageMasterTransportsOuverts', $masterTransportsOuverts);
        $this->addReference('iconeMasterTransportsOuverts', $iconeMasterTransportsOuverts);
        $this->addReference('imageNouveauMasterZEU', $nouveauMasterZEU);
        $this->addReference('iconeNouveauMasterZEU', $iconeNouveauMasterZEU);
        $this->addReference('imageNouveauKangooZEU', $nouveauKangooZEU);
        $this->addReference('iconeNouveauKangooZEU', $iconeNouveauKangooZEU);

        $this->addReference('imageZoe', $zoe);
        $this->addReference('iconeZoe', $iconeZoe);
        $this->addReference('imageKangooE', $kangooE);
        $this->addReference('iconeKangooE', $iconeKangooE);
        $this->addReference('imageMasterE', $masterE);
        $this->addReference('iconeMasterE', $iconeMasterE);
        $this->addReference('imageTwizy', $twizy);
        $this->addReference('iconeTwizy', $iconeTwizy);
        $this->addReference('imageTwizyCargo', $twizyCargo);
        $this->addReference('iconeTwizyCargo', $iconeTwizyCargo);
        $this->addReference('imageNouveauKangooZE', $nouveauKangooZE);
        $this->addReference('iconeNouveauKangooZE', $iconeNouveauKangooZE);
        /*END VEHICULES NEUFS*/

        /*SERVICES ICONS*/
        $moteur = new Image();
        $this->svg($moteur,'engine');
        $manager->persist($moteur);

        $parallelisme = new Image();
        $this->svg($parallelisme,'chassis');
        $manager->persist($parallelisme);

        $pneus = new Image();
        $this->svg($pneus,'wheel');
        $manager->persist($pneus);

        $echappement = new Image();
        $this->svg($echappement,'exhaust-pipe');
        $manager->persist($echappement);

        $immatriculation = new Image();
        $this->svg($immatriculation,'license-plate');
        $manager->persist($immatriculation);

        $suspensions = new Image();
        $this->svg($suspensions,'suspension');
        $manager->persist($suspensions);

        $climatisation = new Image();
        $this->svg($climatisation,'snowflake');
        $manager->persist($climatisation);

        $batterie = new Image();
        $this->svg($batterie,'battery');
        $manager->persist($batterie);

        $this->addReference('icon_moteur', $moteur);
        $this->addReference('icon_parallelisme', $parallelisme);
        $this->addReference('icon_pneus', $pneus);
        $this->addReference('icon_echappement', $echappement);
        $this->addReference('icon_immatriculation', $immatriculation);
        $this->addReference('icon_suspensions', $suspensions);
        $this->addReference('icon_climatisation', $climatisation);
        $this->addReference('icon_batterie', $batterie);
        /*END SERVICES ICONS*/

        /*GARAGE IMAGE*/
        $garage = new Image();
        $this->jpg($garage,'garage');
        $manager->persist($garage);

        $this->addReference('image_garage', $garage);
        /*END GARAGE IMAGE*/

        /*HOMEPAGE*/
        $indexFullScreen = new Image();
        $this->jpg($indexFullScreen, 'index-full-screen');
        $manager->persist($indexFullScreen);
        $this->addReference('imageIndexFullScreen', $indexFullScreen);
        /*END HOMEPAGE*/

        /*EMPLOYEES*/
        $adrien = new Image();
        $this->jpg($adrien, 'adrien');
        $manager->persist($adrien);
        $this->addReference('imageAdrien', $adrien);

        $djuda = new Image();
        $this->jpg($djuda, 'djuda');
        $manager->persist($djuda);
        $this->addReference('imageDjuda', $djuda);

        $giles = new Image();
        $this->jpg($giles, 'giles','.jpeg');
        $manager->persist($giles);
        $this->addReference('imageGiles', $giles);
        /*END EMPLOYEES*/

        /* PROMOTION */
        $essuiGlace = new Image();
        $this->jpg($essuiGlace, 'essuiGlace', '.jpeg');
        $manager->persist($essuiGlace);
        $this->addReference('imageEssuiGlace', $essuiGlace);

        $pneusGY = new Image();
        $this->jpg($pneusGY, 'pneus');
        $manager->persist($pneusGY);
        $this->addReference('imagePneusGY', $pneusGY);
        /*END PROMOTION */

        /* ARTICLE */
        $articleCaptur = new Image();
        $this->jpg($articleCaptur, 'captur');
        $manager->persist($articleCaptur);
        $this->addReference('imageArticleCaptur', $articleCaptur);

        $articleZoe = new Image();
        $this->jpg($articleZoe, 'zoe');
        $manager->persist($articleZoe);
        $this->addReference('imageArticleZoe', $articleZoe);
        /*END ARTICLE */

    }

    public function jpg($image, $imageName, $ext='.jpg')
    {
        $copiedImage = $this->imgPath.$imageName . '(1)' . $ext;
        copy($this->imgPath.$imageName . $ext, $copiedImage);
        $file = new UploadedFile($copiedImage,$imageName . $ext, null, null, null, true);
        $image->setFile($file);
    }

    public function svg($image, $imageName, $ext='.svg')
    {
        $copiedImage = $this->imgpath_services.$imageName . '(1)' . $ext;
        copy($this->imgpath_services.$imageName . $ext, $copiedImage);
        $file = new UploadedFile($copiedImage,$imageName . $ext, null, null, null, true);
        $image->setFile($file);
    }

    public function getOrder()
    {
        return 1;
    }


}