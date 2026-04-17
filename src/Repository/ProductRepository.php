<?php

namespace Sce\CasasJewelsVendor\Repository;

use Sce\CasasJewelsVendor\DTO\ErrorResponseDTO;
use Sce\CasasJewelsVendor\DTO\Requests\QueryProducts\GetProductListRequestDTO;
use Sce\CasasJewelsVendor\DTO\Requests\QueryProducts\GetProductListResponseDTO;
use Sce\CasasJewelsVendor\DTO\Requests\QueryProducts\GetProductDetailRequestDTO;
use Sce\CasasJewelsVendor\DTO\Requests\QueryProducts\GetProductDetailResponseDTO;
use Sce\CasasJewelsVendor\DTO\Requests\QueryProducts\GetProductsByIdsRequestDTO;
use Sce\CasasJewelsVendor\DTO\Requests\QueryProducts\GetProductsByIdsResponseDTO;

final class ProductRepository extends AbstractRepository
{
    public function getProductList(GetProductListRequestDTO $request): GetProductListResponseDTO|ErrorResponseDTO
    {
        return $this->executeRequest('GET', '/api/products', $request, GetProductListResponseDTO::class);

    }

    public function getProductDetail(GetProductDetailRequestDTO $request): GetProductDetailResponseDTO|ErrorResponseDTO
    {
        return $this->executeRequest('GET', '/api/product', $request, GetProductDetailResponseDTO::class);
    }

    public function getProductsByIds(GetProductsByIdsRequestDTO $request): GetProductsByIdsResponseDTO|ErrorResponseDTO
    {
        return $this->executeRequest('POST', '/api/products/by-ids', $request, GetProductsByIdsResponseDTO::class);
    }
}