<?php

namespace Sce\CasasJewelsVendor\DTO\Requests\QueryOrder;

use Symfony\Component\Validator\Constraints as Assert;

final class GetOrderListRequestDTO
{
    public function __construct(
        #[Assert\PositiveOrZero(message: "El límit ha de ser zero o positiu.")]
        public readonly int $limit = 100,

        #[Assert\PositiveOrZero(message: "L'offset ha de ser zero o positiu.")]
        public readonly int $offset = 1
    ) {}
}