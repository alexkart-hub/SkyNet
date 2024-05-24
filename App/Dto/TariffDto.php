<?php

namespace App\Dto;

use App\Enums\TariffType;

class TariffDto
{
    public function __construct(
        public string               $name,
        public float                $cost,
        public \DateTimeInterface   $validityPeriod,
        public int                  $speed,
        public TariffType           $type
    ) {}

    public static function getByData($data): self
    {
        $data = json_decode($data);
        return new self(
            name: $data->name,
            cost: $data->cost,
            validityPeriod: new \DateTime($data->validityPeriod),
            speed: $data->speed,
            type:  TariffType::from($data->type->value)
        );
    }
}
