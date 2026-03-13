<?php

namespace Sce\CasasJewelsVendor\DTO\Requests\QueryProducts;

final class GetProductDetailRequestDTO
{
    public function __construct(
        public readonly string $id,
    ) {}
}