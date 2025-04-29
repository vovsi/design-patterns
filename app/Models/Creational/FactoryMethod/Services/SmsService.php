<?php

namespace App\Models\Creational\FactoryMethod\Services;

use App\Models\Creational\FactoryMethod\Drivers\SenderInterface;
use App\Models\Creational\FactoryMethod\Drivers\SmsSender;

class SmsService extends SenderService
{
    public function __construct(
        public string $personalId,
        public string $secretToken
    )
    {}

    public function getSender(): SenderInterface
    {
        return new SmsSender($this->personalId, $this->secretToken);
    }
}
