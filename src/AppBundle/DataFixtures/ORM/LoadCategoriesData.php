<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Categories;

class LoadCategoriesData implements FixtureInterface
{
    public function Load(ObjectManager $manager)
    {
        $worldTravel = new Categories();
        $worldTravel->setTitle('Voyage Monde');
        $manager->persist($worldTravel);

        $westUsa = new Categories();
        $westUsa->setTitle('West USA');
        $manager->persist($westUsa);

        $ueTravel = new Categories();
        $ueTravel->setTitle('Voyage Europe');
        $manager->persist($ueTravel);

        $franceTravel = new  Categories();
        $franceTravel->setTitle('Voyage France');
        $manager->persist($franceTravel);

        $news = new Categories();
        $news->setTitle('News');
        $manager->persist($news);

        $tips = new  Categories();
        $tips->setTitle('Bon Plans');
        $manager->persist($tips);

        $presentations = new  Categories();
        $presentations->setTitle('Présentation');
        $manager->persist($presentations);

        $manager->flush();



    }

}