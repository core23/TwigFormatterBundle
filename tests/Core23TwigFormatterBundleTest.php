<?php

/*
 * (c) Christian Gripp <mail@core23.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Core23\TwigFormatterBundle\Tests;

use Core23\TwigFormatterBundle\Core23TwigFormatterBundle;
use Core23\TwigFormatterBundle\DependencyInjection\Core23TwigFormatterExtension;
use PHPUnit\Framework\TestCase;

class Core23TwigFormatterBundleTest extends TestCase
{
    public function testGetContainerExtension(): void
    {
        $bundle = new Core23TwigFormatterBundle();

        static::assertInstanceOf(Core23TwigFormatterExtension::class, $bundle->getContainerExtension());
    }
}
