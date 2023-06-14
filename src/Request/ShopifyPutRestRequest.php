<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Request;

use Scraper\Scraper\Attribute\Method;
use Scraper\Scraper\Attribute\Scraper;
use Scraper\Scraper\Request\RequestBody;
use Scraper\Scraper\Request\RequestHeaders;
use Scraper\ScraperShopify\Factory\SerializerFactory;
use Symfony\Component\Serializer\Normalizer\AbstractObjectNormalizer;

#[Scraper(method: Method::PUT)]
class ShopifyPutRestRequest extends ShopifyRestRequest implements RequestBody, RequestHeaders
{
    /** @var array<string, array<string, int|string>|int|string> */
    protected array $rawData = [];

    /**
     * @param array<string, array<string, int|string>|int|string> $rawData
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
        return SerializerFactory::create()
            ->serialize(
                $this->rawData,
                'json', [
                    AbstractObjectNormalizer::SKIP_NULL_VALUES => true,
                ]
            )
        ;
    }
}
