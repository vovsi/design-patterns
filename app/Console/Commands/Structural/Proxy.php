<?php

namespace App\Console\Commands\Structural;

use App\Models\Structural\Proxy\WeatherApi;
use App\Models\Structural\Proxy\WeatherProxy;
use Illuminate\Console\Command;

class Proxy extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:proxy';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Example work proxy. Getting weather by date.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $weather = new WeatherProxy(new WeatherApi());

        $date = new \DateTime('2025-05-12');
        dump($weather->get($date)); // From API

        $date->setDate(2025, 5, 13);
        dump($weather->get($date)); // From API

        $date->setDate(2025, 5, 12);
        dump($weather->get($date)); // From cache
    }
}
