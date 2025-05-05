<?php

namespace App\Console\Commands\Structural;

use App\Models\Structural\Decorator\Contract;
use App\Models\Structural\Decorator\ContractDiscount;
use App\Models\Structural\Decorator\ContractPromoCode;
use App\Models\Structural\Decorator\ContractStartLesson;
use App\Models\Structural\Decorator\RequestForm;
use Illuminate\Console\Command;

class Decorator extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:decorator';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Example work decorator. Calculation cost of contract.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // Without decorators.
        $request = new RequestForm();
        $contract = new Contract();
        $this->info('Cost: ' . $contract->getCost($request));

        // With promo-code decorator.
        $request->promoCode = '777';
        $contractPromo = new ContractPromoCode($contract);
        $this->info('Cost: ' . $contractPromo->getCost($request));

        // With discount decorator.
        $request->discount = 10;
        $contractDiscount = new ContractDiscount($contract);
        $this->info('Cost: ' . $contractDiscount->getCost($request));

        // With date start lesson decorator.
        $request->startLesson = new \DateTime('2025-09-01');
        $contractStartLesson = new ContractStartLesson($contract);
        $this->info('Cost: ' . $contractStartLesson->getCost($request));

        // With all decorators.
        $contractPromo = new ContractPromoCode($contract);
        $contractDiscount = new ContractDiscount($contractPromo);
        $contractStartLesson = new ContractStartLesson($contractDiscount);
        $this->info('Cost: ' . $contractStartLesson->getCost($request));
    }
}
