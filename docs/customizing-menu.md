# Customizing menu

Add a new AdminMenuBuilder service.

```php
<?php

declare(strict_types=1);

namespace Tests\Sylius\Ux\Application\Menu;

use Knp\Menu\FactoryInterface;
use Knp\Menu\ItemInterface;
use Sylius\Ux\Core\Menu\MenuBuilderInterface;

final class AdminMenuBuilder implements MenuBuilderInterface
{
    public function __construct(private MenuBuilderInterface $menuBuilder)
    {
    }

    public function createMenu(array $options): ItemInterface
    {
        $menu = $this->menuBuilder->createMenu($options);

        $this->addLibrarySubMenu($menu);

        return $menu;
    }

    private function addLibrarySubMenu(ItemInterface $menu): void
    {
        $library = $menu
            ->addChild('library')
            ->setLabel('app.ui.library')
        ;

        $library->addChild('backend_book', ['route' => 'app_backend_book_index'])
            ->setLabel('app.ui.books')
            ->setLabelAttribute('icon', 'book');
    }
}

```

And declare the menu in services.

```yaml
# services.yaml

services:
    # [...]
    
    App\Menu\AdminMenuBuilder:
        decorates: 'sylius.ux.menu.admin'

```
