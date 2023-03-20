<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArtDeLaTableController extends AbstractController
{
    #[Route('/art/de/la/table', name: 'art_de_la_table')]
    public function index(): Response
    {
        return $this->render('art_de_la_table/index.html.twig', [
            'controller_name' => 'ArtDeLaTableController',
        ]);
    }
}
