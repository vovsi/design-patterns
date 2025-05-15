<?php

namespace App\Models\Behavioral\Observer;

class Contract
{
    public string $onec;

    public function __construct(
        public string $customerName,
        public string $name,
        public float $cost,
        public ?string $fblead = null,
    )
    {
        $this->onec = $this->generateOneC();
    }

    protected function generateOneC(): string
    {
        return uuid_create();
    }
}
