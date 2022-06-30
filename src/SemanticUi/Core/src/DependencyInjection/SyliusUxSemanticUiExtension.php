<?php

namespace Sylius\Ux\SemanticUi\Core\DependencyInjection;

use Sylius\Ux\Core\DependencyInjection\AbstractTemplatesExtension;

class SyliusUxSemanticUiExtension extends AbstractTemplatesExtension
{
    public function getTemplatesDir(): string
    {
        return \dirname(__FILE__, 3) . '/templates';
    }
}
