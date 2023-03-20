<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PizzaGrillController extends AbstractController
{
    #[Route('/pizza/grill', name: 'pizza_grill')]
    public function index(): Response
    {
        return $this->render('pizza_grill/index.html.twig', [
            'controller_name' => 'PizzaGrillController',
        ]);
    }
}
