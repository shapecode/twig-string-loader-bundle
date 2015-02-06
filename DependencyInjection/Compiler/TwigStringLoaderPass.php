<?php

namespace Shapecode\Bundle\TwigStringLoaderBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

/**
 * Class TwigStringLoaderPass
 * @package Shapecode\Bundle\TwigStringLoaderBundle\DependencyInjection\Compiler
 * @author Nikita Loges
 * @date 10.01.15
 */
class TwigStringLoaderPass implements CompilerPassInterface
{

    /**
     * {@inheritdoc}
     */
    public function process(ContainerBuilder $container)
    {
        $definition = $container->getDefinition('twig');
        $definition->addMethodCall('setLoader', array(
            new Reference('shapecode.twig_string_loader.twig.chain_loader')
        ));
    }
}
