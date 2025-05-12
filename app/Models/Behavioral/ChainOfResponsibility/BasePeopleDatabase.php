<?php

namespace App\Models\Behavioral\ChainOfResponsibility;

abstract class BasePeopleDatabase implements PeopleDatabase
{
    private ?PeopleDatabase $databaseNext = null;
    protected array $people = []; // Simple database.

    public function setNextDatabase(PeopleDatabase $databaseNext): PeopleDatabase
    {
        return $this->databaseNext = $databaseNext;
    }

    public function findByName(string $name): ?string
    {
        if ($human = $this->getHuman($name)) {
            echo("Found $name in " . static::class . PHP_EOL);

            return $human;
        }

        if ($this->databaseNext !== null) {
            return $this->databaseNext->findByName($name);
        }

        return null;
    }

    protected function getHuman(string $name): ?string
    {
        if (($key = array_search($name, $this->people)) !== false) {
            return $this->people[$key];
        }

        return null;
    }
}
