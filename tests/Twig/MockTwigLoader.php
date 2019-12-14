<?php

declare(strict_types=1);

/*
 * (c) Christian Gripp <mail@core23.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Core23\TwigFormatterBundle\Tests\Twig;

use Twig\Loader\LoaderInterface;
use Twig\Source;

final class MockTwigLoader implements LoaderInterface
{
    public function getSourceContext($name): Source
    {
        return new Source('', $name);
    }

    public function getCacheKey($name): string
    {
        return $name;
    }

    public function isFresh($name, $time): bool
    {
        return true;
    }

    public function exists($name): bool
    {
        return true;
    }
}
