<?php

namespace App\Models\Creational\Builder;

class Excel
{
    public ?string $title = null;
    public array $columns = [];
    public array $rows = [];
    public array $styles = [];
}
