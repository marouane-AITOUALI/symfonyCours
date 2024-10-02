<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $user = new User();
        $user->setEmail('test1@example.com');
        $user->setUsername('test1');
        $user->setPassword('coucou');


        $user2 = new User();
        $user2->setEmail('test2@example.com');
        $user2->setUsername('test2');
        $user2->setPassword('coucou');
        // $product = new Product();
        
        $manager->persist($user);
        $manager->persist($user2);

        $manager->flush();
    }
}
