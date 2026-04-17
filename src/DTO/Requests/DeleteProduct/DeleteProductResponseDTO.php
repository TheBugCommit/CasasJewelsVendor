<?php

namespace Sce\CasasJewelsVendor\DTO\Requests\DeleteProduct;

final class DeleteProductResponseDTO
{
    public function __construct(
        public readonly string $id,
    ) {}
}
