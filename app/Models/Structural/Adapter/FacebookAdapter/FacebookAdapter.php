<?php

namespace App\Models\Structural\Adapter\FacebookAdapter;

use App\Models\Structural\Adapter\AnalyticInterface;

class FacebookAdapter implements AnalyticInterface
{
    public function __construct(
        protected FacebookApi $api
    )
    {}

    public function send(string $action, array $data): bool
    {
        return $this->api->send($data, $this->getProjectId($action));
    }

    public function getProjectId(string $action): ?string
    {
        switch ($action) {
            case "contract":
                return env('FACEBOOK_PROJECT_ID_CONTRACT');
            case "lead":
                return env("FACEBOOK_PROJECT_ID_LEAD");
            default:
                return null;
        }
    }
}
