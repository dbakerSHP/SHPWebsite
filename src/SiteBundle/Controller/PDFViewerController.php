<?php

namespace SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PDFViewerController extends Controller
{
    public function PDFViewAction($file)
    {

        $filePath = $this->container
            ->get('templating.helper.assets')
            ->getUrl('bundles/site/pdf/' .  $file);

        return $this->get('salva_pdf_js.controller')->renderPdf($filePath);

    }

}

