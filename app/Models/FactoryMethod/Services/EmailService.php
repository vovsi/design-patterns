<?php

namespace App\Models\FactoryMethod\Services;

use App\Models\FactoryMethod\Drivers\EmailSender;
use App\Models\FactoryMethod\Drivers\SenderInterface;

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
