<?php

namespace Sce\CasasJewelsVendor\Repository;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\RequestException;
use Sce\CasasJewelsVendor\DTO\ErrorResponseDTO;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Exception\ExceptionInterface;

class AbstractRepository
{
    protected string $url;
    protected string $apiKey;
    protected array $headers;
    protected SerializerInterface $serializer;
    protected NormalizerInterface $normalizer;

    protected Client $client;

    public function __construct(string $url, string $apiKey, SerializerInterface $serializer,
                                NormalizerInterface $normalizer)
    {
        $this->url = $url;
        $this->apiKey = $apiKey;
        $this->serializer = $serializer;
        $this->normalizer = $normalizer;
        $this->client = new Client(['base_uri' => $url]);
        $this->headers = [
            'Accept' => 'application/json',
            'X-API-KEY' => $this->apiKey,
        ];
    }

    protected function executeRequest(string $method, string $endpoint, ?object $requestDTO, string $responseClass): object
    {
        try {
            $options = ['headers' => $this->headers];

            if ($requestDTO !== null) {
                if (strtoupper($method) === 'GET') {
                    $options['query'] = $this->normalizer->normalize($requestDTO);
                } else {
                    $options['body'] = $this->serializer->serialize($requestDTO, 'json');
                    $options['headers']['Content-Type'] = 'application/json';
                }
            }

            $response = $this->client->request($method, $endpoint, $options);
            $jsonResponse = $response->getBody()->getContents();

            return $this->serializer->deserialize($jsonResponse, $responseClass, 'json');

        } catch (RequestException $e) {
            $statusCode = $e->getResponse()?->getStatusCode() ?? 500;
            $errorJson = $e->getResponse()?->getBody()?->getContents();

            if ($errorJson) {
                try {
                    return $this->serializer->deserialize($errorJson, ErrorResponseDTO::class, 'json');
                } catch (ExceptionInterface $serializerException) {
                    return new ErrorResponseDTO($statusCode, 'Error de servidor il·legible.');
                }
            }
            return new ErrorResponseDTO($statusCode, 'Error de connexió.');

        } catch (GuzzleException $e) {
            return new ErrorResponseDTO(503, 'No s\'ha pogut connectar amb el servidor: ' . $e->getMessage());

        } catch (ExceptionInterface $e) {
            return new ErrorResponseDTO(500, 'Error processant les dades rebudes/enviades del servidor.');

        } catch (\Throwable $e) {
            return new ErrorResponseDTO(500, 'Error intern inesperat al Vendor.');
        }
    }
}