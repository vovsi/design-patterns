<?php

namespace App\Models\Structural\Bridge\Abstractions;

class ContractProduct extends Product
{
    public function getCost(): float
    {
        return 1000.00;
    }

    public function getNameProduct(): string
    {
        return "Contract";
    }
}
