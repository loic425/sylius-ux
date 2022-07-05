# Setup

```bash
composer require loic425/sylius-ux
```

If you don't use Symfony Flex,

Enable the bundle on `config/bundles.php`

```php
<?php

return [
    // [...]
    Sylius\Ux\Core\SyliusUxCoreBundle::class => ['all' => true],
    Sylius\Ux\Bootstrap\SyliusUxBootstrapBundle::class => ['all' => true],
    Sylius\Ux\SemanticUi\SyliusUxSemanticUiBundle::class => ['all' => true],
];
```
