<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MoviesController extends AbstractController
{
    #[Route('/movies', name: 'app_movies')]
    public function index(): Response
    {
        $movies = ['The Shawshank Redemption', 'The Godfather', 'The Godfather: Part II', 'The Dark Knight', '12 Angry'];
        return $this->render('index.html.twig', ['movies' => $movies]);
    }

    /**
     * @Route('Route', name = 'RouteName')
     */
    #[Route('/movies/{id}', name: 'app_movies_show', defaults: ['id' => 'default'], methods: ['GET'])]
    public function show($id): JsonResponse {
        return $this->json([
            'message' => 'Welcome to your new controller!' . $id,
            'path' => 'src/Controller/MoviesController.php',
        ]);
    }
}
