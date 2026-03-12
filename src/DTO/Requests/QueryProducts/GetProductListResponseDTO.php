<?php

namespace Sce\CasasJewelsVendor\DTO\Requests\QueryProducts;

use Sce\CasasJewelsVendor\DTO\Entity\ProductDTO;

final class GetProductListResponseDTO
{
    /**
     * @param ProductDTO[] $data
     */
    public function __construct(
        public readonly array $items,
        public readonly int   $total,
        public readonly int   $offset,
        public readonly int   $limit,
        public readonly int   $totalPages,
    ) {}
}