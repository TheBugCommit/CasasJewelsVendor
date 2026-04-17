<?php

namespace Sce\CasasJewelsVendor\DTO\Requests\QueryProducts;

use Symfony\Component\Validator\Constraints as Assert;

final class GetProductsByIdsRequestDTO
{
    /**
     * @param string[] $ids
     */
    public function __construct(
        #[Assert\NotBlank(message: "Cal proporcionar almenys un ID.")]
        #[Assert\Count(min: 1, minMessage: "Cal proporcionar almenys un ID.")]
        #[Assert\All([
            new Assert\NotBlank(message: "Un dels IDs és buit."),
            new Assert\Uuid(message: "Un dels IDs no és un UUID vàlid."),
        ])]
        public readonly array $ids,
    ) {}
}
