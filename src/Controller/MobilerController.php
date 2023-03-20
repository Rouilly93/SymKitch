<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MobilerController extends AbstractController
{
    #[Route('/mobiler', name: 'mobiler')]
    public function index(): Response
    {
        return $this->render('mobiler/index.html.twig', [
            'controller_name' => 'MobilerController',
        ]);
    }
}
