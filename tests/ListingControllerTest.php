<?php

namespace App\Tests;

use Doctrine\Common\DataFixtures\Executor\ORMExecutor;
use Doctrine\Common\DataFixtures\Purger\ORMPurger;
use Symfony\Bridge\Doctrine\DataFixtures\ContainerAwareLoader;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ListingControllerTest extends WebTestCase
{
    /*
    public function testSomething()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/');

        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h1', 'Hello World');
    }
    */

    /**
     * @var $fixturesLoader ContainerAwareLoader
     */

     private $fixturesLoader;
     private  $fixturesExecutor;

     public function setup()
     {
        parent::setup();
        $client = static::createClient();
        $this->fixturesLoader = new ContainerAwareLoader($client->getContainer());
        $entityManager = static::$kernel->getContainer()->get('doctrine')->getManager();
        $this->fixturesExecutor = new ORMExecutor($entityManager, new ORMPurger($entityManager));

        self::ensureKernelShutdown();//

     }

     public function loadFixtures (){
         $this->fixturesLoader->loadFromFile(__DIR__ . "/../DataFixtures/ListingFixtures.php");
         $this->fixturesExecutor->execute ($this->fixturesLoader->getFixtures());
         $this->fixturesLoader->loadFromFile(__DIR__ . "/../DataFixtures/DataFixtures.php");
         $this->fixturesExecutor->execute ($this->fixturesLoader->getFixtures());
     }


/**
 * @dataProvider urlProvider
 */
    public function testPageIsSuccesful ($url)
    {
        $client = static::createClient ();
        $client ->request ('GET', $url);

        $this->assertTrue($client->getResponse()->isSuccessful ());
    }
    public function urlProvider()
    {
        return [
            ['/'],
            ['/19']
        ];
    }

    public function testAccessNewTask ()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/');
        $linkCrawler = $crawler->filter ('#new');
        $link = $linkCrawler->selectLink ('')->link();

        $crawler = $client->click($link);

        $this->assertSame(200, $client->getResponse()->getStatusCode());
        $this->assertStringContainsString('Créer une tâche', $crawler->filter('h2')->text());
    }

    public function testListingCreation()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/');
        $linkCrawler = $crawler->filter ('#newlist');
        $form = $linkCrawler->selectButton ('')->form();

        $form['name']->setValue('Listing de test');
        //$form['Category[VatRate]']->select (0.1);

        $crawler = $client->submit($form);
        $this->assertTrue($client->getResponse()->isRedirect());

        //var_dump($crawler->html());
        $crawler = $client->followRedirect();

        $this->assertSame(200, $client->getResponse()->getStatusCode());
        $this->assertStringContainsString('créée avec succès', $crawler->filter('div')
        ->text($default = null, $normalizeWhitespace = true));
        $this->assertStringContainsString('Listing de test', $client->getResponse()->getContent());
        
    }


}
