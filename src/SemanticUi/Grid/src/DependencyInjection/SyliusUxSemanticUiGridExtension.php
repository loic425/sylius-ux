<?php

namespace Sylius\Ux\SemanticUi\Grid\DependencyInjection;

use Sylius\Ux\Core\DependencyInjection\AbstractTemplatesExtension;

class SyliusUxSemanticUiGridExtension extends AbstractTemplatesExtension
{
    public function getTemplatesDir(): string
    {
        return \dirname(__FILE__, 3) . '/templates';
    }
}

