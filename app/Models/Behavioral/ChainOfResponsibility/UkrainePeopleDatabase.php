<?php

namespace App\Models\Behavioral\ChainOfResponsibility;

class UkrainePeopleDatabase extends BasePeopleDatabase
{
    public function __construct()
    {
        $this->people = [
            'Vlad',
            'Volodymyr',
            'Masha'
        ];
    }
}
