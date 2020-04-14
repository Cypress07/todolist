<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class TaskControllerTest extends WebTestCase
{

/**
 * @dataProvider urlProvider
 */
public function testExistingTask ($url)
{
    $client = static::createClient ();
    $client ->request ('GET', $url);

    $this->assertTrue($client->getResponse()->isSuccessful ());
}
public function urlProvider()
{
    return [
        
        ['/27/task/2/edit']
    ];
}

    public function RemoveExistingTask ()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/27/task/2/delete');
        $linkCrawler = $crawler->filter ('#deltask');
        
        $form = $linkCrawler->selectButton ('')->form();

        $form['name']->getName('Définir ordre du jour');
        
        $crawler = $client->submit($form);
        $this->assertTrue($client->getResponse()->isRedirect());

        $crawler = $client->followRedirect();

        $this->assertSame(200, $client->getResponse()->getStatusCode());
        $this->assertStringContainsString('supprimée avec succès', $crawler->filter('div')
        ->text($default = null, $normalizeWhitespace = true));
        $this->assertStringContainsString('Liste des tâches', $client->getResponse()->getContent());
    }

}