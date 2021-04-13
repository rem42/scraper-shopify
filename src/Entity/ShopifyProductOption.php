<?php

namespace Scraper\ScraperShopify\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

class ShopifyProductOption
{
    private ?int $id = null;

    private ?int $productId = null;

    private ?string $name = null;

    private ?int $position = null;

    /** @var Collection<int, string> */
    private Collection $values;

    public function __construct()
    {
        $this->values = new ArrayCollection();
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

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

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

    /**
     * @return Collection<int, string>
     */
    public function getValues(): Collection
    {
        return $this->values;
    }

    public function addValue(string $value): self
    {
        $this->values->add($value);

        return $this;
    }

    public function removeValue(string $value): self
    {
        $this->values->removeElement($value);

        return $this;
    }
}
