Shapecode - Twig String Loader Bundle
=======================

[![SensioLabsInsight](https://insight.sensiolabs.com/projects/a22d7be1-bbe3-42ff-bc07-057cb5776cdf/mini.png)](https://insight.sensiolabs.com/projects/a22d7be1-bbe3-42ff-bc07-057cb5776cdf)
[![Latest Stable Version](https://poser.pugx.org/shapecode/twig-string-loader-bundle/v/stable)](https://packagist.org/packages/shapecode/twig-string-loader-bundle) 
[![Total Downloads](https://poser.pugx.org/shapecode/twig-string-loader-bundle/downloads)](https://packagist.org/packages/shapecode/twig-string-loader-bundle) 
[![Latest Unstable Version](https://poser.pugx.org/shapecode/twig-string-loader-bundle/v/unstable)](https://packagist.org/packages/shapecode/twig-string-loader-bundle) 
[![License](https://poser.pugx.org/shapecode/twig-string-loader-bundle/license)](https://packagist.org/packages/shapecode/twig-string-loader-bundle)


Install instructions
--------------------------------

First you need to add `shapecode/twig-string-loader-bundle` to `composer.json`:

``` json
{
   "require": {
        "shapecode/twig-string-loader-bundle": "~1.4"
    }
}
```

You also have to add `ShapecodeTwigStringLoaderBundle` to your `AppKernel.php`:

``` php
<?php

// app/AppKernel.php
//...

class AppKernel extends Kernel
{
    //...
    public function registerBundles()
    {
        $bundles = array(
            ...
            new Shapecode\Bundle\TwigStringLoaderBundle\ShapecodeTwigStringLoaderBundle(),
        );
        //...

        return $bundles;
    }
    //...
}
```

Now you can compile strings with twig:

``` php
<?php

$this->get('twig')->render('Hello {{ world }}', array(
    'world' => 'World'
));
```
