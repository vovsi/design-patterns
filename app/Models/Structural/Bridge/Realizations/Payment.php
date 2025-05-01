<?php

namespace App\Models\Structural\Bridge\Realizations;

interface Payment
{
    public function beginTransaction(string $iban, float $amount, string $currency): bool;
}
