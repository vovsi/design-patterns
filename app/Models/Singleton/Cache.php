<?php

namespace App\Models\Singleton;

class Cache
{
    protected static $instance;
    protected array $storage;

    protected function __construct() {
        $this->storage = [];
    }

    protected function __clone() {}

    public function __wakeup() {
        throw new \Exception("Cannot unserialize singleton");
    }

    public static function getInstance(): static
    {
        if (!isset(static::$instance)) {
            static::$instance = new static;
        }

        return static::$instance;
    }

    public function getValue(string $key): mixed
    {
        return $this->storage[$key] ?? null;
    }

    public function setValue(string $key, mixed $value): static
    {
        $this->storage[$key] = $value;

        return $this;
    }
}
