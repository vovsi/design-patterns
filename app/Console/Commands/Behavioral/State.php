<?php

namespace App\Console\Commands\Behavioral;

use App\Models\Behavioral\State\Request;
use Illuminate\Console\Command;

class State extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:state';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Example work state. System handle online-requests.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $request = new Request('Vlad', 'vlad@mail.com', 'How buy course by PHP?'); // Created.
        $this->info("State: " . $request->getState()->getStateName());

        $request->toWork(); // Created => InWork
        $this->info("State: " . $request->getState()->getStateName());

        $request->toClose(); // InWork => Closed
        $this->info("State: " . $request->getState()->getStateName());

        $request->toWork(); // Error!
        $this->info("State: " . $request->getState()->getStateName());
    }
}
