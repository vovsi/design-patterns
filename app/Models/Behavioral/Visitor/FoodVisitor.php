<?php

namespace App\Models\Behavioral\Visitor;

interface FoodVisitor
{
    public function createdApple(Apple $model): void;
    public function createdCherry(Cherry $model): void;
}
