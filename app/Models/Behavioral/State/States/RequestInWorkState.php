<?php

namespace App\Models\Behavioral\State\States;

use App\Models\Behavioral\State\BaseRequestState;

class RequestInWorkState extends BaseRequestState
{
    public function created()
    {
        echo("[Error] Request already created" . PHP_EOL);
    }

    public function inWork()
    {
        echo("[Error] Request already in work" . PHP_EOL);
    }

    public function closed()
    {
        $this->request->changeState(new RequestClosedState($this->request));
        echo("[Info] Request closed" . PHP_EOL);
    }
}
