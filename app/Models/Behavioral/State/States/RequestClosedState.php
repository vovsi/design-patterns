<?php

namespace App\Models\Behavioral\State\States;

use App\Models\Behavioral\State\BaseRequestState;

class RequestClosedState extends BaseRequestState
{
    public function created()
    {
        echo("[Error] Request already created" . PHP_EOL);
    }

    public function inWork()
    {
        echo("[Error] The request cannot be get to work" . PHP_EOL);
    }

    public function closed()
    {
        echo("[Error] Request already closed" . PHP_EOL);
    }
}
