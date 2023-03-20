<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class InoxController extends AbstractController
{
    #[Route('/inox', name: 'inox')]
    public function index(): Response
    {
        return $this->render('inox/index.html.twig', [
            'controller_name' => 'InoxController',
        ]);
    }
}
