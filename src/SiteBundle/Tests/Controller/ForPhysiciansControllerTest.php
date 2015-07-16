<?php

namespace SiteBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ForPhysiciansControllerTest extends WebTestCase
{
    public function testForphysicians()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/for-physicians');
    }

}
