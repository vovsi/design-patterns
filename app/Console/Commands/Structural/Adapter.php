<?php

namespace App\Console\Commands\Structural;

use App\Models\Structural\Adapter\FacebookAdapter\FacebookAdapter;
use App\Models\Structural\Adapter\FacebookAdapter\FacebookApi;
use App\Models\Structural\Adapter\SendpulseAdapter\SendpulseAdapter;
use App\Models\Structural\Adapter\SendpulseAdapter\SendpulseApi;
use Illuminate\Console\Command;

class Adapter extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:adapter';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Example work adapter. Sending analytic data.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // Send to FB.
        (new FacebookAdapter(new FacebookApi(env('FACEBOOK_API_KEY'))))->send('lead', [
            'name' => 'John Doe',
            'email' => 'john@doe.com',
        ]);

        // Send to SendPulse.
        (new SendpulseAdapter(new SendpulseApi(env('SENDPULSE_TOKEN'))))->send('contract', [
            'name' => 'John Doe',
            'email' => 'john@doe.com',
        ]);
    }
}
