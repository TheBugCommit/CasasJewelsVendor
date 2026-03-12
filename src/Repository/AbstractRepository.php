<?php

namespace Sce\CasasJewelsVendor\Repository;

use Symfony\Component\Serializer\SerializerInterface;

class AbstractRepository
{
    protected string $url;
    protected string $apiKey;
    protected SerializerInterface $serializer;

    public function __construct(string $url, string $apiKey, SerializerInterface $serializer)
    {
        $this->url = $url;
        $this->apiKey = $apiKey;
        $this->serializer = $serializer;
    }
}