<?php

namespace App\Models\Structural\Proxy;

interface Weather
{
    public function get(\DateTime $date): array;
}
