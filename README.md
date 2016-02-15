Shapecode - Twig String Loader Bundle
=======================

[![SensioLabsInsight](https://insight.sensiolabs.com/projects/5bd36400-a96f-41e2-9a5c-0f13537415f4/mini.png)](https://insight.sensiolabs.com/projects/5bd36400-a96f-41e2-9a5c-0f13537415f4)
[![Dependency Status](https://www.versioneye.com/user/projects/5589a70d306662001d0001c5/badge.svg?style=flat)](https://www.versioneye.com/user/projects/5589a70d306662001d0001c5)
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
        "shapecode/twig-string-loader-bundle": "~1.2"
    }
}
```

Please note that `dev-develop` points to the latest development version. Of course you can also use an explicit version number, e.g., `1.0.*`.

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
