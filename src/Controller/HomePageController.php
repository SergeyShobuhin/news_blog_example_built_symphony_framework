<?php

namespace App\Controller;

use App\Filter\BlogFilter;
use App\Form\BlogFilterType;
use App\Repository\BlogRepository;
use App\Repository\CategoryRepository;
use App\Repository\UserRepository;
use App\Service\GismeteoApi;
use App\Service\UnsplashService;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomePageController extends AbstractController
{
    #[Route('/', name: 'app_homePage')]
    public function index(
        BlogRepository     $blogRepository,
        UserRepository     $userRepository,
        UnsplashService    $unsplashService,
        GismeteoApi        $gismeteoApi,
        CategoryRepository $categoryRepository
    ): Response
    {
        return $this->render('homePage/index.html.twig', [
            'blogs' => $blogRepository->getBlocs(),
            'users' => $userRepository->findall(),
            'unsplashService' => $unsplashService,
            'gismeteo' => $gismeteoApi,
            'categories' => $categoryRepository->findAll()
        ]);
    }

    #[Route('/blogs', name: 'app_homePageBlogs', methods: ['GET'])]
    public function indexBlogs(
        Request            $request,
        BlogRepository     $blogRepository,
        PaginatorInterface $paginator
    ): Response
    {
        $blogFilter = new BlogFilter();
        $form = $this->createForm(BlogFilterType::class, $blogFilter);
        $form->handleRequest($request);

        $pagination = $paginator->paginate(
            $blogRepository->findByBlogFilter($blogFilter), /* query NOT result */
            $request->query->getInt('page', 1), /*page number*/
            10 /*limit per page*/
        );

        return $this->render('blog/index.html.twig', [
            'pagination' => $pagination,
            'searchForm' => $form->createView(),
        ]);
    }
}
