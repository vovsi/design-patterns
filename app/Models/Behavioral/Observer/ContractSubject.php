<?php

namespace App\Models\Behavioral\Observer;

use SplObserver;

class ContractSubject implements \SplSubject
{
    private array $observers = [];
    private ?Contract $contract = null;

    public function attach(SplObserver $observer): void
    {
        $this->observers[] = $observer;
    }

    public function detach(SplObserver $observer): void
    {
        $key = array_search($observer, $this->observers, true);
        if ($key !== false) {
            unset($this->observers[$key]);
        }
    }

    public function notify(): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function setContract(Contract $contract): Contract
    {
        return $this->contract = $contract;
    }

    public function getContract(): ?Contract
    {
        return $this->contract;
    }
}
