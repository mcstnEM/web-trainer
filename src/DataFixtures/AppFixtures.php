<?php

namespace App\DataFixtures;

use App\Entity\Foo;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // Nous permet d'avoir trois Henri dans notre table "foo" quand on lance 
        // php bin/console doctrine:fixtures:load
        for($i = 0; $i < 3; $i++) {
            $foo = new Foo();
            $foo->setName('Heri');
            $foo->setBio('Lorem ipsum...');
    
            $manager->persist($foo);
        }
        $manager->flush();
    }
}
