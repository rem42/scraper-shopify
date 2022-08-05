<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Entity;

class ShopifyImage
{
    public ?int $id                       = null;
    public ?int $productId                = null;
    public ?int $position                 = null;
    public ?\DateTimeInterface $createdAt = null;
    public ?\DateTimeInterface $updatedAt = null;
    public ?string $alt                   = null;
    public ?int $width                    = null;
    public ?int $height                   = null;
    public ?string $src                   = null;
    /** @var array<int, int> */
    public array $variantIds          = [];
    public ?string $adminGraphqlApiId = null;

    public function addVariantId(int $variantId): self
    {
        $this->variantIds[] = $variantId;

        return $this;
    }

    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function setProductId(?int $productId): self
    {
        $this->productId = $productId;
        return $this;
    }

    public function setPosition(?int $position): self
    {
        $this->position = $position;
        return $this;
    }

    public function setCreatedAt(?\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    public function setUpdatedAt(?\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }

    public function setAlt(?string $alt): self
    {
        $this->alt = $alt;
        return $this;
    }

    public function setWidth(?int $width): self
    {
        $this->width = $width;
        return $this;
    }

    public function setHeight(?int $height): self
    {
        $this->height = $height;
        return $this;
    }

    public function setSrc(?string $src): self
    {
        $this->src = $src;
        return $this;
    }

    public function setAdminGraphqlApiId(?string $adminGraphqlApiId): self
    {
        $this->adminGraphqlApiId = $adminGraphqlApiId;
        return $this;
    }
}
