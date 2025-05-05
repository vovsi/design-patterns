<?php

namespace App\Models\Structural\Decorator;

class ContractPromoCode extends CalculationContract
{
    public function getCost(RequestForm $request): float
    {
        $cost = parent::getCost($request);
        if (empty($request->promoCode)) {
            return $cost;
        }

        if ($request->promoCode === '777') {
            $cost -= 25;
        }

        return $cost;
    }
}
