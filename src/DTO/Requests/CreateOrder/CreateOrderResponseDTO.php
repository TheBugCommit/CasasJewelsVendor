<?php

namespace Sce\CasasJewelsVendor\DTO\Requests\CreateOrder;

final class CreateOrderResponseDTO
{
    public function __construct(
        public readonly string $transactionId,
        public readonly string $paymentUrl,
    ) {}
}
