<?php

namespace Shapecode\Bundle\TwigStringLoaderBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

/**
 * Class ShapecodeTwigStringLoaderExtension
 *
 * @package Shapecode\Bundle\TwigStringLoaderBundle\DependencyInjection
 * @author  Nikita Loges
 */
class ShapecodeTwigStringLoaderExtension extends Extension
{

    /**
     * @inheritdoc
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__ . '/../Resources/config'));
        $loader->load('services.yml');
    }
}
