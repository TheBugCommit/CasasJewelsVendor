<?php

namespace Sce\CasasJewelsVendor\DTO\Requests\UpdateProduct;

use Sce\CasasJewelsVendor\DTO\Entity\ProductDTO;

final class UpdateProductResponseDTO
{
    public function __construct(
        public readonly ProductDTO $data,
    ) {}
}
