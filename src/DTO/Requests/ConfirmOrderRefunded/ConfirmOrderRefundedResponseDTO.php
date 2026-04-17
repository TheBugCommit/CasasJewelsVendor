<?php

namespace Sce\CasasJewelsVendor\DTO\Requests\ConfirmOrderRefunded;

final class ConfirmOrderRefundedResponseDTO
{
    public function __construct(
        public readonly string $orderId,
        public readonly string $status,
    ) {}
}
