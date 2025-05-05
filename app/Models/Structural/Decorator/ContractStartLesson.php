<?php

namespace App\Models\Structural\Decorator;

class ContractStartLesson extends CalculationContract
{
    public function getCost(RequestForm $request): float
    {
        $cost = parent::getCost($request);
        if (empty($request->startLesson)) {
            return $cost;
        }

        if ($request->startLesson->format('Y-m-d') === '2025-09-01') {
            $cost -= 50;
        }

        return $cost;
    }
}
