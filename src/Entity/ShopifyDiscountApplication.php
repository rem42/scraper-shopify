<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Entity;

class ShopifyDiscountApplication
{
    public ?string $type             = null;
    public ?string $value            = null;
    public ?string $valueType        = null;
    public ?string $allocationMethod = null;
    public ?string $targetSelection  = null;
    public ?string $targetType       = null;
    public ?string $code             = null;

    public function setType(?string $type): self
    {
        $this->type = $type;
        return $this;
    }

    public function setValue(?string $value): self
    {
        $this->value = $value;
        return $this;
    }

    public function setValueType(?string $valueType): self
    {
        $this->valueType = $valueType;
        return $this;
    }

    public function setAllocationMethod(?string $allocationMethod): self
    {
        $this->allocationMethod = $allocationMethod;
        return $this;
    }

    public function setTargetSelection(?string $targetSelection): self
    {
        $this->targetSelection = $targetSelection;
        return $this;
    }

    public function setTargetType(?string $targetType): self
    {
        $this->targetType = $targetType;
        return $this;
    }

    public function setCode(?string $code): self
    {
        $this->code = $code;
        return $this;
    }
}
