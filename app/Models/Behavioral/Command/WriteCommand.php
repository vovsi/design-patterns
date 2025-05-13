<?php

namespace App\Models\Behavioral\Command;

class WriteCommand implements Command
{
    private string $oldContent;

    public function __construct(
        private Page $page,
        private string $text,
    )
    {
        $this->oldContent = $this->page->getContent();
    }

    public function execute(): void
    {
        $this->page->setContent($this->page->getContent() . $this->text);
    }

    public function undo(): void
    {
        $this->page->setContent($this->oldContent);
    }
}
