<?php

namespace App\Models\Behavioral\Strategy;

class Report
{
    public function __construct(
        public array $data,
        private ?Format $format = null,
    )
    {}

    public function setFormat(Format $format): Report
    {
        $this->format = $format;

        return $this;
    }

    public function getFile(string $fileName): ?string
    {
        if ($this->format === null) {
            return null;
        }

        return $this->format->getFile($fileName, $this->data);
    }
}
