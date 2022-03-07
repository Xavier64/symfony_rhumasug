<?php

namespace App\DataFixtures;

use App\Entity\Client;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasher;

class AppFixtures extends Fixture
{

    private $passwordHasher;

    public function ___construct(UserPasswordHasher $userPasswordHasheInterface)
    {
        $this->passwordHasher = $userPasswordHasheInterface; 
    }

    public function load(ObjectManager $manager): void
    {
        
        $charles = new Client();
        $charles->setEmail("charlesIX.bouveret@gmail.com");
        $hash = $this->passwordHasher->hashPassword($charles,"Je suis le plus fort!!");
        $charles->setPassword($hash);
        $charles->setNomClient("Bouveret");
        $charles->setPrenomClient("Charles");
        $charles->setAdresseClient("25 rue du Beau");
        $manager->persist($charles);

        $manager->flush();
    }
}
