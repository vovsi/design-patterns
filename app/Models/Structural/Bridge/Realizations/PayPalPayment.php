<?php

namespace App\Models\Structural\Bridge\Realizations;

class PayPalPayment implements Payment
{
    public function beginTransaction(string $iban, float $amount, string $currency): bool
    {
        echo("Processing PayPal payment...\n");

        return true;
    }
}
