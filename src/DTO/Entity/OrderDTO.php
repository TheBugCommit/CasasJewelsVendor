<?php

namespace Sce\CasasJewelsVendor\DTO\Entity;

final class OrderDTO
{
    public function __construct(
        public readonly string $id,
        public readonly string $clientName,
        public readonly string $status,
        public readonly string $createdAt,
    ) {}
}
