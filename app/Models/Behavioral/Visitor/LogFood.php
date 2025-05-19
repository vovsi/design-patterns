<?php

namespace App\Models\Behavioral\Visitor;

class LogFood implements FoodVisitor
{
    public function createdApple(Apple $model): void
    {
        echo("Created an apple." . PHP_EOL);
    }

    public function createdCherry(Cherry $model): void
    {
        echo("Created a cherry." . PHP_EOL);
    }
}
