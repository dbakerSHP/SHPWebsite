<?php

namespace SiteBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PrivacyPolicyControllerTest extends WebTestCase
{
    public function testPrivacypolicy()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/privacy-policy');
    }

}
