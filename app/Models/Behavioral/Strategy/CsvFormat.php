<?php

namespace App\Models\Behavioral\Strategy;

class CsvFormat implements Format
{
    public function getFile(string $fileName, array $data): string
    {
        // Generation csv file...

        return $fileName . '.csv';
    }
}
