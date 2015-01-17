Tenolo - Core
=======================

System requirements
-----------------------------------

* PHP >=5.3
* Twig ~1.16
* Symfony Framework Bundle ~2.6
* Symfony Twig Bundle ~2.6

Install instructions
--------------------------------

First you need to add `shapecode/twig-string-loader-bundle` to `composer.json`:

``` json
{
   "require": {
        "shapecode/twig-string-loader-bundle": "~1.0"
    }
}
```

Please note that `dev-master` points to the latest release. If you want to use the latest development version please use `dev-develop`. Of course you can also use an explicit version number, e.g., `1.0.*`.

You also have to add `ShapecodeTwigStringLoaderBundle` to your `AppKernel.php`:

``` php
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

Now you can compile strings with twig

``` php
$this->get('twig')->render('Hello {{ world }}', array(
    'world' => 'World'
));
```

Update instructions
---------------------------

Do a [composer](https://getcomposer.org/doc/00-intro.md) update.

```bash
php composer.phar update
```