<?php

namespace App\Models\Behavioral\State;

use App\Models\Behavioral\State\States\RequestCreatedState;

class Request
{
    private BaseRequestState $state;

    public function __construct(
        public string $nameFrom,
        public string $emailFrom,
        public string $text,
    )
    {
        $this->changeState(new RequestCreatedState($this));
    }

    public function getState(): BaseRequestState
    {
        return $this->state;
    }

    public function changeState(BaseRequestState $state)
    {
        $this->state = $state;
    }

    public function toWork()
    {
        $this->state->inWork();
    }

    public function toClose()
    {
        $this->state->closed();
    }
}
