<?php

namespace App\Models\Structural\Decorator;

interface ContractInterface
{
    public function getCost(RequestForm $request): float;
}
