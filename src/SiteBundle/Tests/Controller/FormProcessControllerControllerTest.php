<?php

namespace SiteBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class FormProcessControllerControllerTest extends WebTestCase
{
    public function testContactprocess()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/process/contact');
    }

}
