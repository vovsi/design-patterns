<?php

namespace App\Console\Commands\Creational;

use App\Models\Creational\FactoryMethod\Services\SmsService;
use Illuminate\Console\Command;

class FactoryMethod extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:factory-method';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Example work factory method. Selecting a sender service (sms/email).';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //(new EmailService('123', 'abc'))->send('Hello World!', 'mark@mail.com');
        (new SmsService('321', 'bca'))->send('Hello World!', '380674321234');
    }
}
