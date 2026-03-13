<?php

namespace Sce\CasasJewelsVendor\Repository;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Sce\CasasJewelsVendor\DTO\Requests\QueryProducts\GetProductListRequestDTO;
use Sce\CasasJewelsVendor\DTO\Requests\QueryProducts\GetProductListResponseDTO;
use Sce\CasasJewelsVendor\DTO\Requests\QueryProducts\GetProductDetailRequestDTO;
use Sce\CasasJewelsVendor\DTO\Requests\QueryProducts\GetProductDetailResponseDTO;
use Symfony\Component\Serializer\Exception\ExceptionInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\SerializerInterface;

final class ProductRepository extends AbstractRepository
{
    /**
     * @throws ExceptionInterface
     * @throws GuzzleException
     */
    public function getProductList(GetProductListRequestDTO $request): GetProductListResponseDTO
    {
        $queryParams = $this->normalizer->normalize($request);
        $response = $this->client->get('/api/products', [
            'headers' => [
                'Accept' => 'application/json',
            ],
            'query' => $queryParams,
        ]);

        $jsonResponse = $response->getBody()->getContents();
        return $this->serializer->deserialize($jsonResponse, GetProductListResponseDTO::class, 'json');
    }

    /**
     * @throws ExceptionInterface
     * @throws GuzzleException
     */
    public function getProductDetail(GetProductDetailRequestDTO $request): GetProductDetailResponseDTO
    {
        $queryParams = $this->normalizer->normalize($request);
        $response = $this->client->get('/api/product', [
            'headers' => [
                'Accept' => 'application/json',
            ],
            'query' => $queryParams,
        ]);

        $jsonResponse = $response->getBody()->getContents();
        return $this->serializer->deserialize($jsonResponse, GetProductDetailRequestDTO::class, 'json');
    }
}