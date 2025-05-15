<?php

namespace App\Models\Behavioral\State\States;

use App\Models\Behavioral\State\BaseRequestState;

class RequestCreatedState extends BaseRequestState
{
    public function created()
    {
        echo("[Error] Request already created" . PHP_EOL);
    }

    public function inWork()
    {
        $this->request->changeState(new RequestInWorkState($this->request));
        echo("[Info] Request sent to work" . PHP_EOL);
    }

    public function closed()
    {
        echo("[Error] The request cannot be closed" . PHP_EOL);
    }
}
