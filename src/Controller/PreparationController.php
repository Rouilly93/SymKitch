<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PreparationController extends AbstractController
{
    #[Route('/preparation', name: 'preparation')]
    public function index(): Response
    {
        return $this->render('preparation/index.html.twig', [
            'controller_name' => 'PreparationController',
        ]);
    }
}
