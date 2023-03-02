<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Entity;

class ShippingLine
{
    public ?string $code = null;
    public ?string $price = null;
    public ?PriceSet $priceSet = null;
    public ?string $discountedPrice = null;
    public ?DiscountedPriceSet $discountedPriceSet = null;
    public ?string $source = null;
    public ?string $title = null;
    /** @var array<int, TaxLine> */
    public array $taxLines = [];
    public ?string $carrierIdentifier = null;
    public ?string $requestedFulfillmentServiceId = null;

    public function addTaxLine(TaxLine $taxLine): self
    {
        $this->taxLines[] = $taxLine;
        return $this;
    }
}
