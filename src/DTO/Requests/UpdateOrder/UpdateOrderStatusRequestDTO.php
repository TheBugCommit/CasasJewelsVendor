<?php

namespace Sce\CasasJewelsVendor\DTO\Requests\UpdateOrder;
use Symfony\Component\Validator\Constraints as Assert;

final class UpdateOrderStatusRequestDTO
{
    public function __construct(
        #[Assert\NotBlank(message: "L'ID de la comanda és obligatori.")]
        #[Assert\Uuid(message: "L'ID de la comanda ha de ser un UUID vàlid.")]
        public readonly string $orderId,

        #[Assert\NotBlank(message: "L'estat és obligatori.")]
        #[Assert\Choice(choices: ['processing', 'delivering', 'delivered'], message: "L'estat no és vàlid.")]
        public readonly string $status,
    ) {}
}
