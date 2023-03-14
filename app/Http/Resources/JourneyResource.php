<?php

declare(strict_types=1);

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class JourneyResource extends JsonResource {
    public function toArray(Request $request): array {
        return [
            'id' => $this->id,
            'type' => 'journey',
            'attributes' => [
                'departure' => $this->departure,
                'destination' => $this->destination,
                'dayOfWeek' => $this->dayOfWeek,
                'price' => $this->price,
                'journeyTime' => $this->journeyTime,
                'startTime' => $this->startTime
            ]
        ];
    }
}
