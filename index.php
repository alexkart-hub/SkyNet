<?php

use App\Dto\TariffDto;
use App\Enums\TariffType;

require_once __DIR__ . "/vendor/autoload.php";

$tariff = new TariffDto(
    name: "Тариф 1",
    cost: 1000.0,
    validityPeriod: new DateTime("now"),
    speed: 100,
    type: TariffType::ACTUAL
);

print_r($tariff);

foreach (TariffType::cases() as $case) {
    printf(
        "Тариф %s: %s",
        $case->value,
        $case->code()
    );
    echo PHP_EOL;
}
