<?php

namespace SiteBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class FrequentlyAskedQuestionsControllerTest extends WebTestCase
{
    public function testFaq()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/frequently-asked-questions');
    }

}
