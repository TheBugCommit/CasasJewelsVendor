<?php

namespace Sce\CasasJewelsVendor\Repository;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Sce\CasasJewelsVendor\DTO\Requests\QueryProducts\GetProductListRequestDTO;
use Sce\CasasJewelsVendor\DTO\Requests\QueryProducts\GetProductListResponseDTO;
use Symfony\Component\Serializer\Exception\ExceptionInterface;
use Symfony\Component\Serializer\SerializerInterface;

final class ProductRepository extends AbstractRepository
{
    private Client $client;

    public function __construct(string $url, string $apiKey, SerializerInterface $serializer)
    {
        parent::__construct($url, $apiKey, $serializer);
        $this->client =new Client(['base_uri' => $url]);
    }

    /**
     * @throws ExceptionInterface
     * @throws GuzzleException
     */
    public function getProductList(GetProductListRequestDTO $request): GetProductListResponseDTO
    {
        $jsonRequest = $this->serializer->serialize($request, 'json');
        $response = $this->client->get('/api/products', [
            'headers' => [
                'Content-Type' => 'application/json',
                'Accept' => 'application/json',
            ],
            'query' => $jsonRequest,
        ]);

        $jsonResponse = $response->getBody()->getContents();
        return $this->serializer->deserialize($jsonResponse, GetProductListResponseDTO::class, 'json');
    }
}