<?php

namespace App\Models\Structural\Bridge\Abstractions;

class ConsultationProduct extends Product
{
    public function getCost(): float
    {
        return 10.00;
    }

    public function getNameProduct(): string
    {
        return "Consultation";
    }
}
