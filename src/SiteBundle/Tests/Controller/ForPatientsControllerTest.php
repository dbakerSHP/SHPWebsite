<?php

namespace SiteBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ForPatientsControllerTest extends WebTestCase
{
    public function testForpatients()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/for-patients');
    }

    public function testOurphilosophy()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/our-philosophy');
    }

    public function testOurphysicians()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/our-physicians');
    }

    public function testPhysiciandirectory()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/physician-directory');
    }

    public function testInsuranceplans()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/insurance-plans');
    }

    public function testCaremanagement()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/care-management');
    }

}
