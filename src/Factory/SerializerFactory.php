<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Factory;

use Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory;
use Symfony\Component\Serializer\Mapping\Loader\AttributeLoader;
use Symfony\Component\Serializer\NameConverter\CamelCaseToSnakeCaseNameConverter;
use Symfony\Component\Serializer\NameConverter\MetadataAwareNameConverter;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Normalizer\PropertyNormalizer;
use Symfony\Component\Serializer\Serializer;

class SerializerFactory
{
    public static function create(): Serializer
    {
        $classMetadataFactory = new ClassMetadataFactory(new AttributeLoader());

        $metadataAwareNameConverter = new MetadataAwareNameConverter($classMetadataFactory, new CamelCaseToSnakeCaseNameConverter());

        $encoders = ['json' => new JsonEncoder(), 'xml' => new XmlEncoder()];
        $normalizers = [
            new DateTimeNormalizer([
                DateTimeNormalizer::FORMAT_KEY => 'Y-m-d H:i:s',
            ]),
            new ObjectNormalizer(
                $classMetadataFactory,
                $metadataAwareNameConverter,
                null,
                new ReflectionExtractor()
            ),
            new PropertyNormalizer(),
            new ArrayDenormalizer(),
        ];

        return new Serializer($normalizers, $encoders);
    }
}
