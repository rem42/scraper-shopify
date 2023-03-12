<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Entity;

class ShopifyClientDetails
{
    public ?string $acceptLanguage = null;
    public ?string $browserHeight = null;
    public ?string $browserIp = null;
    public ?string $browserWidth = null;
    public ?string $sessionHash = null;
    public ?string $userAgent = null;

    public function setAcceptLanguage(?string $acceptLanguage): self
    {
        $this->acceptLanguage = $acceptLanguage;
        return $this;
    }

    public function setBrowserHeight(?string $browserHeight): self
    {
        $this->browserHeight = $browserHeight;
        return $this;
    }

    public function setBrowserIp(?string $browserIp): self
    {
        $this->browserIp = $browserIp;
        return $this;
    }

    public function setBrowserWidth(?string $browserWidth): self
    {
        $this->browserWidth = $browserWidth;
        return $this;
    }

    public function setSessionHash(?string $sessionHash): self
    {
        $this->sessionHash = $sessionHash;
        return $this;
    }

    public function setUserAgent(?string $userAgent): self
    {
        $this->userAgent = $userAgent;
        return $this;
    }
}
