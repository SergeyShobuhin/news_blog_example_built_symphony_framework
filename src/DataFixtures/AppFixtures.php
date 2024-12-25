<?php

namespace App\DataFixtures;

use App\Entity\Blog;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{

    private UserPasswordHasherInterface $hasher;

    public function __construct(UserPasswordHasherInterface $hasher)
    {
        $this->hasher = $hasher;
    }

    public function load(ObjectManager $manager): void
    {
        $generator = Factory::create();

        $user = new User();
        $user->setEmail('qqq@qqq.qqq');
        $user->setRoles(['ROLE_ADMIN']);
        $password = $this->hasher->hashPassword($user, 'qqq');

        $user->setPassword($password);
        $manager->persist($user);

        for ($i = 0; $i < 20; $i++) {

            $user = new User();
//            $user->setEmail("email" . random_int(1, 1000) . "@gmail.com");
            $user->setEmail($generator->email());
            $password = $this->hasher->hashPassword($user, 'pass_1234');
            $user->setPassword($password);

            $manager->persist($user);

            for ($j = 0; $j < 20; $j++) {

                $blog = new Blog($user);
                $blog->setTitle($generator->text(10));
                $blog->setDescription($generator->text(30));
                $blog->setText($generator->text(200));

                $manager->persist($blog);
            }
        }

        $manager->flush();
    }
}
