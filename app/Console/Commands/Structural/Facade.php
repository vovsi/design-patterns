<?php

namespace App\Console\Commands\Structural;

use App\Models\Structural\Facade\CurrencyConverter;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class Facade extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:facade';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Example work facade. ';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // Laravel Facade.
        Cache::set('name', 'Vlad');
        DB::query();
        Auth::getName();
        Log::info('It log');

        // My Facade.
        $this->info(round(CurrencyConverter::convert('10', 'UAH', 'USD'), 2) . ' USD');
    }
}
