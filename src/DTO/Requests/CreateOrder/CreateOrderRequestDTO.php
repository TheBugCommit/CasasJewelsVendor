<?php

namespace Sce\CasasJewelsVendor\DTO\Requests\CreateOrder;

final class CreateOrderRequestDTO
{
    /**
     * @param OrderLineRequestDTO[] $lines
     */
    public function __construct(
        public readonly string $clientName,
        public readonly string $clientEmail,
        public readonly array  $lines,
    )
    {
    }
}
