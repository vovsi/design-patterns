<?php

namespace App\Models\Creational\Builder;

class ExcelBuilder
{
    protected Excel $excel;

    public function __construct()
    {
        $this->excel = new Excel();
    }

    public function setTitle(string $title): self
    {
        $this->excel->title = $title;

        return $this;
    }

    public function addColumn(string $name, int $width = 20): self
    {
        $this->excel->columns[] = ['name' => $name, 'width' => $width];

        return $this;
    }

    public function addRow(array $row): self
    {
        $this->excel->rows[] = $row;

        return $this;
    }

    public function setStyle(string $cell, array $style): self
    {
        $this->excel->styles[$cell] = $style;

        return $this;
    }

    public function build(): Excel
    {
        return $this->excel;
    }
}
