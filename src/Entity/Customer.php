<?php

namespace Scraper\ScraperShopify\Entity;

class Customer
{
    public ?bool $acceptsMarketing = null;
    public ?string $acceptsMarketingUpdatedAt = null;
    /** @var array<int, Address> */
    public array $addresses = [];
    public ?string $currency = null;
    public ?\DateTimeInterface $createdAt = null;
    public ?DefaultAddress $defaultAddress = null;
    public ?string $email = null;
    public ?EmailMarketingConsent $emailMarketingConsent = null;
    public ?string $firstName = null;
    public ?int $id = null;
    public ?string $lastName = null;
    public ?int $lastOrderId = null;
    public ?string $lastOrderName = null;
    public ?Metafield $metafield = null;
    public ?string $marketingOptInLevel = null;
    public $multipassIdentifier = null;
    public ?string $note = null;
    public ?int $ordersCount = null;
    public ?string $password = null;
    public ?string $passwordConfirmation = null;
    public ?string $phone = null;
    public ?SmsMarketingConsent $smsMarketingConsent = null;
    public ?string $state = null;
    public ?string $tags = null;
    public ?bool $taxExempt = null;
    /** @var array<int, string> */
    public array $taxExemptions = [];
    public ?string $totalSpent = null;
    public ?\DateTimeInterface $updatedAt = null;
    public ?bool $verifiedEmail = null;

    public function addAddress(Address $address): self
    {
        $this->addresses[] = $address;
        return $this;
    }

    public function addTaxExemption(string $taxExemption): self
    {
        $this->taxExemptions[] = $taxExemption;
        return $this;
    }


}
