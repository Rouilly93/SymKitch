<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FroidController extends AbstractController
{
    #[Route('/froid', name: 'froid')]
    public function index(): Response
    {
        return $this->render('froid/index.html.twig', [
            'controller_name' => 'FroidController',
        ]);
    }
}
