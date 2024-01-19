<?php

namespace App\DataFixtures;

use App\Entity\Trainer;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // Nous permet d'avoir trois Henri dans notre table "foo" quand on lance 
        // php bin/console doctrine:fixtures:load
        for($i = 0; $i < 3; $i++) {
            $trainer = new Trainer();
            $trainer->setName('Heri');
            $trainer->setAddress('address ..');
            $trainer->setPhone('06 00 07');
            $trainer->setStar(rand(0, 10));
    
            $manager->persist($trainer);
        }
        $manager->flush();
    }
}
