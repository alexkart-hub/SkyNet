<?php

namespace App\Dto;

interface DtoInterface
{
    public static function fromJson(string $data): self;

    public static function fromArray(array $data): self;
}
