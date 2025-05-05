<?php

namespace App\Models\Structural\Composite;

use Illuminate\Database\Eloquent\Builder;

interface Filter
{
    public function apply(Builder $builder): Builder;
}
