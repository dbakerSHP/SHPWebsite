<?php

namespace SiteBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PDFViewerControllerTest extends WebTestCase
{
    public function testPdfview()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/PDFView');
    }

}
