<?php

namespace App\DataFixtures;

use App\Entity\Movie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MoviesFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
       $movie = new Movie();
       $movie->setTitle('The Shawshank Redemption');
       $movie->setYear(1994);
       $movie->setImagePath("https://i.ytimg.com/vi/19THOH_dvxg/movieposter_en.jpg");
       $movie->addActor($this->getReference('actor1'));
       $manager->persist($movie);

       $movie = new Movie();
        $movie->setTitle('The Godfather');
        $movie->setYear(1972);
        $movie->setImagePath("https://i.ytimg.com/vi/19THOH_dvxg/movieposter_en.jpg");
        $movie->addActor($this->getReference('actor2'));
        $manager->persist($movie);

        $manager->flush();
    }
}