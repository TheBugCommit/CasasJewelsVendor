<?php

namespace Sce\CasasJewelsVendor\DTO\Requests\CreateOrder;

use Symfony\Component\Validator\Constraints as Assert;

final class CreateOrderRequestDTO
{
    /**
     * @param OrderLineRequestDTO[] $lines
     */
    public function __construct(
        #[Assert\NotBlank(message: "El nom del client és obligatori.")]
        #[Assert\Length(min: 2, max: 255, minMessage: "El nom ha de tenir almenys 2 caràcters.")]
        public readonly string $clientName,

        #[Assert\NotBlank(message: "L'email del client és obligatori.")]
        #[Assert\Email(message: "L'email proporcionat no és vàlid.")]
        public readonly string $clientEmail,

        #[Assert\NotBlank(message: "La comanda ha de tenir almenys una línia.")]
        #[Assert\Count(min: 1, minMessage: "La comanda ha de tenir almenys una línia.")]
        #[Assert\Valid]
        public readonly array  $lines,
    )
    {
    }
}
