<?php

namespace Sce\CasasJewelsVendor\DTO\Entity;

final class OrderLineDTO
{
    public function __construct(
        public readonly string $id,
        public readonly string $productId,
        public readonly int $quantity,
        public readonly float $unitPrice,
    ) {}
}
