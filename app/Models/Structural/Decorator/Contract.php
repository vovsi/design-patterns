<?php

namespace App\Models\Structural\Decorator;

class Contract implements ContractInterface
{
    public function getCost(RequestForm $request): float
    {
        return 1000; // Default cost of the contract.
    }
}
