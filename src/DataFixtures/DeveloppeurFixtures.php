<?php

namespace App\DataFixtures;

use App\Entity\Developpeur;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

/**
 * Class DeveloppeurFixtures.
 */
class DeveloppeurFixtures extends Fixture
{
    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param \Doctrine\Persistence\ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $faker = Factory::create();

        for ($i = 0 ; $i < 100 ; $i++){
            $dev = new Developpeur();
            $dev->setName($faker->name);
            $dev->setType($faker->title);
            $dev->setLastname($faker->lastName);
            $dev->setPoste('Développeur');

            $manager->persist($dev);
        }
        $manager->flush();
    }
}
