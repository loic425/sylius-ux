<?php

declare(strict_types=1);

namespace Tests\Sylius\Ux\DependencyInjection;

use Matthias\SymfonyDependencyInjectionTest\PhpUnit\AbstractExtensionTestCase;
use Sylius\Ux\Core\Symfony\Bundle\DependencyInjection\SyliusUxExtension;
use Sylius\Ux\Core\Twig\Extension\SortByExtension;
use Sylius\Ux\Core\Twig\Extension\TestFormAttributeExtension;
use Sylius\Ux\Core\Twig\Extension\TestHtmlAttributeExtension;

final class SyliusUxExtensionTest extends AbstractExtensionTestCase
{
    /** @test */
    public function it_adds_sort_by_twig_extension(): void
    {
        $this->load();

        $this->assertContainerBuilderHasService(
            'sylius.ux.twig_extension.sort_by',
            SortByExtension::class,
        );

        $this->assertContainerBuilderHasServiceDefinitionWithTag(
            'sylius.ux.twig_extension.sort_by',
            'twig.extension',
        );
    }

    /** @test */
    public function it_adds_test_form_attribute_twig_extension(): void
    {
        $this->load();

        $this->assertContainerBuilderHasService(
            'sylius.ux.twig_extension.test_form_attribute',
            TestFormAttributeExtension::class,
        );

        $this->assertContainerBuilderHasServiceDefinitionWithTag(
            'sylius.ux.twig_extension.test_form_attribute',
            'twig.extension',
        );

        $this->assertContainerBuilderHasServiceDefinitionWithArgument(
            'sylius.ux.twig_extension.test_form_attribute',
            0,
            '%kernel.environment%',
        );
    }

    /** @test */
    public function it_adds_test_html_attribute_twig_extension(): void
    {
        $this->load();

        $this->assertContainerBuilderHasService(
            'sylius.ux.twig_extension.test_html_attribute',
            TestHtmlAttributeExtension::class,
        );

        $this->assertContainerBuilderHasServiceDefinitionWithTag(
            'sylius.ux.twig_extension.test_html_attribute',
            'twig.extension',
        );

        $this->assertContainerBuilderHasServiceDefinitionWithArgument(
            'sylius.ux.twig_extension.test_html_attribute',
            0,
            '%kernel.environment%',
        );
    }

    protected function getContainerExtensions(): array
    {
        return [new SyliusUxExtension()];
    }
}
