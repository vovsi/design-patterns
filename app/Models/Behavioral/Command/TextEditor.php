<?php

namespace App\Models\Behavioral\Command;

class TextEditor
{
    private array $history = [];

    public function executeCommand(Command $command): void
    {
        $command->execute();
        $this->history[] = $command;
    }

    public function undoLast(): void
    {
        if (!empty($this->history)) {
            $command = array_pop($this->history);
            $command->undo();
        }
    }
}
