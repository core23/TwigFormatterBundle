<?php

/*
 * (c) Christian Gripp <mail@core23.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Core23\TwigFormatterBundle\Tests\Formatter;

use Core23\TwigFormatterBundle\Formatter\TwigFormatter;
use Core23\TwigFormatterBundle\Tests\Twig\MockTwigLoader;
use PHPUnit\Framework\TestCase;
use Twig\Environment;

class TwigFormatterTest extends TestCase
{
    private $twig;

    private $formatter;

    protected function setUp(): void
    {
        $loader = new MockTwigLoader();

        $this->twig      = new Environment($loader);
        $this->formatter = new TwigFormatter($this->twig);
    }

    public function testFormatter(): void
    {
        static::assertSame('0,1,2,3,', $this->formatter->transform('{% for i in range(0, 3) %}{{ i }},{% endfor %}'));

        static::assertInstanceOf(MockTwigLoader::class, $this->twig->getLoader());
    }

    public function testGetExtension(): void
    {
        $extensions = $this->formatter->getExtensions();

        static::assertCount(0, $extensions);
    }
}
