<?php

namespace Scraper\ScraperShopify\Request;

use Scraper\Scraper\Annotation\Scraper;
use Scraper\Scraper\Request\RequestBody;
use Scraper\Scraper\Request\RequestHeaders;
use Scraper\ScraperShopify\Factory\SerializerFactory;
use Symfony\Component\Serializer\Normalizer\AbstractObjectNormalizer;

/**
 * @Scraper(method="POST")
 */
class ShopifyPostRestRequest extends ShopifyRestRequest implements RequestBody, RequestHeaders
{
    /** @var array<string, array|int|string> */
    protected array $rawData = [];

    /**
     * @param array<string, array|int|string> $rawData
     */
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

        return $serializer->serialize($this->rawData, 'json', [
            AbstractObjectNormalizer::SKIP_NULL_VALUES => true,
        ]);
    }
}
