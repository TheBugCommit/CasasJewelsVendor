<?php

namespace Sce\CasasJewelsVendor\DTO\Requests\QueryProducts;

use Sce\CasasJewelsVendor\DTO\Entity\ProductDTO;

final class GetProductDetailResponseDTO
{
    public function __construct(
        public readonly ProductDTO $data,
    ) {}
}