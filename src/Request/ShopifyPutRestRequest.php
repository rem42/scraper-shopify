<?php

namespace Scraper\ScraperShopify\Request;

use Scraper\Scraper\Annotation\Scraper;
use Scraper\Scraper\Request\RequestBody;
use Scraper\Scraper\Request\RequestHeaders;
use Scraper\ScraperShopify\Entity\ShopifyPut;
use Scraper\ScraperShopify\Factory\SerializerFactory;
use Symfony\Component\Serializer\Normalizer\AbstractObjectNormalizer;

/**
 * @Scraper(method="PUT")
 */
class ShopifyPutRestRequest extends ShopifyRestRequest implements RequestBody, RequestHeaders
{
    protected ?ShopifyPut $shopifyPut = null;
    protected array $rawData          = [];

    public function setShopifyPut(ShopifyPut $shopifyPut): self
    {
        $this->shopifyPut = $shopifyPut;

        return $this;
    }

    public function setRawData(array $rawData): self
    {
        $this->rawData = $rawData;

        return $this;
    }

    public function getHeaders(): array
    {
        return [
            'Content-Type' => 'application/json',
        ];
    }

    public function getBody()
    {
        $serializer = SerializerFactory::create();

        $data = $this->rawData;

        if ($this->shopifyPut instanceof ShopifyPut) {
            $data = $this->shopifyPut;
        }

        return $serializer->serialize($data, 'json', [
            AbstractObjectNormalizer::SKIP_NULL_VALUES => true,
        ]);
    }

    public function getJson(): array
    {
        return $this->rawData;
    }
}
