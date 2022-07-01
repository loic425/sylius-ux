<?php

declare(strict_types=1);

namespace Sylius\Ux\Core;

use Sylius\Ux\Bootstrap\Core\DependencyInjection\SyliusUxBootstrapExtension;
use Sylius\Ux\Bootstrap\Grid\DependencyInjection\SyliusUxBootstrapGridExtension;
use Sylius\Ux\SemanticUi\Core\DependencyInjection\SyliusUxSemanticUiExtension;
use Sylius\Ux\SemanticUi\Crud\DependencyInjection\SyliusUxSemanticUiCrudExtension;
use Sylius\Ux\SemanticUi\Grid\DependencyInjection\SyliusUxSemanticUiGridExtension;
use Symfony\Component\Config\Resource\ClassExistenceResource;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

final class SyliusUxBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        $this->registerExtensionIfExists($container, SyliusUxSemanticUiExtension::class);
        $this->registerExtensionIfExists($container, SyliusUxSemanticUiGridExtension::class);
        $this->registerExtensionIfExists($container, SyliusUxSemanticUiCrudExtension::class);
        $this->registerExtensionIfExists($container, SyliusUxBootstrapExtension::class);
        $this->registerExtensionIfExists($container, SyliusUxBootstrapGridExtension::class);
    }

    public function getPath(): string
    {
        if (null === $this->path) {
            $reflected = new \ReflectionObject($this);
            // assume the modern directory structure by default
            $this->path = \dirname($reflected->getFileName(), 2);
        }

        return $this->path;
    }

    private function registerExtensionIfExists(ContainerBuilder $container, string $class)
    {
        $container->addResource(new ClassExistenceResource($class));

        if (class_exists($class)) {
            $container->registerExtension(new $class());
        }
    }
}
