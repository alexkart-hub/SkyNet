<?php

namespace App\Enums;

enum TariffType: string
{
    case ACTUAL     = "актуальный";
    case ARCHIVAL   = "архивный";
    case SYSTEM     = "системный";

    public function code(): string
    {
        return match ($this) {
            self::ACTUAL    => "ACT",
            self::ARCHIVAL  => "ARH",
            self::SYSTEM    => "SYS",
        };
    }
}
