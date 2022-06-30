<?php

declare(strict_types=1);

namespace Sylius\Ux\Core\DependencyInjection;

interface TemplatesExtensionInterface
{
    public static function getTemplatesDir(): string;
}
