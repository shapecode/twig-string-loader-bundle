<?php

namespace Shapecode\Bundle\TwigStringLoaderBundle\Twig\Loader;

use Twig\Loader\ExistsLoaderInterface;
use Twig\Loader\LoaderInterface;
use Twig\Loader\SourceContextLoaderInterface;
use Twig\Source;

/**
 * Class StringLoader
 *
 * @package Shapecode\Bundle\TwigStringLoaderBundle\Twig\Loader
 * @author  Nikita Loges
 */
class StringLoader implements LoaderInterface, SourceContextLoaderInterface, ExistsLoaderInterface
{

    /**
     * @inheritdoc
     */
    public function getSource($name)
    {
        return $name;
    }

    /**
     * @inheritDoc
     */
    public function getSourceContext($name)
    {
        return new Source($name, $name);
    }

    /**
     * @inheritdoc
     */
    public function getCacheKey($name)
    {
        return $name;
    }

    /**
     * @inheritdoc
     */
    public function isFresh($name, $time)
    {
        return true;
    }

    /**
     * @inheritDoc
     */
    public function exists($name)
    {
        return preg_match('/\s/', $name);
    }
}
