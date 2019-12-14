<?php

declare(strict_types=1);

/*
 * (c) Christian Gripp <mail@core23.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Core23\TwigFormatterBundle\Formatter;

use Sonata\FormatterBundle\Extension\ExtensionInterface;
use Sonata\FormatterBundle\Formatter\BaseFormatter;
use Twig\Environment;
use Twig\Loader\ArrayLoader;
use Twig\Loader\ChainLoader;

final class TwigFormatter extends BaseFormatter
{
    /**
     * @var Environment
     */
    private $twig;

    public function __construct(Environment $twig)
    {
        $this->twig = $twig;
    }

    public function transform(string $text): string
    {
        // Here we temporary changing twig environment loader to Chain loader with Twig_Loader_Array as first loader,
        // which contains only one our template reference
        $oldLoader = $this->twig->getLoader();

        $hash = sha1($text);

        $chainLoader = new ChainLoader();
        $chainLoader->addLoader(new ArrayLoader([$hash => $text]));
        $chainLoader->addLoader($oldLoader);
        $this->twig->setLoader($chainLoader);

        $result = $this->twig->render($hash);

        $this->twig->setLoader($oldLoader);

        return $result;
    }

    public function addExtension(ExtensionInterface $extensionInterface): void
    {
        throw new \RuntimeException('Extensions are not yet supported');
    }

    public function getExtensions(): array
    {
        return [];
    }
}
