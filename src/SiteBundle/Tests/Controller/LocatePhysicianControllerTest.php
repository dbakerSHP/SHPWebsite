<?php

namespace SiteBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class LocatePhysicianControllerTest extends WebTestCase
{
    public function testLocatephysician()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/locate-a-physician');
    }

}
