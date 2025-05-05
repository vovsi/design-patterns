<?php

namespace App\Models\Structural\Composite;

use Illuminate\Database\Eloquent\Builder;

class SortFilter implements Filter
{
    public function __construct(
        public string $column,
        public string $direction,
    )
    {}

    public function apply(Builder $builder): Builder
    {
        return $builder->orderBy($this->column, $this->direction);
    }
}
