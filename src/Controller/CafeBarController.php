<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CafeBarController extends AbstractController
{
    #[Route('/cafe/bar', name: 'cafe_bar')]
    public function index(): Response
    {
        return $this->render('cafe_bar/index.html.twig', [
            'controller_name' => 'CafeBarController',
        ]);
    }
}
