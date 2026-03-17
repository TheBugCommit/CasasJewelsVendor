<?php

namespace Sce\CasasJewelsVendor\DTO\Requests\CreateOrder;

final class OrderLineRequestDTO
{
    public function __construct(
        public readonly string $productId,
        public readonly int $quantity
    ) {}
}