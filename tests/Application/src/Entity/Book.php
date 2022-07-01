<?php

declare(strict_types=1);

namespace Tests\Sylius\Ux\Application\Entity;

use Doctrine\ORM\Mapping as ORM;
use Sylius\Component\Resource\Annotation\SyliusCrudRoutes;
use Sylius\Component\Resource\Model\ResourceInterface;

#[ORM\Entity]
#[SyliusCrudRoutes(
    alias: 'app.book',
    path: 'semantic_ui/books',
    section: 'semantic_ui',
    templates: '@SyliusUx/semantic_ui/crud',
    grid: 'app_book',
)]
#[SyliusCrudRoutes(
    alias: 'app.book',
    path: 'bootstrap/books',
    section: 'bootstrap',
    templates: 'bootstrap/book',
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

    #[ORM\Column(type: 'string')]
    private ?string $authorName = null;

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

    public function getAuthorName(): ?string
    {
        return $this->authorName;
    }

    public function setAuthorName(?string $authorName): void
    {
        $this->authorName = $authorName;
    }
}
