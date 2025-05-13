<?php

namespace App\Models\Behavioral\Command;

class Page
{
    public function __construct(
        private string $content = '',
    )
    {}

    public function setContent(string $content): string
    {
        return $this->content = $content;
    }

    public function getContent(): string
    {
        return $this->content;
    }
}
