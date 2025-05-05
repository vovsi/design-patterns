<?php

namespace App\Models\Structural\Composite;

use Illuminate\Database\Eloquent\Builder;

class GroupFilter implements Filter
{
    public function __construct(
        public array $filters = []
    )
    {}

    public function add(Filter $filter): array
    {
        $this->filters[] = $filter;

        return $this->filters;
    }

    public function apply(Builder $builder): Builder
    {
        foreach ($this->filters as $filter) {
            $filter->apply($builder);
        }

        return $builder;
    }
}
