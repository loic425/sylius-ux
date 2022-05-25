<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace spec\Sylius\Ux\Twig\Extension;

use Doctrine\Common\Collections\ArrayCollection;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Symfony\Component\PropertyAccess\Exception\NoSuchPropertyException;
use Tests\Sylius\Ux\Dummy\SampleInterface;
use Twig\Extension\ExtensionInterface;
use Twig\TwigFunction;

final class TestHtmlAttributeExtensionSpec extends ObjectBehavior
{
    function let(): void
    {
        $this->beConstructedWith('test');
    }

    function it_extends_twig_extensions(): void
    {
        $this->shouldImplement(ExtensionInterface::class);
    }

    function it_has_one_twig_function(): void
    {
        $functions = $this->getFunctions();
        $functions->shouldBeArray();
        $functions->shouldHaveCount(1);
    }
}
