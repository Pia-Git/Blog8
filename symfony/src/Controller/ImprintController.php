<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ImprintController extends AbstractController
{
    #[Route('/impressum', name: 'imprint_page')]
    public function index(): Response
    {
        return $this->render('/pages/imprint.html.twig');
    }
}