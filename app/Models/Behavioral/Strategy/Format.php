<?php

namespace App\Models\Behavioral\Strategy;

interface Format
{
    public function getFile(string $fileName, array $data): string;
}
