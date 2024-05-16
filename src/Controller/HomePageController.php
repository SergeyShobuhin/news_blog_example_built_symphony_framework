<?php

namespace App\Controller;

use App\Repository\BlogRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomePageController extends AbstractController
{
    #[Route('/', name: 'app_homePage')]
    public function index(BlogRepository $blogRepository): Response
    {
        return $this->render('homePage/index.html.twig', [
            'blogs' => $blogRepository->getBlocs(),
        ]);
    }
}
