<?php

namespace App\Console\Commands;

use App\Models\AbstractFactory\ThemeFactories\DarkThemeFactoryFactory;
use App\Models\AbstractFactory\ThemeFactories\LightThemeFactoryFactory;
use Illuminate\Console\Command;

class AbstractFactory extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:abstract-factory {--D|modeDark}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Example work abstract factory. Selecting a design mode (dark/light).';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        if ($this->option('modeDark')) {
            $theme = new DarkThemeFactoryFactory();
        } else {
            $theme = new LightThemeFactoryFactory();
        }

        $theme->getTitle('It is title')->render();
        $theme->getMessage('It is message')->render();
        $theme->getNotice('It is notice')->render();
    }
}
