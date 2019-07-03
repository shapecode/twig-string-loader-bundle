Shapecode - Twig String Loader Bundle
=======================

[![paypal](https://img.shields.io/badge/Donate-Paypal-blue.svg)](http://paypal.me/nloges)

[![PHP Version](https://img.shields.io/packagist/php-v/shapecode/twig-string-loader-bundle.svg)](https://packagist.org/packages/shapecode/twig-string-loader-bundle)
[![Latest Stable Version](https://img.shields.io/packagist/v/shapecode/twig-string-loader-bundle.svg?label=stable)](https://packagist.org/packages/shapecode/twig-string-loader-bundle)
[![Latest Unstable Version](https://img.shields.io/packagist/vpre/shapecode/twig-string-loader-bundle.svg?label=unstable)](https://packagist.org/packages/shapecode/twig-string-loader-bundle)
[![Total Downloads](https://img.shields.io/packagist/dt/shapecode/twig-string-loader-bundle.svg)](https://packagist.org/packages/shapecode/twig-string-loader-bundle)
[![License](https://img.shields.io/packagist/l/shapecode/twig-string-loader-bundle.svg)](https://packagist.org/packages/shapecode/twig-string-loader-bundle)

Install instructions
--------------------------------

First you need to add `shapecode/twig-string-loader-bundle` to `composer.json`:

Do it by execute `composer require shapecode/twig-string-loader-bundle` or do it manually

``` json
{
   "require": {
        "shapecode/twig-string-loader-bundle": "~1.4"
    }
}
```

You also have to add `ShapecodeTwigStringLoaderBundle` to your `AppKernel.php` ...

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

... or `bundles.php` when you don't use Symfony Flex.

``` php
<?php

// bundles.php
//...

return [
    // .....  
    Shapecode\Bundle\TwigStringLoaderBundle\ShapecodeTwigStringLoaderBundle::class => ['all' => true],
];
```

Now you can compile strings with twig:

``` php
<?php

$this->get('twig')->render('Hello {{ world }}', array(
    'world' => 'World'
));
```
