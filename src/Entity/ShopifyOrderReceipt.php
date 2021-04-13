<?php

namespace Scraper\ScraperShopify\Entity;

class ShopifyOrderReceipt
{
    private ?bool $testcase = null;

    private ?string $authorization = null;

    public function getTestcase(): ?bool
    {
        return $this->testcase;
    }

    public function setTestcase(?bool $testcase): self
    {
        $this->testcase = $testcase;

        return $this;
    }

    public function getAuthorization(): ?string
    {
        return $this->authorization;
    }

    public function setAuthorization(?string $authorization): self
    {
        $this->authorization = $authorization;

        return $this;
    }
}
