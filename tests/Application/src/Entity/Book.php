<?php

declare(strict_types=1);

namespace Tests\Sylius\Ux\Application\Entity;

use Doctrine\ORM\Mapping as ORM;
use Sylius\Component\Resource\Annotation\SyliusCrudRoutes;
use Sylius\Component\Resource\Model\ResourceInterface;

#[ORM\Entity]
#[SyliusCrudRoutes(
    alias: 'app.book',
    path: '{package}/books',
    templates: 'book',
    grid: 'app_book',
)]
class Book implements ResourceInterface
{
    #[ORM\Column(type: 'integer')]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'AUTO')]
    private ?int $id = null;

    #[ORM\Column(type: 'string')]
    private ?string $title = null;

    public function getId(): int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): void
    {
        $this->title = $title;
    }
}
