<?php

namespace ContainerXuDc46M;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserListenerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\EventListener\UserListener' shared autowired service.
     *
     * @return \App\EventListener\UserListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/EventListener/UserListener.php';

        $a = ($container->services['messenger.default_bus'] ?? self::getMessenger_DefaultBusService($container));

        if (isset($container->privates['App\\EventListener\\UserListener'])) {
            return $container->privates['App\\EventListener\\UserListener'];
        }

        return $container->privates['App\\EventListener\\UserListener'] = new \App\EventListener\UserListener($a);
    }
}
