<?php

namespace App\Models\Structural\Decorator;

class CalculationContract implements ContractInterface
{
    public function __construct(
        protected ContractInterface $costContract
    )
    {}

    public function getCost(RequestForm $request): float
    {
        return $this->costContract->getCost($request);
    }
}
