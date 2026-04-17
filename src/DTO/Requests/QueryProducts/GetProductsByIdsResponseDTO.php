<?php

namespace Sce\CasasJewelsVendor\DTO\Requests\QueryProducts;

use Sce\CasasJewelsVendor\DTO\Entity\ProductDTO;

final class GetProductsByIdsResponseDTO
{
    /**
     * @param ProductDTO[] $items
     */
    public function __construct(
        public readonly array $items,
    ) {}
}
