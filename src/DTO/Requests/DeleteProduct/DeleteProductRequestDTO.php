<?php

namespace Sce\CasasJewelsVendor\DTO\Requests\DeleteProduct;

use Symfony\Component\Validator\Constraints as Assert;

final class DeleteProductRequestDTO
{
    public function __construct(
        #[Assert\NotBlank(message: "L'ID del producte és obligatori.")]
        #[Assert\Uuid(message: "L'ID del producte ha de ser un UUID vàlid.")]
        public readonly string $id,
    ) {}
}
