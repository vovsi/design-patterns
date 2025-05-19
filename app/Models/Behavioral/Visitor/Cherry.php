<?php

namespace App\Models\Behavioral\Visitor;

class Cherry implements Food
{
    public function created(FoodVisitor $visitor): void
    {
        $visitor->createdCherry($this);
    }
}
