<?php

namespace App\Models\Structural\Decorator;

class ContractDiscount extends CalculationContract
{
    public function getCost(RequestForm $request): float
    {
        $cost = parent::getCost($request);

        return $cost - $request->discount;
    }
}
