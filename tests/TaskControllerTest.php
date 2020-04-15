<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class TaskControllerTest extends WebTestCase
{


    public function loadFixtures ()
    {
        $this->fixturesLoader->loadFromFile(__DIR__ . "/../DataFixtures/ListingFixtures.php");
        $this->fixturesExecutor->execute ($this->fixturesLoader->getFixtures());
        $this->fixturesLoader->loadFromFile(__DIR__ . "/../DataFixtures/DataFixtures.php");
        $this->fixturesExecutor->execute ($this->fixturesLoader->getFixtures());
    }


    public function testAccessAgendaTask ()
{
        $this->loadFixtures();

        $client = static::createClient();
        $crawler = $client->request('GET', '/');
        $linkCrawler = $crawler->filter ('li a')->last();
        $link = $linkCrawler->selectLink('Réunion du 15 avril 2020')->link();
    
    
        $crawler = $client->click($link);

        $this->assertSame(200, $client->getResponse()->getStatusCode());
        $this->assertStringContainsString('Définir ordre du jour', $client->getResponse()->getContent());
    
}

    public function RemoveExistingTask ()
    {

        $this->loadFixtures();

        
        $client = static::createClient();
        $crawler = $client->request('GET', '/');
        $linkCrawler = $crawler->filter ('li a')->last();
        $link = $linkCrawler->selectLink('Réunion du 15 avril 2020')->link();
    
    
        $crawler = $client->click($link);

        $linkCrawler = $crawler->filter('#deltask');
        $link = $linkCrawler->selectLink('')->link();
        $crawler = $client->click($link);
        $crawler = $client->followRedirect();

        $this->assertSame(200, $client->getResponse()->getStatusCode());
        $this->assertStringContainsString('supprimée avec succès', $client->getResponse()->getContent());
        $this->assertStringContainsString('Pas de tâche existante', $client->getResponse()->getContent());
     
    }

}