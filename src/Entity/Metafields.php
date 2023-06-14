<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Entity;

class Metafields
{
    use CallLimit;
    /** @var array<int, Metafield> */
    public array $metafields = [];

    public function addMetafield(Metafield $metafield): self
    {
        $this->metafields[] = $metafield;
        return $this;
    }
}
