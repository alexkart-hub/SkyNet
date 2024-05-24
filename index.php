<?php

use App\Dto\TariffDto;
use App\Enums\TariffType;
use App\Serializer\JsonSerializer;
use App\Serializer\SerializerFactory;

require_once __DIR__ . "/vendor/autoload.php";


$tariff = TariffDto::fromArray([
    "name" => "Тариф 1",
    "cost" => 1000.0,
    "validityPeriod" => new DateTime("now", new DateTimeZone("+3")),
    "speed" => 100,
    "type" => TariffType::ACTUAL
]);

print_r($tariff);

foreach (TariffType::cases() as $case) {
    printf(
        "Тариф %s: %s",
        $case->value,
        $case->code()
    );
    echo PHP_EOL;
}

$serializer = new JsonSerializer(SerializerFactory::getSerializer());


$json = $serializer->serialize($tariff);
print_r($json);

echo PHP_EOL;

$obj = $serializer->deserialize($json, TariffDto::class);
print_r($obj);
