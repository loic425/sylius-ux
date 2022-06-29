<?php

declare(strict_types=1);

namespace Tests\Sylius\Ux\Application\Grid;

use Sylius\Bundle\GridBundle\Builder\Field\StringField;
use Sylius\Bundle\GridBundle\Builder\Filter\StringFilter;
use Sylius\Bundle\GridBundle\Builder\GridBuilderInterface;
use Sylius\Bundle\GridBundle\Grid\AbstractGrid;
use Sylius\Bundle\GridBundle\Grid\ResourceAwareGridInterface;
use Tests\Sylius\Ux\Application\Entity\Book;

final class BookGrid extends AbstractGrid implements ResourceAwareGridInterface
{
    public static function getName(): string
    {
        return 'app_book';
    }

    public function buildGrid(GridBuilderInterface $gridBuilder): void
    {
        $gridBuilder
            ->addFilter(
                StringFilter::create('search', ['title'])
            )
            ->addOrderBy('title', 'asc')
            ->addField(
                StringField::create('title')
                    ->setSortable(true)
            );
        ;
    }

    public function getResourceClass(): string
    {
        return Book::class;
    }
}
