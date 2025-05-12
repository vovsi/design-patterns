<?php

namespace App\Models\Behavioral\ChainOfResponsibility;

class WorldPeopleDatabase extends BasePeopleDatabase
{
    public function __construct()
    {
        $this->people = [
            'Igor',
            'Tatyana',
            'George',
        ];
    }
}
