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
}
