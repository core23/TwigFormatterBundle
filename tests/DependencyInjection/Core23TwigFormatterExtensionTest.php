<?php

/*
 * (c) Christian Gripp <mail@core23.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Core23\TwigFormatterBundle\Tests\DependencyInjection;

use Core23\TwigFormatterBundle\DependencyInjection\Core23TwigFormatterExtension;
use Core23\TwigFormatterBundle\Formatter\TwigFormatter;
use Matthias\SymfonyDependencyInjectionTest\PhpUnit\AbstractExtensionTestCase;

class Core23TwigFormatterExtensionTest extends AbstractExtensionTestCase
{
    public function testLoadDefault(): void
    {
        $this->load();

        $this->assertContainerBuilderHasService('core23_twig_formatter.formatter', TwigFormatter::class);
    }

    protected function getContainerExtensions(): array
    {
        return [
            new Core23TwigFormatterExtension(),
        ];
    }
}
