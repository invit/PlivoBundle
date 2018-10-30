<?php

namespace Invit\PlivoBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader;

class InvitPlivoExtension extends Extension
{
    /**
     * {@inheritDoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.yml');

        if (isset($config['auth']['auth_id'])) {
            $container->setParameter('invit_plivo.auth.auth_id', $config['auth']['auth_id']);
        }

        if (isset($config['auth']['auth_token'])) {
            $container->setParameter('invit_plivo.auth.auth_token', $config['auth']['auth_token']);
        }
    }
}
