<?php

namespace ContainerCiKzPp7;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_R6mrhFService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.R6mrhF_' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.R6mrhF_'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'asset' => ['privates', '.errored..service_locator.R6mrhF_.App\\Entity\\Asset', NULL, 'Cannot autowire service ".service_locator.R6mrhF_": it needs an instance of "App\\Entity\\Asset" but this type has been excluded in "config/services.yaml".'],
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'asset' => 'App\\Entity\\Asset',
            'em' => '?',
        ]);
    }
}
