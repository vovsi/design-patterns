<?php

namespace App\Models\Structural\Adapter\SendpulseAdapter;

class SendpulseApi
{
    public function __construct(
        protected string $token
    )
    {}

    public function send(string $action, array $data): bool
    {
        echo("[Sent] https://api.sendpul.com/v2/{$action}/" . PHP_EOL);

        return true;
    }
}
