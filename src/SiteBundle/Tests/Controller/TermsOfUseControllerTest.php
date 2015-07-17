<?php

namespace SiteBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class TermsOfUseControllerTest extends WebTestCase
{
    public function testTos()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/terms-of-use');
    }

}
