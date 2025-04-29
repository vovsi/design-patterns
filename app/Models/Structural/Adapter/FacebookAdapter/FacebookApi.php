<?php

namespace App\Models\Structural\Adapter\FacebookAdapter;

class FacebookApi
{
    public function __construct(
        protected string $apiKey,
    )
    {}

    public function send(array $data, string $projectId): bool
    {
        echo("[Sent] https://api.fb.com/v2/projects/$projectId/analytics/" . PHP_EOL);

        return true;
    }
}
