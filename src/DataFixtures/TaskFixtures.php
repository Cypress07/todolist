<?php

namespace App\DataFixtures;


use App\Entity\Task;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class TaskFixtures extends Fixture implements DependentFixtureInterface
{

    public function load (ObjectManager $manager)
    {

        $task = new Task;
        $task->setName('Définir ordre du jour')
        ->setListing($this->getReference('listing2'));
        $manager->persist($task);

        $manager->flush();
    }

    public function getDependencies()
    {
        return [ListingFixtures::class];
    }

}