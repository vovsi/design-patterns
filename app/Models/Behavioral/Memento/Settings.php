<?php

namespace App\Models\Behavioral\Memento;

class Settings
{
    public function __construct(
        private array $data = [],
    )
    {}

    public function set(string $key, mixed $value): Settings
    {
        $this->data[$key] = $value;

        return $this;
    }

    public function get(string $key): mixed
    {
        return $this->data[$key] ?? null;
    }

    public function save(): SettingsSnapshot
    {
        return new SettingsSnapshot($this->data); // Or return serialization this object.
    }

    public function restore(SettingsSnapshot $snapshot): Settings
    {
        $this->data = $snapshot->getData();

        return $this;
    }
}
