<?php

namespace SiteBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class TechnologyControllerTest extends WebTestCase
{
    public function testTechnology()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/technology');
    }

}
