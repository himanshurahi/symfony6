<?php

namespace App\DataFixtures;

use App\Entity\Actor;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ActorFixture extends Fixture
{
    public function load(ObjectManager $manager): void
    {
       $actor1 = new Actor();
       $actor1->setName('John Doe');
       $manager->persist($actor1);

       $actor2 = new Actor();
       $actor2->setName('New Actor');
       $manager->persist($actor2);

       $manager->flush();
       $this->addReference('actor1', $actor1);
       $this->addReference('actor2', $actor2);
    }
}