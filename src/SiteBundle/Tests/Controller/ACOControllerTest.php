<?php

namespace SiteBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ACOControllerTest extends WebTestCase
{
    public function testAco()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/ACO');
    }

    public function testScottsdalehealthpartnersaco()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/scottsdaleHealthPartnersACO');
    }

}
