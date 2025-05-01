<?php

namespace App\Models\Structural\Bridge\Abstractions;

use App\Models\Structural\Bridge\Realizations\Payment;

abstract class Product
{
    public function __construct(
        private Payment $payment,
    )
    {}

    abstract public function getCost(): float;

    abstract public function getNameProduct(): string;

    public function pay(): bool
    {
        echo("Paid " . $this->getNameProduct() . " for " . $this->getCost() . ' ' . $this->getCurrency() . PHP_EOL);

        return $this->payment->beginTransaction(
            $this->getIban(),
            $this->getCost(),
            $this->getCurrency()
        );
    }

    public function getCurrency(): string
    {
        return env('CURRENCY');
    }

    public function getIban(): string
    {
        return env('PAYMENT_REQUISITE_IBAN');
    }
}
