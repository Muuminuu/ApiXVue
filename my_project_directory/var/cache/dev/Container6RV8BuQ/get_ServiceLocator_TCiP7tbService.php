<?php

namespace Container6RV8BuQ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_TCiP7tbService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.TCiP7tb' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.TCiP7tb'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'assetRepository' => ['privates', 'App\\Repository\\AssetRepository', 'getAssetRepositoryService', true],
            'serializer' => ['privates', 'serializer', 'getSerializerService', false],
        ], [
            'assetRepository' => 'App\\Repository\\AssetRepository',
            'serializer' => '?',
        ]);
    }
}