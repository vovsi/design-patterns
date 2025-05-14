<?php

namespace App\Models\Behavioral\Memento;

class SettingsSnapshot
{
    public function __construct(
        public array $data,
    )
    {}

    public function getData(): array
    {
        return $this->data;
    }
}
