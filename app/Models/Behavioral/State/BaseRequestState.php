<?php

namespace App\Models\Behavioral\State;

abstract class BaseRequestState implements RequestState
{
    public function __construct(
        protected Request $request,
    )
    {}

    public function setRequest(Request $request): void
    {
        $this->request = $request;
    }

    public function getStateName(): string
    {
        return static::class;
    }
}
