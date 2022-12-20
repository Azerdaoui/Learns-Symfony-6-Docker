<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class MovieController extends AbstractController
{
    #[Route('/movies/{title}', name: 'app_movies',  methods:['GET', 'HEAD'])]
    public function index(string $title): Response
    {
        return $this->render('movies/index.html.twig', [
            'title' => $title
        ]);
    }

    #[Route('/json/movies', name: 'app_movies_json')]
    public function indexJson(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/MovieController.php',
        ]);
    }

    #[Route('/json/movies/{name}', name:'app_movies_show_json', methods:['GET', 'HEAD'])]
    public function show(string $name): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to: ' . $name,
            'path' => 'src/Controller/MovieController.php',
        ]);
    }
}
