<?php

namespace App\Models\Behavioral\Observer\Observers;

use SplSubject;

class NotifyClientObserver implements \SplObserver
{
    public function update(SplSubject $subject): void
    {
        echo("[Notify client] Thank you for contract " . $subject->getContract()->name . '!' . PHP_EOL);
    }
}
