<?php

namespace App\Models\Creational\FactoryMethod\Drivers;

class EmailSender implements SenderInterface
{
    public function __construct(
        public string $personalId,
        public string $secretToken
    )
    {}

    public function send(string $text, string $to): bool
    {
        echo "Send Email to $to with text: $text\n";

        return true;
    }

    public function login(): bool
    {
        echo "Login Email (" . $this->personalId . '|' . $this->secretToken . ")\n";

        return true;
    }
}
