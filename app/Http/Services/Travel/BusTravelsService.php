<?php

declare(strict_types=1);

namespace App\Http\Services\Travel;

use App\Models\BusJourney;
use Illuminate\Database\Eloquent\Collection;
use Spatie\QueryBuilder\QueryBuilder;

class BusTravelsService {
    public function getBusTravels(): Collection {
        return QueryBuilder::for(subject: BusJourney::class)
                     ->defaultSort('-created_at')
                     ->get();
    }
}
