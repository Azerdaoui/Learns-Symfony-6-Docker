<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MovieController extends AbstractController
{
    #[Route('/movies', name: 'app_movies')]
    public function index(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/MovieController.php',
        ]);
    }

    #[Route('/movies/{name}', name:'app_movies_show', methods:['GET', 'HEAD'])]
    public function show(string $name): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to: ' . $name,
            'path' => 'src/Controller/MovieController.php',
        ]);
    }
}
