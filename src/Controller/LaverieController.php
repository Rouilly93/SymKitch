<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LaverieController extends AbstractController
{
    #[Route('/laverie', name: 'laverie')]
    public function index(): Response
    {
        return $this->render('laverie/index.html.twig', [
            'controller_name' => 'LaverieController',
        ]);
    }
}
