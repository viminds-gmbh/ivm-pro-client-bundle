<?php

namespace Qbus\IvmProClientBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder('ivm_pro_client');
        $treeBuilder
            ->getRootNode()
            ->children()
                ->scalarNode('subdomain')
                    ->defaultValue('')
                ->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
