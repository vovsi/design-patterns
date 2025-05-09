<?php

namespace App\Models\Structural\Flyweight;

class TreeFactory
{
    private array $trees = [];
    private array $variations = [];

    public function addTree(string $type, string $season, int $x, int $y, int $width, int $height): Tree
    {
        $variation = $this->getVariation($type, $season);
        $tree = new Tree($x, $y, $width, $height, $variation);
        $this->trees[] = $tree;

        return $tree;
    }

    public function getTrees()
    {
        return $this->trees;
    }

    public function getVariation(string $type, string $season): TreeVariation
    {
        $key = $this->getKey(get_defined_vars());

        if (!isset($this->variations[$key])) {
            $this->variations[$key] = new TreeVariation($type, $season);
        }

        return $this->variations[$key];
    }

    private function getKey(array $data): string
    {
        return md5(implode('_', $data));
    }
}
