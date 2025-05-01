<?php

namespace App\Models\Structural\Bridge\Realizations;

class IPayPayment implements Payment
{
    public function beginTransaction(string $iban, float $amount, string $currency): bool
    {
        echo("Processing IPay payment...\n");

        return true;
    }
}
