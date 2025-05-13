<?php

namespace App\Console\Commands\Behavioral;

use App\Models\Behavioral\Iterator\CsvIterator;
use Illuminate\Console\Command;

class Iterator extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:iterator';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Example work iterator. Iterator csv file.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $iterator = new CsvIterator('/home/ovsi/Документы/People.csv');

        // First 10 rows.
        for ($i = 0; $i < 10; $i++) {
            $iterator->next();
            if ($iterator->valid()) {
                dump($iterator->current());
            }
        }
    }
}
