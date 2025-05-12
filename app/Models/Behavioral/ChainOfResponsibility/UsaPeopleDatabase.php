<?php

namespace App\Models\Behavioral\ChainOfResponsibility;

class UsaPeopleDatabase extends BasePeopleDatabase
{
    public function __construct()
    {
        $this->people = [
            'Kristofer',
            'Arnold',
            'Stefani'
        ];
    }
}
