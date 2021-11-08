<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;

abstract class BaseController extends AbstractController
{
    public function __construct(protected SerializerInterface $serializer)
    {
    }

    protected function json($data, int $status = 200, array $headers = [], array $context = []): JsonResponse
    {
        $data = $this->serializer->serialize($data, 'json', $context);
    
        return JsonResponse::fromJsonString($data, $status, $headers);
    }
}
