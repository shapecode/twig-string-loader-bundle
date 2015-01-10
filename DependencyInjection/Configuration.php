<?php

namespace Shapecode\Bundle\TwigStringLoaderBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * Class Configuration
 * @package Shapecode\Bundle\TwigStringLoaderBundle\DependencyInjection
 * @author Nikita Loges
 */
class Configuration implements ConfigurationInterface
{

    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('shapecode_twig_string_loader');

        return $treeBuilder;
    }
}
