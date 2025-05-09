<?php

namespace App\Models\Structural\Flyweight;

class Tree
{
    public function __construct(
        public int $x,
        public int $y,
        public int $width,
        public int $height,
        private TreeVariation $variation
    )
    {}

    public function render(): string
    {
        return $this->variation->render($this->x, $this->y, $this->width, $this->height);
    }
}
