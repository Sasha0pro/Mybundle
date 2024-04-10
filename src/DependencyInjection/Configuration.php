<?php

namespace DTOServiceBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{

    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder('dto_service');

        $treeBuilder->getRootNode()
            ->children()
            ->integerNode('property')->end()->end();

        return $treeBuilder;
    }
}