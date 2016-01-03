<?php

namespace Shapecode\Bundle\TwigStringLoaderBundle\Twig\Loader;

/**
 * Class StringLoader
 * @package Shapecode\Bundle\TwigStringLoaderBundle\Twig\Loader
 * @author Nikita Loges
 */
class StringLoader implements \Twig_LoaderInterface
{

    /**
     * @inheritdoc
     */
    public function getSource($name)
    {
        return $name;
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
}