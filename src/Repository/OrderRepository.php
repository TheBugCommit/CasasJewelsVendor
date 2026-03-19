<?php

namespace Sce\CasasJewelsVendor\Repository;

use GuzzleHttp\Exception\RequestException;
use Sce\CasasJewelsVendor\DTO\ErrorResponseDTO;
use Sce\CasasJewelsVendor\DTO\Requests\CreateOrder\CreateOrderRequestDTO;
use Sce\CasasJewelsVendor\DTO\Requests\CreateOrder\CreateOrderResponseDTO;

final class OrderRepository extends AbstractRepository
{
    public function createOrder(CreateOrderRequestDTO $request): CreateOrderResponseDTO|ErrorResponseDTO
    {
        $jsonPayload = $this->serializer->serialize($request, 'json');

        try {
            $response = $this->client->post('/api/orders', [
                'headers' => array_merge($this->headers, [
                    'Content-Type' => 'application/json',
                ]),
                'body' => $jsonPayload,
            ]);

            $jsonResponse = $response->getBody()->getContents();
            return $this->serializer->deserialize($jsonResponse, CreateOrderResponseDTO::class, 'json');

        } catch (RequestException $e) {
            $errorJson = $e->getResponse()?->getBody()?->getContents();
            if (!$errorJson) {
                return new ErrorResponseDTO(500, 'Connection Error.');
            }
            return $this->serializer->deserialize($errorJson, ErrorResponseDTO::class, 'json');
        }
    }
}