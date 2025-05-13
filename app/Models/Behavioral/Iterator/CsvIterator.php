<?php

namespace App\Models\Behavioral\Iterator;

use Iterator;

class CsvIterator implements Iterator
{
    private $file;
    private int $key = 0;
    private $current;

    public function __construct(string $filePath)
    {
        $this->file = fopen($filePath, "r");
    }

    public function current(): mixed
    {
        return $this->current;
    }

    public function next(): void
    {
        $this->current = fgetcsv($this->file);
        $this->key++;
    }

    public function key(): mixed
    {
        return $this->key;
    }

    public function valid(): bool
    {
        return $this->current !== false;
    }

    public function rewind(): void
    {
        rewind($this->file);
        $this->current = fgetcsv($this->file);
        $this->key = 0;
    }

    public function __destruct()
    {
        fclose($this->file);
    }
}
