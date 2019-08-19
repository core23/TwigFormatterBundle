<?php

/*
 * (c) Christian Gripp <mail@core23.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Core23\TwigFormatterBundle\Tests\Twig;

final class MockTwigLoader implements \Twig_LoaderInterface
{
    public function getSourceContext($name)
    {
        return $name;
    }

    public function getSource($name)
    {
        return $name;
    }

    public function getCacheKey($name)
    {
        return $name;
    }

    public function isFresh($name, $time)
    {
        return true;
    }

    public function exists($name)
    {
        return true;
    }
}
