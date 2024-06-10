<?php

namespace App\Controller;

use App\Repository\BlogRepository;
use App\Repository\UserRepository;
use App\Service\UnsplashService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomePageController extends AbstractController
{
    #[Route('/', name: 'app_homePage')]
    public function index(
        BlogRepository $blogRepository,
        UserRepository $userRepository,
        UnsplashService $unsplashService,
    ): Response
    {
        return $this->render('homePage/index.html.twig', [
            'blogs' => $blogRepository->getBlocs(),
            'users' => $userRepository->findall(),
            'unsplashService' => $unsplashService->getRandomImage(),
        ]);
    }
}
