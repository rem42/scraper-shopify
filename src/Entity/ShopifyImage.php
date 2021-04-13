<?php

namespace Scraper\ScraperShopify\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

class ShopifyImage
{
    private ?int $id = null;

    private ?int $productId = null;

    private ?int $position = null;

    private ?\DateTimeInterface $createdAt = null;

    private ?\DateTimeInterface $updatedAt = null;

    private ?string $alt = null;

    private ?int $width = null;

    private ?int $height = null;

    private ?string $src = null;

    /** @var Collection<int, int> */
    private Collection $variantIds;

    private ?string $adminGraphqlApiId = null;

    public function __construct()
    {
        $this->variantIds = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getProductId(): ?int
    {
        return $this->productId;
    }

    public function setProductId(?int $productId): self
    {
        $this->productId = $productId;

        return $this;
    }

    public function getPosition(): ?int
    {
        return $this->position;
    }

    public function setPosition(?int $position): self
    {
        $this->position = $position;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(?\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function getAlt(): ?string
    {
        return $this->alt;
    }

    public function setAlt(?string $alt): self
    {
        $this->alt = $alt;

        return $this;
    }

    public function getWidth(): ?int
    {
        return $this->width;
    }

    public function setWidth(?int $width): self
    {
        $this->width = $width;

        return $this;
    }

    public function getHeight(): ?int
    {
        return $this->height;
    }

    public function setHeight(?int $height): self
    {
        $this->height = $height;

        return $this;
    }

    public function getSrc(): ?string
    {
        return $this->src;
    }

    public function setSrc(?string $src): self
    {
        $this->src = $src;

        return $this;
    }

    /**
     * @return Collection<int, int>
     */
    public function getVariantIds(): Collection
    {
        return $this->variantIds;
    }

    public function addVariantId(int $variantId): self
    {
        $this->variantIds->add($variantId);

        return $this;
    }

    public function removeVariantId(int $variantId): self
    {
        $this->variantIds->removeElement($variantId);

        return $this;
    }

    public function getAdminGraphqlApiId(): ?string
    {
        return $this->adminGraphqlApiId;
    }

    public function setAdminGraphqlApiId(?string $adminGraphqlApiId): self
    {
        $this->adminGraphqlApiId = $adminGraphqlApiId;

        return $this;
    }
}
