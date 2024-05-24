<?php

namespace App\Serializer;

use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;

class JsonSerializer
{
    public function __construct(private readonly Serializer $serializer)
    {
    }

    public function serialize($data)
    {
        return $this->serializer->serialize($data, JsonEncoder::FORMAT);
    }

    public function deserialize($data, $type)
    {
        return $type::getByData($data);
    }
}