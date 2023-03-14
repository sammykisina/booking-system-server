<?php

declare(strict_types=1);

namespace App\Http\Services\Travel;

use App\Models\TrainJourney;
use Illuminate\Database\Eloquent\Collection;
use Spatie\QueryBuilder\QueryBuilder;

class TrainTravelsService {
    public function getTainTravels(): Collection {
        return QueryBuilder::for(subject: TrainJourney::class)
                     ->defaultSort('-created_at')
                     ->get();
    }
}
