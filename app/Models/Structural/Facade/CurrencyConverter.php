<?php

namespace App\Models\Structural\Facade;

class CurrencyConverter
{
    public static function convert(float $amount, string $from = "UAH", string $to = "USD"): float
    {
        // Connect to exchange service...
        // Get new amount...
        // Parsing amount...

        return $amount / 41; // For example UAH => USD for 41 UAH
    }
}
