<?php

namespace ContainerXuDc46M;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_OiOHUjBService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.OiOHUjB' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.OiOHUjB'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'blogRepository' => ['privates', 'App\\Repository\\BlogRepository', 'getBlogRepositoryService', true],
            'userRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
            'unsplashService' => ['privates', 'App\\Service\\UnsplashService', 'getUnsplashServiceService', true],
            'gismeteoApi' => ['privates', 'App\\Service\\GismeteoApi', 'getGismeteoApiService', true],
            'categoryRepository' => ['privates', 'App\\Repository\\CategoryRepository', 'getCategoryRepositoryService', true],
        ], [
            'blogRepository' => 'App\\Repository\\BlogRepository',
            'userRepository' => 'App\\Repository\\UserRepository',
            'unsplashService' => 'App\\Service\\UnsplashService',
            'gismeteoApi' => 'App\\Service\\GismeteoApi',
            'categoryRepository' => 'App\\Repository\\CategoryRepository',
        ]);
    }
}
