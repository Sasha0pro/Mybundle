<?php

namespace PassGeneratorBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{

    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder('password_generator');

        $treeBuilder->getRootNode()
            ->children()
            ->integerNode('passwordLength')->defaultValue(15)->end()->end();

        return $treeBuilder;
    }
}