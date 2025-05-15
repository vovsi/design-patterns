<?php

namespace App\Console\Commands\Behavioral;

use App\Models\Behavioral\Observer\Contract;
use App\Models\Behavioral\Observer\ContractSubject;
use App\Models\Behavioral\Observer\Observers\NotifyClientObserver;
use App\Models\Behavioral\Observer\Observers\NotifyFacebookObserver;
use App\Models\Behavioral\Observer\Observers\NotifyOnecObserver;
use Illuminate\Console\Command;

class Observer extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:observer';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Example work observer. Notifications after register a contract.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $subject = new ContractSubject();
        $subject->attach(new NotifyClientObserver());
        $subject->attach(new NotifyFacebookObserver());
        $subject->attach(new NotifyOnecObserver());

        $contract = new Contract('Vlad', 'Course PHP', 100.00, 'FBLEADID423575683433');
        $subject->setContract($contract);
        $subject->notify();
    }
}
