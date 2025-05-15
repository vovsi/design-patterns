<?php

namespace App\Models\Behavioral\State;

interface RequestState
{
    public function created();
    public function inWork();
    public function closed();
}
