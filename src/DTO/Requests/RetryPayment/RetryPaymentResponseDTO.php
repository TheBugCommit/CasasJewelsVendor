<?php

namespace Sce\CasasJewelsVendor\DTO\Requests\RetryPayment;

final class RetryPaymentResponseDTO
{
    public function __construct(
        public readonly ?string $transactionId,
        public readonly ?string $paymentUrl,
    ) {}
}
