<?php

namespace App\Models\Structural\Composite;

use Illuminate\Database\Eloquent\Builder;

class SearchFilter implements Filter
{
    public function __construct(
        public string $column,
        public string $value
    )
    {}

    public function apply(Builder $builder): Builder
    {
        return $builder->where($this->column, $this->value);
    }
}
