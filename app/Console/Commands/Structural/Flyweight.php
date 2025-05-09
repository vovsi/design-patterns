<?php

namespace App\Console\Commands\Structural;

use App\Models\Structural\Flyweight\TreeFactory;
use Illuminate\Console\Command;

class Flyweight extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:flyweight';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Example work flyweight. Map garden.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $factory = new TreeFactory();
        $factory->addTree('apple', 'spring', 10, 15, 30, 200); // Flyweight here
        $factory->addTree('apple', 'spring', 20, 15, 25, 190); // Flyweight here
        $factory->addTree('cherry', 'spring', 30, 40, 10, 90);
        $factory->addTree('pear', 'spring', 40, 45, 23, 120);

        $trees = $factory->getTrees();
        $this->info($trees[0]->render());
        dd($trees);
    }
}
