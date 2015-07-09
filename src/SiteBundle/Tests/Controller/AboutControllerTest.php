<?php

namespace SiteBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AboutControllerTest extends WebTestCase
{
    public function testAbout()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/about');
    }

    public function testShpmembers()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/shpMembers');
    }

    public function testShphonorhealth()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/shpHonorHealth');
    }

    public function testPhysiciandirectory()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/physicianDirectory');
    }

}
