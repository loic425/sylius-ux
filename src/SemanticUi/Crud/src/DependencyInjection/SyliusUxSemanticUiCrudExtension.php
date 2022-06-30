<?php

namespace Sylius\Ux\SemanticUi\Crud\DependencyInjection;

use Sylius\Ux\Core\DependencyInjection\AbstractTemplatesExtension;

class SyliusUxSemanticUiCrudExtension extends AbstractTemplatesExtension
{
    public static function getTemplatesDir(): string
    {
        return \dirname(__FILE__, 3) . '/templates';
    }
}
