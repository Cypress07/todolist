<?php

namespace App\Tests;

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
            ['/4']
        ];
    }

}
