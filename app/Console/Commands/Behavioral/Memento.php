<?php

namespace App\Console\Commands\Behavioral;

use App\Models\Behavioral\Memento\Settings;
use Illuminate\Console\Command;

class Memento extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:memento';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Example work memento. Settings with snapshot.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // Init.
        $settings = new Settings([
            'name' => 'display',
            'resolution' => '3000x2000',
            'scale' => '1:1',
        ]);

        // Save.
        $snapshot = $settings->save();
        $this->info('Init resolution: ' . $settings->get('resolution'));

        // Change.
        $settings->set('resolution', '720x480');
        $this->info('New resolution: ' . $settings->get('resolution'));

        // Restore.
        $settings->restore($snapshot);
        $this->info('Resolution after restore: ' . $settings->get('resolution'));
    }
}
