<?php

namespace Scraper\ScraperShopify\Entity;

class Product
{
    public ?int $id = null;
    public ?string $title = null;
    public ?string $bodyHtml = null;
    public ?string $vendor = null;
    public ?string $productType = null;
    public ?\DateTimeInterface $createdAt = null;
    public ?string $handle = null;
    public ?\DateTimeInterface $updatedAt = null;
    public ?string $publishedAt = null;
    public $templateSuffix = null;
    public ?string $publishedScope = null;
    public ?string $tags = null;
    public ?string $adminGraphqlApiId = null;
    /** @var array<int, Variant> */
    public array $variants = [];
    /** @var array<int, Option> */
    public array $options = [];
    /** @var array<int, Image> */
    public array $images = [];
    public ?Image $image = null;

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

    public function addImage(Image $image): self
    {
        $this->images[] = $image;
        return $this;
    }
}
