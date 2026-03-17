<?php

namespace Sce\CasasJewelsVendor\DTO\Requests\UpdateOrder;
final class UpdateOrderStatusRequestDTO
{
    public function __construct(
        public readonly string $orderId,
        public readonly string $status,
    ) {}
}
