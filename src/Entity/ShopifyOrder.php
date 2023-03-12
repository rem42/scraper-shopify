<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Entity;

class ShopifyOrder
{
    public ?int $id = null;
    public ?string $email = null;
    public ?bool $estimatedTaxes = null;
    public ?string $closedAt = null;
    public ?\DateTimeInterface $createdAt = null;
    public ?\DateTimeInterface $updatedAt = null;
    public ?int $number = null;
    public ?string $note = null;
    public ?string $token = null;
    /** @deprecated  */
    public ?string $gateway = null;
    public ?bool $test = null;
    public ?string $totalPrice = null;
    public ?string $subtotalPrice = null;
    public ?float $totalWeight = null;
    public ?string $totalTax = null;
    public ?bool $taxesIncluded = null;
    public ?string $currency = null;
    public ?string $financialStatus = null;
    public ?bool $confirmed = null;
    public ?string $totalDiscounts = null;
    public ?string $totalLineItemsPrice = null;
    public ?string $cartToken = null;
    public ?bool $buyerAcceptsMarketing = null;
    public ?string $name = null;
    public ?string $referringSite = null;
    public ?string $landingSite = null;
    public ?\DateTimeInterface $cancelledAt = null;
    public ?string $cancelReason = null;
    public ?string $totalPriceUsd = null;
    public ?string $checkoutToken = null;
    public ?string $reference = null;
    public ?int $userId = null;
    public ?int $locationId = null;
    public ?string $sourceIdentifier = null;
    public ?string $sourceUrl = null;
    public ?\DateTimeInterface $processedAt = null;
    public ?int $device_id = null;
    public ?string $phone = null;
    public ?string $customerLocale = null;
    public ?int $appId = null;
    public ?string $browserIp = null;
    public ?ShopifyClientDetails $clientDetails = null;
    public ?string $landingSiteRef = null;
    public ?int $orderNumber = null;
    /** @var array<int, ShopifyDiscountApplication> */
    public array $discountApplications = [];
    /** @var array<int, ShopifyDiscountCode> */
    public array $discountCodes = [];
    /** @var array<int, ShopifyNoteAttribute> */
    public array $noteAttributes = [];
    /** @deprecated  */
    public ?ShopifyPaymentDetails $paymentDetails = null;
    /** @var array<int, string> */
    public array $paymentGatewayNames = [];
    public ?string $processingMethod = null;
    public ?int $checkoutId = null;
    public ?string $sourceName = null;
    public ?string $fulfillmentStatus = null;
    /** @var array<int, ShopifyOrderTaxLine> */
    public array $taxLines = [];
    public ?string $tags = null;
    public ?string $contactEmail = null;
    public ?string $orderStatusUrl = null;
    public ?string $presentmentCurrency = null;
    public ?ShopifyPriceSet $totalLineItemsPriceSet = null;
    public ?ShopifyPriceSet $totalDiscountsSet = null;
    public ?ShopifyPriceSet $totalShippingPriceSet = null;
    public ?ShopifyPriceSet $subtotalPriceSet = null;
    public ?ShopifyPriceSet $totalPriceSet = null;
    public ?ShopifyPriceSet $totalTaxSet = null;
    /** @var array<int, ShopifyOrderLineItem> */
    public array $lineItems = [];
    /** @var array<int, ShopifyOrderFulfillment> */
    public array $fulfillments = [];
    /** @var array<int, ShopifyOrderRefund> */
    public array $refunds = [];
    public ?string $totalTipReceived = null;
    public ?string $originalTotalDutiesSet = null;
    public ?string $currentTotalDutiesSet = null;
    public ?string $adminGraphqlApiId = null;
    /** @var array<int, ShopifyOrderShippingLine> */
    public array $shippingLines = [];
    public ?ShopifyCustomerAddress $billingAddress = null;
    public ?ShopifyCustomerAddress $shippingAddress = null;
    public ?ShopifyCustomer $customer = null;

    public function addDiscountApplication(ShopifyDiscountApplication $discountApplication): self
    {
        $this->discountApplications[] = $discountApplication;

        return $this;
    }

    public function addDiscountCode(ShopifyDiscountCode $discountCode): self
    {
        $this->discountCodes[] = $discountCode;

        return $this;
    }

    public function addNoteAttribute(ShopifyNoteAttribute $noteAttribute): self
    {
        $this->noteAttributes[] = $noteAttribute;

        return $this;
    }

    public function addPaymentGatewayName(string $paymentGatewayName): self
    {
        $this->paymentGatewayNames[] = $paymentGatewayName;

        return $this;
    }

    public function addTaxLine(ShopifyOrderTaxLine $taxLine): self
    {
        $this->taxLines[] = $taxLine;

        return $this;
    }

    public function addLineItem(ShopifyOrderLineItem $lineItem): self
    {
        $this->lineItems[] = $lineItem;

        return $this;
    }

    public function addFulfillment(ShopifyOrderFulfillment $fulfillment): self
    {
        $this->fulfillments[] = $fulfillment;

        return $this;
    }

    public function addRefund(ShopifyOrderRefund $refund): self
    {
        $this->refunds[] = $refund;

        return $this;
    }

    public function addShippingLine(ShopifyOrderShippingLine $shippingLine): self
    {
        $this->shippingLines[] = $shippingLine;

        return $this;
    }
}
