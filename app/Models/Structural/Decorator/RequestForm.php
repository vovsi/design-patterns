<?php

namespace App\Models\Structural\Decorator;

class RequestForm
{
    public function __construct(
        public ?string $promoCode = null,
        public ?float $discount = null,
        public ?\DateTime $startLesson = null,
    )
    {}
}
