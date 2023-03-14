<?php

declare(strict_types=1);

namespace App\Http\Services\Admin;

use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

class ClientService {
    public function getClients(): Collection {
        return QueryBuilder::for(subject: User::class)
                ->allowedIncludes(includes: ['role'])
                ->defaultSort('-created_at')
                ->allowedFilters(filters: AllowedFilter::exact('role.slug'))
                ->get();
    }
}
