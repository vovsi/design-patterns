<?php

namespace App\Models\Behavioral\TemplateMethod;

class ShortResultTest extends ResultTest
{
    protected function generateResult(array $result): array
    {
        return array_slice($result, 0, 1);
    }
}
