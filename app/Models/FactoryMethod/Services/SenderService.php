<?php

namespace App\Models\FactoryMethod\Services;

use App\Models\FactoryMethod\Drivers\SenderInterface;

abstract class SenderService
{
    abstract public function getSender(): SenderInterface;

    public function send(string $text, string $to): bool
    {
        $sender = $this->getSender();
        if (!$sender->login()) {
            return false;
        }

        return $sender->send($text, $to);
    }
}
