<?php

namespace App\Service;

use Doctrine\ORM\EntityManagerInterface;

class Reminder {

    protected $entityManager;
    
    public function __construct(EntityManagerInterface $entityManager)
    {


        $this->entityManager = $entityManager;
    }

    public function remind (){

        return 3;


    }
   
}