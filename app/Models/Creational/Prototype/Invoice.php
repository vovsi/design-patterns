<?php

namespace App\Models\Creational\Prototype;

class Invoice
{
    public \DateTime $datetime;

    public function __construct(
        public string $buyerName,
        public string $companyName,
        public float $total
    )
    {
        $this->datetime = new \DateTime();
    }

    public function __clone(): void
    {
        $this->datetime = clone $this->datetime;
    }
}
