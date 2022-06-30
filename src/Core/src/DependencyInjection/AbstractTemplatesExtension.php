<?php

namespace Sylius\Ux\Core\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Extension\PrependExtensionInterface;

abstract class AbstractTemplatesExtension extends Extension implements PrependExtensionInterface, TemplatesExtensionInterface
{
    public function prepend(ContainerBuilder $container): void
    {
        $templatesPath = static::getTemplatesDir();

        $container->prependExtensionConfig('twig', [
            'paths' => [$templatesPath => 'SyliusUx',
        ]]);
    }

    public function load(array $configs, ContainerBuilder $container)
    {
    }
}
