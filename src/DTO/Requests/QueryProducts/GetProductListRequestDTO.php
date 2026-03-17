<?php

namespace Sce\CasasJewelsVendor\DTO\Requests\QueryProducts;

final class GetProductListRequestDTO
{
    public function __construct(
        public readonly int $limit = 100,
        public readonly int $offset = 1
    ) {}
}