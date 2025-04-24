<?php

namespace App\Models\FactoryMethod\Drivers;

class SmsSender implements SenderInterface
{
    public function __construct(
        public string $personalId,
        public string $secretToken
    )
    {}

    public function send(string $text, string $to): bool
    {
        echo "Send SMS to $to with text: $text\n";

        return true;
    }

    public function login(): bool
    {
        echo "Login SMS (" . $this->personalId . '|' . $this->secretToken . ")\n";

        return true;
    }
}
