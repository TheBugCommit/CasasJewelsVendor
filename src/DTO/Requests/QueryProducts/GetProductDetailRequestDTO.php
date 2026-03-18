<?php

namespace Sce\CasasJewelsVendor\DTO\Requests\QueryProducts;

use Symfony\Component\Validator\Constraints as Assert;

final class GetProductDetailRequestDTO
{
    public function __construct(
        #[Assert\NotBlank(message: "L'ID és obligatori.")]
        #[Assert\Uuid(message: "L'ID ha de ser un UUID vàlid.")]
        public readonly string $id,
    ) {}
}