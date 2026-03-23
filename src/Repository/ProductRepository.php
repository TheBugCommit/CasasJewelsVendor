<?php

namespace Sce\CasasJewelsVendor\Repository;

use Sce\CasasJewelsVendor\DTO\ErrorResponseDTO;
use Sce\CasasJewelsVendor\DTO\Requests\QueryProducts\GetProductListRequestDTO;
use Sce\CasasJewelsVendor\DTO\Requests\QueryProducts\GetProductListResponseDTO;
use Sce\CasasJewelsVendor\DTO\Requests\QueryProducts\GetProductDetailRequestDTO;
use Sce\CasasJewelsVendor\DTO\Requests\QueryProducts\GetProductDetailResponseDTO;

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
}