<?php

namespace Scraper\ScraperShopify\Entity;

class Metafields
{
    /** @var array<int, Metafield> */
    public array $metafields = [];

    public function addMetafield(Metafield $metafield): self
    {
        $this->metafields[] = $metafield;
        return $this;
    }
}
