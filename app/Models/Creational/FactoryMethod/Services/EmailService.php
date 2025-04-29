<?php

namespace App\Models\Creational\FactoryMethod\Services;

use App\Models\Creational\FactoryMethod\Drivers\EmailSender;
use App\Models\Creational\FactoryMethod\Drivers\SenderInterface;

class EmailService extends SenderService
{
    public function __construct(
        public string $personalId,
        public string $secretToken
    )
    {}

    public function getSender(): SenderInterface
    {
        return new EmailSender($this->personalId, $this->secretToken);
    }
}
