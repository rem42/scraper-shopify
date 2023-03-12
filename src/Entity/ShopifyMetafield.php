<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Entity;

class ShopifyMetafield
{
    public ?int $id = null;
    public ?string $namespace = null;
    public ?string $key = null;
    public ?string $value = null;
    public ?string $type = null;
    /** @deprecated  */
    public ?string $valueType = null;
    public ?string $description = null;
    public ?int $ownerId = null;
    public ?\DateTimeInterface $createdAt = null;
    public ?\DateTimeInterface $updatedAt = null;
    public ?string $ownerResource = null;
    public ?string $adminGraphqlApiId = null;

    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function setNamespace(?string $namespace): self
    {
        $this->namespace = $namespace;
        return $this;
    }

    public function setKey(?string $key): self
    {
        $this->key = $key;
        return $this;
    }

    public function setValue(?string $value): self
    {
        $this->value = $value;
        return $this;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;
        return $this;
    }

    public function setValueType(?string $valueType): self
    {
        $this->valueType = $valueType;
        return $this;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function setOwnerId(?int $ownerId): self
    {
        $this->ownerId = $ownerId;
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

    public function setOwnerResource(?string $ownerResource): self
    {
        $this->ownerResource = $ownerResource;
        return $this;
    }

    public function setAdminGraphqlApiId(?string $adminGraphqlApiId): self
    {
        $this->adminGraphqlApiId = $adminGraphqlApiId;
        return $this;
    }
}
