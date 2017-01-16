<?php

namespace Shapecode\Bundle\TwigStringLoaderBundle\Twig\Loader;

/**
 * Class StringLoader
 *
 * @package Shapecode\Bundle\TwigStringLoaderBundle\Twig\Loader
 * @author  Nikita Loges
 */
class StringLoader implements \Twig_LoaderInterface, \Twig_SourceContextLoaderInterface, \Twig_ExistsLoaderInterface
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
        return new \Twig_Source($name, $name);
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
