<?php

namespace App\Console\Commands\Behavioral;

use App\Models\Behavioral\Command\Page;
use App\Models\Behavioral\Command\TextEditor;
use App\Models\Behavioral\Command\WriteCommand;
use Illuminate\Console\Command;

class CommandPattern extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Example work command. Text editor.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $page = new Page();
        $textEditor = new TextEditor();

        // Write "Hello" = "Hello"
        $write = new WriteCommand($page, 'Hello');
        $textEditor->executeCommand($write);
        $this->info($page->getContent());

        // Write " world!" = "Hello world!"
        $write = new WriteCommand($page, ' world!');
        $textEditor->executeCommand($write);
        $this->info($page->getContent());

        // Undo " world!" = "Hello"
        $textEditor->undoLast();
        $this->info($page->getContent());

        // Undo "Hello" = "" (empty content)
        $textEditor->undoLast();
        $this->info($page->getContent());
    }
}
