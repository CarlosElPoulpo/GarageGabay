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

    public function load(ObjectManager $manager)
    {
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

    }

    public function jpg($image, $imageName, $ext='.jpg')
    {
        $copiedImage = $this->imgPath.$imageName . '(1)' . $ext;
        copy($this->imgPath.$imageName . $ext, $copiedImage);
        $file = new UploadedFile($copiedImage,$imageName . $ext, null, null, null, true);
        $image->setFile($file);
    }

    public function getOrder()
    {
        return 1;
    }


}