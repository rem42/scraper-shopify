<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Entity;

class ShopifyProduct
{
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
    public ?string $status = null;
    public ?string $publishedScope = null;
    public ?string $tags = null;
    public ?string $adminGraphqlApiId = null;
    /** @var array<int, ShopifyProductVariant> */
    public array $variants = [];
    /** @var array<int, ShopifyProductOption> */
    public array $options = [];
    /** @var array<int, ShopifyImage> */
    public array $images = [];
    public ShopifyImage $image;

    public function addVariant(ShopifyProductVariant $variant): self
    {
        $this->variants[] = $variant;

        return $this;
    }

    public function addImage(ShopifyImage $image): self
    {
        $this->images[] = $image;

        return $this;
    }

    public function addOption(ShopifyProductOption $option): self
    {
        $this->options[] = $option;

        return $this;
    }

    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;
        return $this;
    }

    public function setBodyHtml(?string $bodyHtml): self
    {
        $this->bodyHtml = $bodyHtml;
        return $this;
    }

    public function setVendor(?string $vendor): self
    {
        $this->vendor = $vendor;
        return $this;
    }

    public function setProductType(?string $productType): self
    {
        $this->productType = $productType;
        return $this;
    }

    public function setCreatedAt(?\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    public function setHandle(?string $handle): self
    {
        $this->handle = $handle;
        return $this;
    }

    public function setUpdatedAt(?\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }

    public function setPublishedAt(?\DateTimeInterface $publishedAt): self
    {
        $this->publishedAt = $publishedAt;
        return $this;
    }

    public function setTemplateSuffix(?string $templateSuffix): self
    {
        $this->templateSuffix = $templateSuffix;
        return $this;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

    public function setPublishedScope(?string $publishedScope): self
    {
        $this->publishedScope = $publishedScope;
        return $this;
    }

    public function setTags(?string $tags): self
    {
        $this->tags = $tags;
        return $this;
    }

    public function setAdminGraphqlApiId(?string $adminGraphqlApiId): self
    {
        $this->adminGraphqlApiId = $adminGraphqlApiId;
        return $this;
    }

    public function setImage(ShopifyImage $image): self
    {
        $this->image = $image;
        return $this;
    }
}
