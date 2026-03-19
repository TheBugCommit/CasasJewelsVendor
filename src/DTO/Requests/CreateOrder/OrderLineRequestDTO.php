<?php

namespace Sce\CasasJewelsVendor\DTO\Requests\CreateOrder;

use Symfony\Component\Validator\Constraints as Assert;

final class OrderLineRequestDTO
{
    public function __construct(
        #[Assert\NotBlank(message: "L'ID del producte és obligatori.")]
        #[Assert\Uuid(message: "L'ID del producte ha de ser un UUID vàlid.")]
        public readonly string $productId,

        #[Assert\NotBlank(message: "La quantitat és obligatòria.")]
        #[Assert\Positive(message: "La quantitat ha de ser més gran que 0.")]
        public readonly int $quantity
    ) {}
}