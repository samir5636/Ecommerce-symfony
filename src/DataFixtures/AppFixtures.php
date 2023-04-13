<?php

namespace App\DataFixtures;

use App\Factory\CategorieFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Factory\ProduitFactory;
use App\Factory\UserFactory; 

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        CategorieFactory::createMany(10);
        ProduitFactory::createMany(10);
        UserFactory::createMany(1);
        $manager->flush();
    }
}