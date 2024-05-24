<?php

namespace App\Dto;

use App\Enums\TariffType;

class TariffDto implements DtoInterface
{
    public function __construct(
        public string             $name,
        public float              $cost,
        public \DateTimeInterface $validityPeriod,
        public int                $speed,
        public TariffType         $type
    )
    {
    }

    public static function fromJson(string $data): self
    {
        $data = json_decode($data, false, 512, JSON_THROW_ON_ERROR);
        return new self(
            name: $data->name,
            cost: $data->cost,
            validityPeriod: new \DateTime($data->validityPeriod),
            speed: $data->speed,
            type: TariffType::from($data->type->value)
        );
    }

    public static function fromArray(array $data): self
    {
        return new self(
            name: $data["name"],
            cost: $data["cost"],
            validityPeriod: $data["validityPeriod"],
            speed: $data["speed"],
            type: $data["type"]
        );
    }
}
