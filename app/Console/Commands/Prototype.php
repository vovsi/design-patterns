<?php

namespace App\Console\Commands;

use App\Models\Prototype\Invoice;
use Illuminate\Console\Command;

class Prototype extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:prototype';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Example work prototype. Generating invoices.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // Invoice 1
        $invoice1 = new Invoice('Vlad', '7-Eleven', 100.00);

        // Some operations...
        sleep(1);

        // Invoice 2
        $invoice2 = clone $invoice1;
        $invoice2->companyName = 'PayPal';
        $invoice2->datetime = new \DateTime(); // Time is different (!)

        var_dump([
            'invoice1' => $invoice1,
            'invoice2' => $invoice2,
        ]);
    }
}
