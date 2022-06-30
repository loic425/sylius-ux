<?php

declare(strict_types=1);

namespace Sylius\Ux\Bootstrap\Grid\DependencyInjection;

use Sylius\Ux\Core\DependencyInjection\AbstractTemplatesExtension;

final class SyliusUxBootstrapGridExtension extends AbstractTemplatesExtension
{
    public function getTemplatesDir(): string
    {
        return \dirname(__FILE__, 3) . '/templates';
    }
}
