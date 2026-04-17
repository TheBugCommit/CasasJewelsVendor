<?php

namespace Sce\CasasJewelsVendor\DTO\Requests\QueryOrder;

use Sce\CasasJewelsVendor\DTO\Entity\OrderDetailDTO;

final class GetOrderDetailResponseDTO
{
    public function __construct(
        public readonly OrderDetailDTO $order,
    ) {}
}
