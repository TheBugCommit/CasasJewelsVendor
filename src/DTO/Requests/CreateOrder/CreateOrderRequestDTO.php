<?php

namespace Sce\CasasJewelsVendor\DTO\Requests\CreateOrder;

final class CreateOrderRequestDTO
{
    public function __construct(
        public readonly string $productId,
        public readonly string $clientName,
        public readonly string $clientEmail,
    ) {}
}
