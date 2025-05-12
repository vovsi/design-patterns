<?php

namespace App\Models\Behavioral\ChainOfResponsibility;

interface PeopleDatabase
{
    public function findByName(string $name): ?string;
}
