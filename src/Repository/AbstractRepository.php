<?php

namespace Sce\CasasJewelsVendor\Repository;

use GuzzleHttp\Client;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\SerializerInterface;

class AbstractRepository
{
    protected string $url;
    protected string $apiKey;
    protected SerializerInterface $serializer;
    protected NormalizerInterface $normalizer;

    protected Client $client;

    public function __construct(string $url, string $apiKey, SerializerInterface $serializer,
                                NormalizerInterface $normalizer)
    {
        $this->url = $url;
        $this->apiKey = $apiKey;
        $this->serializer = $serializer;
        $this->normalizer = $normalizer;
        $this->client = new Client(['base_uri' => $url]);
    }
}