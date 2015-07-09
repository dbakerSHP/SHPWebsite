<?php

namespace SiteBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ClinicalIntegrationControllerTest extends WebTestCase
{
    public function testClinicalintegration()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/clinicalIntegration');
    }

    public function testShpclinicalintegrationsuccess()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/shpClinicalIntegrationSuccess');
    }

}
