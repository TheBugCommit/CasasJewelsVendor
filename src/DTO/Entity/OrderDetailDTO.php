<?php

namespace Sce\CasasJewelsVendor\DTO\Entity;

final class OrderDetailDTO
{
    /**
     * @param OrderDetailLineDTO[] $lines
     */
    public function __construct(
        public readonly string $id,
        public readonly string $clientName,
        public readonly string $clientEmail,
        public readonly string $status,
        public readonly string $createdAt,
        public readonly array  $lines,
        public readonly float  $totalAmount
    ) {}
}
