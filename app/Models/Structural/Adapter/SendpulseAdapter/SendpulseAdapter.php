<?php

namespace App\Models\Structural\Adapter\SendpulseAdapter;

use App\Models\Structural\Adapter\AnalyticInterface;

class SendpulseAdapter implements AnalyticInterface
{
    public function __construct(
        protected SendpulseApi $api
    )
    {}

    public function send(string $action, array $data): bool
    {
        return $this->api->send($action, $data);
    }
}
