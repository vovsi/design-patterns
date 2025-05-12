<?php

namespace App\Models\Structural\Proxy;

class WeatherProxy implements Weather
{
    private array $cache = [];

    public function __construct(
        private Weather $service
    )
    {}

    public function get(\DateTime $date): array
    {
        $dateStr = $date->format('Y-m-d');

        if (!isset($this->cache[$dateStr])) {
            $weatherResponse = $this->cache[$dateStr] = $this->service->get($date);
            echo("Got from API" . PHP_EOL);
        } else {
            $weatherResponse = $this->cache[$dateStr];
            echo("Got from cache" . PHP_EOL);
        }

        return $weatherResponse;
    }
}
