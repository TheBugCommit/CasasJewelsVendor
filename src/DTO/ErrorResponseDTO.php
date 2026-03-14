<?php

namespace Sce\CasasJewelsVendor\DTO;

class ErrorResponseDTO
{
    public function __construct(
        public readonly int $code,
        public readonly string $message,
        public readonly array $details = []
    ) {}
}