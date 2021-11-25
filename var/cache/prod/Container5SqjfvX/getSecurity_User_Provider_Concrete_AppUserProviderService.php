<?php

namespace Container5SqjfvX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_User_Provider_Concrete_AppUserProviderService extends App_KernelProdContainer
{
    /*
     * Gets the private 'security.user.provider.concrete.app_user_provider' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Security\User\EntityUserProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['security.user.provider.concrete.app_user_provider'] = new \Symfony\Bridge\Doctrine\Security\User\EntityUserProvider(($container->services['doctrine'] ?? $container->getDoctrineService()), 'App\\Entity\\User', 'email', NULL);
    }
}
