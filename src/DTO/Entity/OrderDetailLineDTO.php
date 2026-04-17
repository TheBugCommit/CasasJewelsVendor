<?php

namespace Sce\CasasJewelsVendor\DTO\Entity;

final class OrderDetailLineDTO
{
    public function __construct(
        public readonly string  $id,
        public readonly string  $productId,
        public readonly ?string $productName,
        public readonly ?string $productImageUrl,
        public readonly int     $quantity,
        public readonly float   $unitPrice,
        public readonly float   $total,
        public readonly bool    $productDeleted = false,
    ) {}
}
