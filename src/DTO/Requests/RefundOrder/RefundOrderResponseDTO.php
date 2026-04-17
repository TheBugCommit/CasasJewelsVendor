<?php

namespace Sce\CasasJewelsVendor\DTO\Requests\RefundOrder;

final class RefundOrderResponseDTO
{
    public function __construct(
        public readonly string $orderId,
        public readonly string $status,
    ) {}
}
