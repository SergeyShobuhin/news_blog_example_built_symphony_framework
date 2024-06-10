<?php

namespace App\MessageHandler;

use App\Message\UnsplashMessage;
use App\Repository\UserRepository;
use App\Service\UnsplashService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;

#[AsMessageHandler]
readonly class UnsplashHandler
{
    public function __construct(
        private UserRepository  $userRepository,
        private EntityManagerInterface   $entityManager,
        private UnsplashService $unsplashService
    )
    {
    }

    public function __invoke(UnsplashMessage $unsplashMessage): void
    {
        $userId = (int)$unsplashMessage->getContent();
        $user = $this->userRepository->find($userId);



//        $imageUrl = $unsplashService->getRandomImage();
//            $user->setAvatar($imageUrl);
//        dump($userId);
//        dump($user); exit;

        $user->setAvatar(
            $this->unsplashService->getRandomImage()
        );

        $this->entityManager->flush();
    }

}