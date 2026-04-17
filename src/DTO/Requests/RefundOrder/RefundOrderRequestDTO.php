<?php

namespace Sce\CasasJewelsVendor\DTO\Requests\RefundOrder;

use Symfony\Component\Validator\Constraints as Assert;

final class RefundOrderRequestDTO
{
    public function __construct(
        #[Assert\NotBlank(message: "L'ID de la comanda és obligatori.")]
        #[Assert\Uuid(message: "L'ID de la comanda ha de ser un UUID vàlid.")]
        public readonly string $orderId,
    ) {}
}
