<?php

namespace Sce\CasasJewelsVendor\Repository;

use GuzzleHttp\Exception\GuzzleException;
use Sce\CasasJewelsVendor\DTO\Requests\QueryProducts\GetProductListRequestDTO;
use Sce\CasasJewelsVendor\DTO\Requests\QueryProducts\GetProductListResponseDTO;
use Symfony\Component\Serializer\Exception\ExceptionInterface;

class ProductRepository extends AbstractRepository
{
    /**
     * @throws ExceptionInterface
     * @throws GuzzleException
     */
    public function getProductList(GetProductListRequestDTO $request): GetProductListResponseDTO
    {
        $url = $this->url . '/api/products';

        $jsonRequest = $this->serializer->serialize($request, 'json');
        $response = new \GuzzleHttp\Client()->get($url, [
            'headers' => [
                'Content-Type' => 'application/json',
                'Accept' => 'application/json',
            ],
            'body' => $jsonRequest,
        ]);

        $jsonResponse = $response->getBody()->getContents();
        return $this->serializer->deserialize($jsonResponse, GetProductListResponseDTO::class, 'json');
    }
}