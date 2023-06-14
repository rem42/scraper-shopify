<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Api;

use Scraper\Scraper\Api\AbstractApi;
use Scraper\ScraperShopify\Exception\ShopifyUnexpectedException;
use Scraper\ScraperShopify\Request\ShopifyRestRequest;
use Scraper\ScraperShopify\Tools\ResourceMapping;
use Symfony\Component\Serializer\Normalizer\AbstractObjectNormalizer;

abstract class ShopifyApi extends AbstractApi
{
    public function execute(): object|array|bool|string
    {
        $content = $this->response->getContent();

        if (!$this->request instanceof ShopifyRestRequest) {
            throw new ShopifyUnexpectedException('cannot handle ' . \get_class($this->request));
        }
        /** @var ShopifyRestRequest $request */
        $request = $this->request;

        $className = ResourceMapping::find($request);

        $isOne = false;

        if (
            $request->getSubId()
            || ($request->getId() && null === $request->getSubResource())
        ) {
            $isOne = true;
        }

        /** @var array<int|string, int|string> $data */
        $data = json_decode($content, true, 512, \JSON_THROW_ON_ERROR);

        if ($isOne) {
            $this->handleApiCallLimit($data[ResourceMapping::singularize($request)]);
            $content = json_encode($data[ResourceMapping::singularize($request)], \JSON_THROW_ON_ERROR);
        } else {
            $this->handleApiCallLimit($data);
            $this->handlePageInfo($data);
            $content = json_encode($data, \JSON_THROW_ON_ERROR);
        }

        try {
            /* @phpstan-ignore-next-line */
            return $this->serializer->deserialize(
                $content,
                $className,
                'json',
                [
                    AbstractObjectNormalizer::DISABLE_TYPE_ENFORCEMENT => true,
                ]
            );
        } catch (\Throwable $e) {
            throw new ShopifyUnexpectedException('cannot decode content: ' . $content, 0, $e);
        }
    }

    /**
     * @param array<string, string> $data
     */
    private function handleApiCallLimit(array &$data): void
    {
        $headers = $this->response->getHeaders();

        if (!isset($headers['http_x_shopify_shop_api_call_limit'])) {
            return;
        }

        $callLimit = $headers['http_x_shopify_shop_api_call_limit'][0];
        $callLimit = explode('/', $callLimit);

        $data['api_call_limit'] = [
            'current' => (int) $callLimit[0],
            'max' => (int) $callLimit[1],
        ];
    }

    /**
     * @param array<string, string> $data
     */
    private function handlePageInfo(array &$data): void
    {
        $data['next_page_info'] = $this->getLinkHeaderUrl('next');
        $data['previous_page_info'] = $this->getLinkHeaderUrl('previous');
    }

    /**
     * @return array<string, string>
     */
    private function getLinkHeaderUrl(string $name): array
    {
        $headers = $this->response->getHeaders();

        if (!isset($headers['link']) || 1 !== \count($headers['link'])) {
            return [];
        }

        $matches = [];
        preg_match('/<(.[^>]*)>; rel="' . $name . '"/', $headers['link'][0], $matches);

        if (0 === \count($matches) || !$matches[1]) {
            return [];
        }

        $query_params = parse_url($matches[1], \PHP_URL_QUERY);

        if (!\is_string($query_params)) {
            return [];
        }

        parse_str($query_params, $data);

        if (!isset($data['page_info'])) {
            return [];
        }

        /** @var string $dataPageInfo */
        $dataPageInfo = $data['page_info'];

        /** @var array<string, string> $pageInfo */
        $pageInfo = json_decode(base64_decode($dataPageInfo), true, 512, \JSON_THROW_ON_ERROR);
        $pageInfo['page_info'] = $dataPageInfo;

        return $pageInfo;
    }
}
