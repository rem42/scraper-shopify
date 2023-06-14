<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Entity;

class SubmittedFulfillmentOrder
{
    public ?int $id = null;
    public ?int $shopId = null;
    public ?int $orderId = null;
    public ?int $assignedLocationId = null;
    public ?string $requestStatus = null;
    public ?string $status = null;
    /** @var array<int, string> */
    public array $supportedActions = [];
    public ?Destination $destination = null;
    public ?Origin $origin = null;
    /** @var array<int, LineItem> */
    public array $lineItems = [];
    /** @var array<int, OutgoingRequest> */
    public array $outgoingRequests = [];
    public ?string $fulfillmentServiceHandle = null;

    public function addSupportedAction(string $supportedAction): self
    {
        $this->supportedActions[] = $supportedAction;
        return $this;
    }

    public function addLineItem(LineItem $lineItem): self
    {
        $this->lineItems[] = $lineItem;
        return $this;
    }

    public function addOutgoingRequest(OutgoingRequest $outgoingRequest): self
    {
        $this->outgoingRequests[] = $outgoingRequest;
        return $this;
    }
}
