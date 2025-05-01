<?php

namespace App\Console\Commands\Structural;

use App\Models\Structural\Bridge\Abstractions\ConsultationProduct;
use App\Models\Structural\Bridge\Abstractions\ContractProduct;
use App\Models\Structural\Bridge\Realizations\IPayPayment;
use App\Models\Structural\Bridge\Realizations\PayPalPayment;
use Illuminate\Console\Command;

class Bridge extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:bridge';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Example work bridge. System payment products.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $payPal = new PayPalPayment();
        $iPay = new IPayPayment();

        (new ConsultationProduct($payPal))->pay();
        (new ContractProduct($iPay))->pay();
    }
}
