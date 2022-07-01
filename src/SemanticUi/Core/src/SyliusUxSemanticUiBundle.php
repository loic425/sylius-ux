<?php

namespace Sylius\Ux\SemanticUi\Core;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class SyliusUxSemanticUiBundle extends Bundle
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
