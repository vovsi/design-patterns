<?php

namespace App\Console\Commands\Behavioral;

use App\Models\Behavioral\Visitor\Apple;
use App\Models\Behavioral\Visitor\Cherry;
use App\Models\Behavioral\Visitor\LogFood;
use Illuminate\Console\Command;

class Visitor extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:visitor';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Example work visitor. Log create products.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // Concrete visitor.
        $logVisitor = new LogFood();

        $apple = new Apple();
        $apple->created($logVisitor); // Execute visitor method.

        $cherry = new Cherry();
        $cherry->created($logVisitor); // Execute visitor method.
    }
}
