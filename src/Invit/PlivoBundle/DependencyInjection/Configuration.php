<?php

namespace Invit\PlivoBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('invit_plivo');

        $treeBuilder->getRootNode()
            ->children()
            ->arrayNode('auth')
            ->children()
            ->scalarNode('auth_id')->cannotBeEmpty()->end()
            ->scalarNode('auth_token')->cannotBeEmpty()->end()
            ->end()
            ->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
