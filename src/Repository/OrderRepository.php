<?php

namespace Sce\CasasJewelsVendor\Repository;

use Sce\CasasJewelsVendor\DTO\ErrorResponseDTO;
use Sce\CasasJewelsVendor\DTO\Requests\CreateOrder\CreateOrderRequestDTO;
use Sce\CasasJewelsVendor\DTO\Requests\CreateOrder\CreateOrderResponseDTO;

final class OrderRepository extends AbstractRepository
{
    public function createOrder(CreateOrderRequestDTO $request): CreateOrderResponseDTO|ErrorResponseDTO
    {
        return $this->executeRequest('POST', '/api/orders', $request, CreateOrderResponseDTO::class);
    }
}