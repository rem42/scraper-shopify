<?php

namespace Scraper\ScraperShopify\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

class ShopifyProduct
{
    private ?int $id = null;

    private ?string $title = null;

    private ?string $bodyHtml = null;

    private ?string $vendor = null;

    private ?string $productType = null;

    private ?\DateTimeInterface $createdAt = null;

    private ?string $handle = null;

    private ?\DateTimeInterface $updatedAt = null;

    private ?\DateTimeInterface $publishedAt = null;

    private ?string $templateSuffix = null;

    private ?string $status = null;

    private ?string $publishedScope = null;

    private ?string $tags = null;

    private ?string $adminGraphqlApiId = null;

    /** @var Collection<int, ShopifyProductVariant> */
    private Collection $variants;

    /** @var Collection<int, ShopifyProductOption> */
    private Collection $options;

    /** @var Collection<int, ShopifyImage> */
    private Collection $images;

    private ShopifyImage $image;

    public function __construct()
    {
        $this->variants = new ArrayCollection();
        $this->options  = new ArrayCollection();
        $this->images   = new ArrayCollection();
    }

    /**
     * @return Collection<int, ShopifyProductVariant>
     */
    public function getVariants(): Collection
    {
        return $this->variants;
    }

    public function addVariant(ShopifyProductVariant $variant): self
    {
        $this->variants->add($variant);

        return $this;
    }

    public function removeVariant(ShopifyProductVariant $variant): self
    {
        $this->variants->removeElement($variant);

        return $this;
    }

    /**
     * @return Collection<int, ShopifyImage>
     */
    public function getImages(): Collection
    {
        return $this->images;
    }

    public function addImage(ShopifyImage $image): self
    {
        $this->images->add($image);

        return $this;
    }

    public function removeImage(ShopifyImage $image): self
    {
        $this->images->removeElement($image);

        return $this;
    }

    /**
     * @return Collection<int, ShopifyProductOption>
     */
    public function getOptions(): Collection
    {
        return $this->options;
    }

    public function addOption(ShopifyProductOption $option): self
    {
        $this->options->add($option);

        return $this;
    }

    public function removeOption(ShopifyProductOption $option): self
    {
        $this->options->removeElement($option);

        return $this;
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

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getBodyHtml(): ?string
    {
        return $this->bodyHtml;
    }

    public function setBodyHtml(?string $bodyHtml): self
    {
        $this->bodyHtml = $bodyHtml;

        return $this;
    }

    public function getVendor(): ?string
    {
        return $this->vendor;
    }

    public function setVendor(?string $vendor): self
    {
        $this->vendor = $vendor;

        return $this;
    }

    public function getProductType(): ?string
    {
        return $this->productType;
    }

    public function setProductType(?string $productType): self
    {
        $this->productType = $productType;

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

    public function getHandle(): ?string
    {
        return $this->handle;
    }

    public function setHandle(?string $handle): self
    {
        $this->handle = $handle;

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

    public function getPublishedAt(): ?\DateTimeInterface
    {
        return $this->publishedAt;
    }

    public function setPublishedAt(?\DateTimeInterface $publishedAt): self
    {
        $this->publishedAt = $publishedAt;

        return $this;
    }

    public function getTemplateSuffix(): ?string
    {
        return $this->templateSuffix;
    }

    public function setTemplateSuffix(?string $templateSuffix): self
    {
        $this->templateSuffix = $templateSuffix;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getPublishedScope(): ?string
    {
        return $this->publishedScope;
    }

    public function setPublishedScope(?string $publishedScope): self
    {
        $this->publishedScope = $publishedScope;

        return $this;
    }

    public function getTags(): ?string
    {
        return $this->tags;
    }

    public function setTags(?string $tags): self
    {
        $this->tags = $tags;

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

    public function getImage(): ShopifyImage
    {
        return $this->image;
    }

    public function setImage(ShopifyImage $image): self
    {
        $this->image = $image;

        return $this;
    }
}
