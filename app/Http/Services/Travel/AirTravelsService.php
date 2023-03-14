<?php

declare(strict_types=1);

namespace App\Http\Services\Travel;

use App\Models\AirJourney;
use Illuminate\Database\Eloquent\Collection;
use Spatie\QueryBuilder\QueryBuilder;

class AirTravelsService {
    public function getAirTravels(): Collection {
        return QueryBuilder::for(subject: AirJourney::class)
                     ->defaultSort('-created_at')
                     ->get();
    }
}
