<?php

namespace Sce\CasasJewelsVendor\DTO\Requests\UpdateProduct;

use Symfony\Component\Validator\Constraints as Assert;

final class UpdateProductRequestDTO
{
    public function __construct(
        #[Assert\NotBlank(message: "L'ID del producte és obligatori.")]
        #[Assert\Uuid(message: "L'ID del producte ha de ser un UUID vàlid.")]
        public readonly string  $id,

        #[Assert\NotBlank(message: "El nom del producte és obligatori.")]
        #[Assert\Length(min: 2, max: 255, minMessage: "El nom ha de tenir almenys 2 caràcters.")]
        public readonly string  $name,

        #[Assert\NotBlank(message: "El preu és obligatori.")]
        #[Assert\Positive(message: "El preu ha de ser positiu.")]
        public readonly float   $price,

        #[Assert\NotBlank(message: "La descripció és obligatòria.")]
        public readonly string  $description,

        #[Assert\NotBlank(message: "La categoria és obligatòria.")]
        public readonly string  $category,

        public readonly ?string $imageUrl = null,
    ) {}
}
