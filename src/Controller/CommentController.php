<?php

namespace App\Controller;

use App\Entity\Blog;
use App\Entity\Comment;
use App\Form\CommentType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/user/blog/{id}/comment')]
class CommentController extends AbstractController
{
    // Добавление нового (верхнего уровня) комментария
    #[Route('/add', name: 'app_comment_add', methods: ['POST'])]
    public function add(
        Request                $request,
        Blog                   $blog,
        EntityManagerInterface $entityManager
    ): Response
    {
        $comment = new Comment();
        $comment->setBlog($blog);
        $comment->setAuthor($this->getUser());

        $form = $this->createForm(CommentType::class, $comment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($comment);
            $entityManager->flush();

            return $this->redirectToRoute('app_blog_show', ['id' => $blog->getId()], Response::HTTP_SEE_OTHER);
        }

        $this->addFlash('error', 'Ошибка добавления комментария.');

        return $this->redirectToRoute('app_blog_show', ['id' => $blog->getId()]);
    }

    // Добавление ответа на комментарий
    #[Route('/{parentId}/reply', name: 'app_comment_reply', methods: ['POST'])]
    public function reply(
        Request                $request,
        Blog                   $blog,
        int                    $parentId,
        EntityManagerInterface $entityManager
    ): Response
    {
        // Находим родительский комментарий
        $parentComment = $entityManager->getRepository(Comment::class)->find($parentId);
        if (!$parentComment) {
            throw $this->createNotFoundException('Родительский комментарий не найден.');
        }

        $comment = new Comment();
        $comment->setBlog($blog);
        $comment->setAuthor($this->getUser());
        $comment->setParent($parentComment);

        $form = $this->createForm(CommentType::class, $comment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($comment);
            $entityManager->flush();

            return $this->redirectToRoute('app_blog_show', ['id' => $blog->getId()], Response::HTTP_SEE_OTHER);
        }

        $this->addFlash('error', 'Ошибка добавления ответа.');

        return $this->redirectToRoute('app_blog_show', ['id' => $blog->getId()]);
    }
}
