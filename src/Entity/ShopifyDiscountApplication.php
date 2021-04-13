<?php

namespace Scraper\ScraperShopify\Entity;

class ShopifyDiscountApplication
{
    private ?string $type = null;

    private ?string $value = null;

    private ?string $valueType = null;

    private ?string $allocationMethod = null;

    private ?string $targetSelection = null;

    private ?string $targetType = null;

    private ?string $code = null;

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(?string $value): self
    {
        $this->value = $value;

        return $this;
    }

    public function getValueType(): ?string
    {
        return $this->valueType;
    }

    public function setValueType(?string $valueType): self
    {
        $this->valueType = $valueType;

        return $this;
    }

    public function getAllocationMethod(): ?string
    {
        return $this->allocationMethod;
    }

    public function setAllocationMethod(?string $allocationMethod): self
    {
        $this->allocationMethod = $allocationMethod;

        return $this;
    }

    public function getTargetSelection(): ?string
    {
        return $this->targetSelection;
    }

    public function setTargetSelection(?string $targetSelection): self
    {
        $this->targetSelection = $targetSelection;

        return $this;
    }

    public function getTargetType(): ?string
    {
        return $this->targetType;
    }

    public function setTargetType(?string $targetType): self
    {
        $this->targetType = $targetType;

        return $this;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): self
    {
        $this->code = $code;

        return $this;
    }
}
