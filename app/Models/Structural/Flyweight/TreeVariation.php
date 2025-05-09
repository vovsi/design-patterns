<?php

namespace App\Models\Structural\Flyweight;

class TreeVariation
{
    public function __construct(
        public string $type,
        public string $season,
    )
    {}

    public function render(int $x, int $y, int $width, int $height): string
    {
        return "[Render Tree] Type: " . $this->type . " Season: " . $this->season . " Coordinates: x: $x, y: $y. Width: $width, Height: $height";
    }
}
