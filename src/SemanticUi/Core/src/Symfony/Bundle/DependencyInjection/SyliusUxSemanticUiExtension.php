<?php

namespace Sylius\Ux\SemanticUi\Core\Symfony\Bundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Extension\PrependExtensionInterface;

class SyliusUxSemanticUiExtension extends Extension implements PrependExtensionInterface
{
    public function prepend(ContainerBuilder $container): void
    {
        $templatesPath = \dirname(__FILE__, 5) . '/templates';

        $container->prependExtensionConfig('twig', [
            'paths' => [$templatesPath => 'SyliusUx',
        ]]);
    }

    public function load(array $configs, ContainerBuilder $container)
    {
    }
}