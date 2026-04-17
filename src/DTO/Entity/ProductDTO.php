<?php

namespace Sce\CasasJewelsVendor\DTO\Entity;

final class ProductDTO
{
    public function __construct(
        public readonly string  $id,
        public readonly string  $name,
        public readonly float   $price,
        public readonly string  $description,
        public readonly string  $category,
        public readonly ?string $imageUrl = null,
        public readonly int     $preparationDays = 0,
        public readonly int     $shippingDays = 0,
    ) {}
}