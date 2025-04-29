<?php

namespace App\Models\Structural\Adapter;

interface AnalyticInterface
{
    public function send(string $action, array $data): bool;
}
