<?php

namespace App\Console\Commands;

use App\Models\Builder\ExcelBuilder;
use Illuminate\Console\Command;

class Builder extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:builder';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Example work builder. Excel file builder.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $excel = (new ExcelBuilder())
            ->setTitle('Report')
            ->addColumn('№', 10)
            ->addColumn('Name', 30)
            ->addColumn('Age', 10)
            ->addRow([1, 'Vlad', 26])
            ->addRow([2, 'Mark', 20])
            ->addRow([3, 'Anna', 30])
            ->setStyle('A1', ['bold' => true])
            ->build();

        dd($excel);
    }
}
