<?php

namespace Sce\CasasJewelsVendor\DTO\Requests\QueryOrder;

use Sce\CasasJewelsVendor\DTO\Entity\OrderDTO;

class GetOrderListResponseDTO
{
    /**
     * @param OrderDTO[] $items
     */
    public function __construct(
        public readonly array $items,
        public readonly int   $total,
        public readonly int   $offset,
        public readonly int   $limit,
        public readonly int   $totalPages,
    ) {}
}