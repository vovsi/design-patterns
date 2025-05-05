<?php

namespace App\Console\Commands\Structural;

use App\Models\Structural\Composite\GroupFilter;
use App\Models\Structural\Composite\SearchFilter;
use App\Models\Structural\Composite\SortFilter;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Schema;

class Composite extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:composite';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Example work composite. Building query with filters.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $userBuilder = User::query();

        $this->info('Filter sort desc:');
        $sortFilter = new SortFilter('id', 'desc');
        $this->showUsers($sortFilter->apply($userBuilder));

        $this->info('Filter search by password "123":');
        $searchFilter = new SearchFilter('password', '123');
        $this->showUsers($searchFilter->apply($userBuilder));

        $this->info('Filter with group (sort=desc + pass=123):');
        $groupFilter = new GroupFilter([$sortFilter, $searchFilter]);
        $this->showUsers($groupFilter->apply($userBuilder));
    }

    protected function showUsers(Builder $builder)
    {
        $this->table(Schema::getColumnListing($builder->getModel()->getTable()), $builder->get()->toArray());
    }
}
