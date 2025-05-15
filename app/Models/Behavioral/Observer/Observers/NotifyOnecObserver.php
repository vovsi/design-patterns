<?php

namespace App\Models\Behavioral\Observer\Observers;

use SplSubject;

class NotifyOnecObserver implements \SplObserver
{
    public function update(SplSubject $subject): void
    {
        echo("[Notify 1C] Registered new contract with 1C code: " . $subject->getContract()->onec . PHP_EOL);
    }
}
