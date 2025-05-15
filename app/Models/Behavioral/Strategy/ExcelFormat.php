<?php

namespace App\Models\Behavioral\Strategy;

class ExcelFormat implements Format
{
    public function getFile(string $fileName, array $data): string
    {
        // Generation excel file...

        return $fileName . '.xls';
    }
}
