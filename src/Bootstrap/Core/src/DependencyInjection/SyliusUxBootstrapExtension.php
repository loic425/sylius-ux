<?php

declare(strict_types=1);

namespace Sylius\Ux\Bootstrap\Core\DependencyInjection;

use Sylius\Ux\Core\DependencyInjection\AbstractTemplatesExtension;

final class SyliusUxBootstrapExtension extends AbstractTemplatesExtension
{
    public function getTemplatesDir(): string
    {
        return \dirname(__FILE__, 3) . '/templates';
    }
}
