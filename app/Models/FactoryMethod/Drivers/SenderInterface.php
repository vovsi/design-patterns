<?php

namespace App\Models\FactoryMethod\Drivers;

interface SenderInterface
{
    public function send(string $text, string $to): bool;
    public function login(): bool;
}
