<?php

namespace Sce\CasasJewelsVendor\Repository;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\RequestException;
use Sce\CasasJewelsVendor\DTO\ErrorResponseDTO;
use Sce\CasasJewelsVendor\DTO\Requests\QueryProducts\GetProductListRequestDTO;
use Sce\CasasJewelsVendor\DTO\Requests\QueryProducts\GetProductListResponseDTO;
use Sce\CasasJewelsVendor\DTO\Requests\QueryProducts\GetProductDetailRequestDTO;
use Sce\CasasJewelsVendor\DTO\Requests\QueryProducts\GetProductDetailResponseDTO;
use Symfony\Component\Serializer\Exception\ExceptionInterface;

final class ProductRepository extends AbstractRepository
{
    /**
     * @throws ExceptionInterface
     * @throws GuzzleException
     */
    public function getProductList(GetProductListRequestDTO $request): GetProductListResponseDTO|ErrorResponseDTO
    {
        $queryParams = $this->normalizer->normalize($request);
        try {
            $response = $this->client->get('/api/products', [
                'headers' => $this->headers,
                'query' => $queryParams,
            ]);

            $jsonResponse = $response->getBody()->getContents();
            return $this->serializer->deserialize($jsonResponse, GetProductListResponseDTO::class, 'json');
        } catch (RequestException $e) {
            $errorJson = $e->getResponse()?->getBody()?->getContents();
            if (!$errorJson) {
                return new ErrorResponseDTO(500, 'Connection Error.');
            }
            return $this->serializer->deserialize($errorJson, ErrorResponseDTO::class, 'json');
        }

    }

    /**
     * @throws ExceptionInterface
     * @throws GuzzleException
     */
    public function getProductDetail(GetProductDetailRequestDTO $request): GetProductDetailResponseDTO|ErrorResponseDTO
    {
        $queryParams = $this->normalizer->normalize($request);
        try {
            $response = $this->client->get('/api/product', [
                'headers' => $this->headers,
                'query' => $queryParams,
            ]);

            $jsonResponse = $response->getBody()->getContents();
            return $this->serializer->deserialize($jsonResponse, GetProductDetailResponseDTO::class, 'json');
        } catch (RequestException $e) {
            $errorJson = $e->getResponse()?->getBody()?->getContents();
            if (!$errorJson) {
                return new ErrorResponseDTO(500, 'Connection Error.');
            }
            return $this->serializer->deserialize($errorJson, ErrorResponseDTO::class, 'json');
        }
    }
}