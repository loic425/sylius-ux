<?php

declare(strict_types=1);

namespace Sylius\Ux\Core\Symfony\Bundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

final class SyliusUxBundle extends Bundle
{
    public function getPath(): string
    {
        if (null === $this->path) {
            $reflected = new \ReflectionObject($this);
            // assume the modern directory structure by default
            $this->path = \dirname($reflected->getFileName(), 2);
        }

        return $this->path;
    }
}
