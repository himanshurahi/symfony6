<?php

namespace App\Controller;

use App\Repository\MovieRepository;
use Doctrine\ORM\Mapping\Id;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MoviesController extends AbstractController
{
    private $movieRepository;
    public function __construct(MovieRepository $m)
    {
        $this->movieRepository = $m;
    }

    #[Route('/movies', name: 'app_movies')]
    public function index(): Response
    {
        $movies = $this->movieRepository->findAll();
        dd($movies);
        return $this->render('index.html.twig', ['movies' => $movies]);
    }
}
