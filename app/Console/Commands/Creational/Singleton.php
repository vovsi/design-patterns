<?php

namespace App\Console\Commands\Creational;

use App\Models\Creational\Singleton\Cache;
use Illuminate\Console\Command;

class Singleton extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:singleton';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Example work singleton. Using global cache storage.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $cache = Cache::getInstance()
            ->setValue('Dog', 'Bobik')
            ->setValue('Cat', 'Mirlik')
            ->setValue('Chicken', 'Gloria');

        $this->info($cache->getValue('Dog'));
        $this->info(Cache::getInstance()->getValue('Cat'));
        $this->info($cache->getValue('Chicken'));
    }
}
