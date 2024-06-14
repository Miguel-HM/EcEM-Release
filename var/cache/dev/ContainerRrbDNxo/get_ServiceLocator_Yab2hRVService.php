<?php

namespace ContainerRrbDNxo;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Yab2hRVService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Yab2hRV' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Yab2hRV'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'tokenStorage' => ['privates', 'security.token_storage', 'getSecurity_TokenStorageService', false],
            'user' => ['privates', '.errored..service_locator.Yab2hRV.App\\Entity\\User', NULL, 'Cannot autowire service ".service_locator.Yab2hRV": it needs an instance of "App\\Entity\\User" but this type has been excluded in "config/services.yaml".'],
        ], [
            'entityManager' => '?',
            'tokenStorage' => '?',
            'user' => 'App\\Entity\\User',
        ]);
    }
}
