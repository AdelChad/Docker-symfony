<?php

namespace Container0msyZeG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_9LAmx1CService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.9LAmx1C' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.9LAmx1C'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'owner' => ['privates', '.errored..service_locator.9LAmx1C.App\\Entity\\Owner', NULL, 'Cannot autowire service ".service_locator.9LAmx1C": it references class "App\\Entity\\Owner" but no such service exists.'],
        ], [
            'owner' => 'App\\Entity\\Owner',
        ]);
    }
}