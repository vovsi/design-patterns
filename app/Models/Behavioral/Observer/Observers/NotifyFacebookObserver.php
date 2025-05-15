<?php

namespace App\Models\Behavioral\Observer\Observers;

use SplSubject;

class NotifyFacebookObserver implements \SplObserver
{
    public function update(SplSubject $subject): void
    {
        echo("[Notify Facebook] Registered new contract From: " . $subject->getContract()->customerName . ' Cost: ' . $subject->getContract()->cost . PHP_EOL);
    }
}
