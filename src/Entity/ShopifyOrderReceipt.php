<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Entity;

class ShopifyOrderReceipt
{
    public ?bool $testcase        = null;
    public ?string $authorization = null;

    public function setTestcase(?bool $testcase): self
    {
        $this->testcase = $testcase;
        return $this;
    }

    public function setAuthorization(?string $authorization): self
    {
        $this->authorization = $authorization;
        return $this;
    }
}
