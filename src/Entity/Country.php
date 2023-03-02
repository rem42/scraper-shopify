<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Entity;

class Country
{
    use CallLimit;
    public ?int $id = null;
    public ?string $name = null;
    public ?string $code = null;
    public ?string $taxName = null;
    public float|int|null $tax = null;
    /** @var array<int, Province> */
    public array $provinces = [];

    public function addProvince(Province $province): self
    {
        $this->provinces[] = $province;
        return $this;
    }
}
