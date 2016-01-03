<?php

namespace Shapecode\Bundle\TwigStringLoaderBundle;

use Shapecode\Bundle\TwigStringLoaderBundle\DependencyInjection\Compiler\TwigStringLoaderPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Class ShapecodeTwigStringLoaderBundle
 * @package Shapecode\Bundle\TwigStringLoaderBundle
 * @author Nikita Loges
 */
class ShapecodeTwigStringLoaderBundle extends Bundle
{

    /**
     * @@inheritdoc
     */
    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        $container->addCompilerPass(new TwigStringLoaderPass());
    }
}
