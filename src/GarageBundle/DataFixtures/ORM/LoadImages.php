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
        $twingo = new Image();
        $this->jpg($twingo,'twingo');
        $manager->persist($twingo);

        $iconeTwingo = new Image();
        $this->jpg($iconeTwingo,'iconeTwingo','.jpeg');
        $manager->persist($iconeTwingo);
        //--------------------------------------
        $clio = new Image();
        $this->jpg($clio,'clio');
        $manager->persist($clio);

        $iconeClio = new Image();
        $this->jpg($iconeClio,'iconeClio','.jpeg');
        $manager->persist($iconeClio);
        //--------------------------------------
        $captur = new Image();
        $this->jpg($captur,'captur');
        $manager->persist($captur);

        $iconeCaptur = new Image();
        $this->jpg($iconeCaptur,'iconeCaptur','.jpeg');
        $manager->persist($iconeCaptur);
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

        $manager->flush();

        $this->addReference('imageTwingo', $twingo);
        $this->addReference('iconeTwingo', $iconeTwingo);
        $this->addReference('imageClio', $clio);
        $this->addReference('iconeClio', $iconeClio);
        $this->addReference('imageCaptur', $captur);
        $this->addReference('iconeCaptur', $iconeCaptur);

        $this->addReference('imageTrafic', $trafic);
        $this->addReference('iconeTrafic', $iconeTrafic);
        $this->addReference('imageKangoo', $kangoo);
        $this->addReference('iconeKangoo', $iconeKangoo);
        $this->addReference('imageMaster', $master);
        $this->addReference('iconeMaster', $iconeMaster);

        $this->addReference('imageZoe', $zoe);
        $this->addReference('iconeZoe', $iconeZoe);
        $this->addReference('imageKangooE', $kangooE);
        $this->addReference('iconeKangooE', $iconeKangooE);
        $this->addReference('imageMasterE', $masterE);
        $this->addReference('iconeMasterE', $iconeMasterE);
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