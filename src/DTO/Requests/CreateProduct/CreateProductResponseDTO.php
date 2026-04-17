<?php

namespace Sce\CasasJewelsVendor\DTO\Requests\CreateProduct;

use Sce\CasasJewelsVendor\DTO\Entity\ProductDTO;

final class CreateProductResponseDTO
{
    public function __construct(
        public readonly ProductDTO $data,
    ) {}
}
