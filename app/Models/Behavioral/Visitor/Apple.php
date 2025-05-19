<?php

namespace App\Models\Behavioral\Visitor;

class Apple implements Food
{
    public function created(FoodVisitor $visitor): void
    {
        $visitor->createdApple($this);
    }
}
