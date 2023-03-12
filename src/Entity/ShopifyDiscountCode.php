<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Entity;

class ShopifyDiscountCode
{
    public ?string $code;
    public ?string $amount;
    public ?string $type;

    public function setCode(?string $code): self
    {
        $this->code = $code;
        return $this;
    }

    public function setAmount(?string $amount): self
    {
        $this->amount = $amount;
        return $this;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;
        return $this;
    }
}
