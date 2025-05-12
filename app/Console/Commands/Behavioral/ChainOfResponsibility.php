<?php

namespace App\Console\Commands\Behavioral;

use App\Models\Behavioral\ChainOfResponsibility\UkrainePeopleDatabase;
use App\Models\Behavioral\ChainOfResponsibility\UsaPeopleDatabase;
use App\Models\Behavioral\ChainOfResponsibility\WorldPeopleDatabase;
use Illuminate\Console\Command;

class ChainOfResponsibility extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:chain-of-responsibility';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Example work chain of responsibility. System finding people by few db\'s.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $ukraineDb = new UkrainePeopleDatabase();
        $worldDb = new WorldPeopleDatabase();
        $usaDb = new UsaPeopleDatabase();

        // Finding: Ukraine -> World -> USA
        $ukraineDb->setNextDatabase($worldDb)
            ->setNextDatabase($usaDb);

        $r = $ukraineDb->findByName('Vlad');
        $this->info($r);
        $r = $ukraineDb->findByName('Tatyana');
        $this->info($r);
        $r = $ukraineDb->findByName('Stefani');
        $this->info($r);
    }
}
