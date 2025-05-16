<?php

namespace App\Models\Behavioral\TemplateMethod;

class FullResultTest extends ResultTest
{
    protected function generateResult(array $result): array
    {
        return $result;
    }
}
