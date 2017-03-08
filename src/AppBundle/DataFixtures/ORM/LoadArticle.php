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
use AppBundle\Entity\Article;


class LoadArticle extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {

        $article1 = new Article();
        $article1
            ->setTitle("Essai du Renault Captur")
            ->setIntroduction("Le Captur, aussi agréable en ville que dans la forêt, nous l'avons testé pour vous.")
            ->setContent("<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus a magna quis magna luctus pharetra. In et elit vitae lacus molestie tempus sed nec risus. Morbi ultrices nibh sed porttitor rhoncus. Maecenas urna ex, congue ac urna a, interdum tristique arcu. Etiam ullamcorper mi nec pulvinar rutrum. Donec sit amet erat suscipit, blandit diam scelerisque, faucibus lacus. Proin blandit lacus elit, at commodo odio vestibulum sed. Nulla mauris diam, malesuada non nulla eu, commodo sollicitudin nunc. Praesent eget lorem sem.</p>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nulla orci, suscipit a tortor eget, porttitor interdum justo. Suspendisse vitae odio a elit euismod posuere. Pellentesque et lorem sit amet justo pulvinar lacinia. Etiam et suscipit turpis, a aliquam mi. Nam venenatis tortor in efficitur ullamcorper. Etiam nec ligula eget dolor facilisis luctus vitae eget orci. Suspendisse diam orci, finibus sit amet feugiat quis, congue vitae sem. Nunc sagittis rutrum mi, et accumsan lectus gravida quis. Vivamus vel eleifend turpis. Nullam tincidunt faucibus erat eu semper. Duis id lacus vitae arcu tempor tristique at eget leo. Donec pellentesque consectetur malesuada. Donec id malesuada sapien.</p>
             ")
            ->setCoverImage($this->getReference('imageArticleCaptur'))
            ->setWrittenBy("Adrien Heritier");

        $article2 = new Article();
        $article2
            ->setTitle("100% Electrique")
            ->setIntroduction("La semaine dernière nous avons eu l'occasion d'essayer la Zoe, venez découvir mon ressenti.")
            ->setContent("<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum pretium urna risus, at auctor lectus scelerisque lobortis. Etiam malesuada egestas ornare. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In malesuada mattis felis quis bibendum. Aliquam gravida est ex, ut convallis tellus mattis nec. In venenatis magna ornare, hendrerit purus sit amet, ornare metus. Curabitur varius ipsum nulla, efficitur mattis ex venenatis eget. Aenean tempus mi ac elit porta auctor. Mauris magna ex, hendrerit ut dapibus eu, aliquam vitae dolor. Maecenas vitae ipsum non arcu aliquet fermentum. Pellentesque sodales, diam at hendrerit ullamcorper, enim felis sodales sapien, id fringilla enim sem ac enim. Vivamus accumsan orci quam. Praesent quis lobortis libero. Maecenas massa purus, vestibulum a molestie in, dignissim quis ligula. Suspendisse justo ante, blandit nec mattis id, dignissim ut enim. Donec pharetra accumsan nisi, et cursus nisi iaculis vel.</p>
                          <p>Suspendisse ut rutrum lacus. Nulla iaculis, nunc vel vestibulum feugiat, diam lacus luctus turpis, eu vehicula mauris ipsum at nisi. Proin ullamcorper dui erat, id lobortis sapien scelerisque nec. Vivamus dictum vehicula condimentum. Curabitur consequat fermentum nisi, ut semper dolor cursus eu. Vivamus ut lacus dictum, facilisis velit a, hendrerit est. Duis tempor diam odio, non accumsan nunc cursus lacinia. Quisque eget blandit est. Aliquam sit amet nisl sed nunc ultricies posuere vel eget eros. Nunc vitae velit blandit purus interdum sollicitudin vitae ac neque. Vestibulum porta consectetur diam, ac imperdiet massa sagittis non.</p>
                          <p>Sed rutrum mattis ex varius ornare. Mauris porttitor gravida elit, non rutrum nulla consectetur sit amet. Ut laoreet, nunc eget imperdiet venenatis, urna eros mollis erat, a luctus enim dui a nunc. Vivamus ac ullamcorper est. Vestibulum convallis odio leo, in pellentesque augue consectetur non. Nullam non volutpat dolor, ac finibus diam. Donec consectetur pulvinar tincidunt. Pellentesque viverra laoreet massa, in pharetra turpis tempor vitae. Donec in lectus lectus. Donec ornare nisi justo, in cursus arcu vulputate a.</p>
            ")
            ->setCoverImage($this->getReference('imageArticleZoe'))
            ->setWrittenBy("Julien Heritier");


        $manager->persist($article1);
        $manager->persist($article2);
        $manager->flush();
    }

    public function getOrder()
    {
        return 2;
    }
}