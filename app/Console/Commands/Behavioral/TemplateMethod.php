<?php

namespace App\Console\Commands\Behavioral;

use App\Models\Behavioral\TemplateMethod\FullResultTest;
use App\Models\Behavioral\TemplateMethod\ShortResultTest;
use Illuminate\Console\Command;

class TemplateMethod extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:template-method';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Example work template method. Getting result of test (full/short versions).';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Full version:');
        dump((new FullResultTest())->getResult());

        $this->info('Short version:');
        dump((new ShortResultTest())->getResult());
    }
}
