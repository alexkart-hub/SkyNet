<?php

namespace App\Serializer;

use App\Dto\DtoInterface;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;

class JsonSerializer
{
    public function __construct(private readonly Serializer $serializer)
    {
    }

    public function serialize(DtoInterface $data): string
    {
        return $this->serializer->serialize($data, JsonEncoder::FORMAT);
    }

    public function deserialize($data, $type): DtoInterface
    {
        if (!is_subclass_of($type, DtoInterface::class)) {
            throw new \Exception(
                "Вторым параметром необходимо передать имя класса, реализующего интерфейс DtoInterface"
            );
        }
        return $type::fromJson($data);
    }
}