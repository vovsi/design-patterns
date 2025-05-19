<?php

namespace App\Models\Behavioral\Visitor;

interface Food
{
    public function created(FoodVisitor $visitor): void;
}
