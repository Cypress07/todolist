<?php

namespace App\DataFixtures;


use App\Entity\Listing;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;


class ListingFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        
        $listing = new Listing();
        $listing->setName('Réunion du 14 avril 2020');
        $manager->persist($listing);

        $listing2 = new Listing();
        $listing2->setName('Réunion du 15 avril 2020');
        $manager->persist($listing2); 
        
        $manager->flush();

        
        $this->setReference('listing', $listing);
        $this->setReference('listing2', $listing2);
       
    }
}