<?php

namespace App\Console\Commands\Behavioral;

use App\Models\Behavioral\Strategy\CsvFormat;
use App\Models\Behavioral\Strategy\ExcelFormat;
use App\Models\Behavioral\Strategy\Report;
use Illuminate\Console\Command;

class Strategy extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:strategy';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Example work strategy. Generation report different formats.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $report = new Report([
            [
                'name' => 'Vlad',
                'age' => 27,
                'country' => 'Ukraine',
            ],
            [
                'name' => 'Oleg',
                'age' => 30,
                'country' => 'Germany',
            ],
        ], new CsvFormat()); // Csv
        $this->info($report->getFile('people'));

        $report->setFormat(new ExcelFormat()); // Excel
        $this->info($report->getFile('people'));
    }
}
