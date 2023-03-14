<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Town extends Model {
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function busDestination(): BelongsToMany {
        return $this->belongsToMany(
            related: Town::class,
            table: 'bus_journey',
            foreignPivotKey: 'departure_id',
            relatedPivotKey: 'destination_id',
        );
    }
}
