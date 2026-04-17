<?php

namespace Sce\CasasJewelsVendor\DTO\Requests\MarkOrderAsPaid;

final class MarkOrderAsPaidResponseDTO
{
    public function __construct(
        public readonly string $orderId,
        public readonly string $status,
    ) {}
}
