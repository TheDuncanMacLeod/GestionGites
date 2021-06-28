<?php

namespace App\DataFixtures;

use Faker;
use App\Entity\Gite;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class GiteFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Faker\Factory::create('fr_FR');

        for ($i=0; $i <= 150; $i++) { 
            $gite = new Gite();
            $gite 
                ->setName($faker->word())
                ->setDescription($faker->text(100))
                ->setSurface($faker->numberBetween(50,300))
                ->setBedrooms($faker->numberBetween(1,5))
                ->setAdress($faker->streetAddress())
                ->setCity($faker->city())
                ->setPostalCode($faker->numberBetween(10000,96000))
                ->setAnimals($faker->boolean())
                ->setCreatedAt($faker->dateTimeThisYear('now', 'Europe/Paris'));

                $manager->persist($gite);
        }

        $manager->flush();
    }
}
