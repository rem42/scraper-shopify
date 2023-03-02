<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Entity;

class FulfillmentOrder
{
    use CallLimit;
    public ?int $assignedLocationId = null;
    public ?Destination $destination = null;
    public ?DeliveryMethod $deliveryMethod = null;
    public ?\DateTimeInterface $fulfillAt = null;
    public ?string $fulfillBy = null;
    /** @var array<int, FulfillmentHold> */
    public array $fulfillmentHolds = [];
    public ?int $id = null;
    public ?InternationalDuty $internationalDuties = null;
    /** @var array<int, LineItem> */
    public array $lineItems = [];
    public ?int $orderId = null;
    public ?string $requestStatus = null;
    public ?int $shopId = null;
    public ?string $status = null;
    /** @var array<int, string> */
    public array $supportedActions = [];
    /** @var array<int, MerchantRequest> */
    public array $merchantRequests = [];
    public ?AssignedLocation $assignedLocation = null;
    public ?\DateTimeInterface $createdAt = null;
    public ?\DateTimeInterface $updatedAt = null;

    public function addFulfillmentHold(FulfillmentHold $fulfillmentHold): self
    {
        $this->fulfillmentHolds[] = $fulfillmentHold;
        return $this;
    }

    public function addLineItem(LineItem $lineItem): self
    {
        $this->lineItems[] = $lineItem;
        return $this;
    }

    public function addSupportedAction(string $supportedAction): self
    {
        $this->supportedActions[] = $supportedAction;
        return $this;
    }

    public function addMerchantRequest(MerchantRequest $merchantRequest): self
    {
        $this->merchantRequests[] = $merchantRequest;
        return $this;
    }
}
