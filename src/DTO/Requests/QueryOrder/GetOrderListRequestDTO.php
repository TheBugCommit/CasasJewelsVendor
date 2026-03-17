<?php

namespace Sce\CasasJewelsVendor\DTO\Requests\QueryOrder;

final class GetOrderListRequestDTO
{
    public function __construct(
        public readonly int $limit = 100,
        public readonly int $offset = 1
    ) {}
}