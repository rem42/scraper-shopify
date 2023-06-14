<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Entity;

class Product
{
    use CallLimit;
    public ?int $id = null;
    public ?string $title = null;
    public ?string $bodyHtml = null;
    public ?string $vendor = null;
    public ?string $productType = null;
    public ?\DateTimeInterface $createdAt = null;
    public ?string $handle = null;
    public ?\DateTimeInterface $updatedAt = null;
    public ?\DateTimeInterface $publishedAt = null;
    public ?string $templateSuffix = null;
    public ?string $publishedScope = null;
    public ?string $tags = null;
    public ?string $adminGraphqlApiId = null;
    /** @var array<int, Variant> */
    public array $variants = [];
    /** @var array<int, Option> */
    public array $options = [];

    public function addVariant(Variant $variant): self
    {
        $this->variants[] = $variant;
        return $this;
    }

    public function addOption(Option $option): self
    {
        $this->options[] = $option;
        return $this;
    }
}
