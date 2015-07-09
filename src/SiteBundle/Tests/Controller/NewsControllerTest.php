<?php

namespace SiteBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class NewsControllerTest extends WebTestCase
{
    public function testNews()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/news');
    }

}
