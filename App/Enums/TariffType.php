<?php

namespace App\Enums;

enum TariffType: string
{
    case ACTUAL     = "актуальный";
    case ARCHIVAL   = "архивный";
    case SYSTEM     = "системный";
}
