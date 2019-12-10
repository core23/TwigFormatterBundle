TwigFormatterBundle
===================
[![Latest Stable Version](https://poser.pugx.org/core23/twig-formatter-bundle/v/stable)](https://packagist.org/packages/core23/twig-formatter-bundle)
[![Latest Unstable Version](https://poser.pugx.org/core23/twig-formatter-bundle/v/unstable)](https://packagist.org/packages/core23/twig-formatter-bundle)
[![License](https://poser.pugx.org/core23/twig-formatter-bundle/license)](https://packagist.org/packages/core23/twig-formatter-bundle)

[![Total Downloads](https://poser.pugx.org/core23/twig-formatter-bundle/downloads)](https://packagist.org/packages/core23/twig-formatter-bundle)
[![Monthly Downloads](https://poser.pugx.org/core23/twig-formatter-bundle/d/monthly)](https://packagist.org/packages/core23/twig-formatter-bundle)
[![Daily Downloads](https://poser.pugx.org/core23/twig-formatter-bundle/d/daily)](https://packagist.org/packages/core23/twig-formatter-bundle)

[![Continuous Integration](https://github.com/core23/TwigFormatterBundle/workflows/Continuous%20Integration/badge.svg)](https://github.com/core23/TwigFormatterBundle/actions)
[![Code Coverage](https://codecov.io/gh/core23/TwigFormatterBundle/branch/master/graph/badge.svg)](https://codecov.io/gh/core23/TwigFormatterBundle)

This bundle provides a [twig] formatter for the [Sonata FormatterBundle].

## Installation

Open a command console, enter your project directory and execute the following command to download the latest stable version of this bundle:

```
composer require core23/twig-formatter-bundle
```

### Enable the Bundle

Then, enable the bundle by adding it to the list of registered bundles in `config/bundles.php` file of your project:

```php
// config/bundles.php

return [
    // ...
    Core23\TwigFormatterBundle\Core23TwigFormatterBundle::class => ['all' => true],
];
```

To use the new formatter, register the formatter in `config/packages/sonata_formatter.yaml` file of your project:

```yaml
sonata_formatter:
    formatters:
        twig:
            service: core23_twig_formatter.formatter
```


[twig]: https://github.com/twigphp/Twig
[Sonata FormatterBundle]: https://github.com/sonata-project/SonataFormatterBundle
