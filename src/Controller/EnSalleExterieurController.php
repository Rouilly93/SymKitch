<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EnSalleExterieurController extends AbstractController
{
    #[Route('/en/salle/exterieur', name: 'en_salle_exterieur')]
    public function index(): Response
    {
        return $this->render('en_salle_exterieur/index.html.twig', [
            'controller_name' => 'EnSalleExterieurController',
        ]);
    }
}
