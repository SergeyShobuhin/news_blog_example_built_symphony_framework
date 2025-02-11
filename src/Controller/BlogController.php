<?php

namespace App\Controller;

use App\Entity\Blog;
use App\Filter\BlogFilter;
use App\Form\BlogFilterType;
use App\Form\BlogType;
use App\Form\CommentType;
use App\Message\ContentWatchMessage;
use App\Repository\BlogRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Messenger\MessageBusInterface;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/user/blog')]
class BlogController extends AbstractController
{
    #[Route('/', name: 'app_user_blog_index', methods: ['GET'])]
    public function index(
        Request            $request,
        BlogRepository     $blogRepository,
        PaginatorInterface $paginator,
    ): Response
    {
        $blogFilter = new BlogFilter($this->getUser());
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

    #[Route('/new', name: 'app_user_blog_new', methods: ['GET', 'POST'])]
    public function new(
        Request                $request,
        EntityManagerInterface $entityManager,
        MessageBusInterface    $bus,
    ): Response
    {

        $blog = new Blog($this->getUser());

        $form = $this->createForm(BlogType::class, $blog);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $entityManager->persist($blog);
            $entityManager->flush();

            $bus->dispatch(new ContentWatchMessage($blog->getId()));

            return $this->redirectToRoute('app_user_blog_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('blog/new.html.twig', [
            'blog' => $blog,
            'form' => $form,
        ]);
    }

    #[Route('/{id}/show', name: 'app_blog_show', methods: ['GET', 'POST'])]
    public function show(
        Blog $blog,
    ): Response
    {

        if (!$this->getUser()) {
            throw $this->createAccessDeniedException('Вы должны войти в систему.');
        }

        // Форма для добавления нового (верхнего уровня) комментария
        $commentForm = $this->createForm(CommentType::class);

        // Для каждого комментария блога создаем форму для ответа.
        $replyForms = [];
        foreach ($blog->getComments() as $comment) {
            $replyForms[$comment->getId()] = $this->createForm(CommentType::class, null, [
                'action' => $this->generateUrl('app_comment_reply', [
                    'id' => $blog->getId(),
                    'parentId' => $comment->getId()
                ])
            ])->createView();
        }

        return $this->render('blog/show.html.twig', [
            'blog' => $blog,
            'commentForm' => $commentForm->createView(),
            'replyForms' => $replyForms,  // Массив форм для ответов, ключ – id родительского комментария
        ]);
    }

    #[IsGranted('edit', 'blog', 'Нет такого блога или блог пренадлежит не вам', 404)]
    #[Route('/{id}/edit', name: 'app_user_blog_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Blog $blog, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(BlogType::class, $blog);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_user_blog_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('blog/edit.html.twig', [
            'blog' => $blog,
            'form' => $form,
        ]);
    }

    #[IsGranted('edit', 'blog', 'Нет такого блога или блог пренадлежит не вам', 404)]
    #[Route('/{id}', name: 'app_user_blog_delete', methods: ['POST'])]
    public function delete(Request $request, Blog $blog, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $blog->getId(), $request->getPayload()->get('_token'))) {
            $entityManager->remove($blog);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_blog_index', [], Response::HTTP_SEE_OTHER);
    }

}