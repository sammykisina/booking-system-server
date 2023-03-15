<?php

declare(strict_types=1);

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TicketResource extends JsonResource {
    public function toArray(Request $request): array {
        return [
            'id' => $this->id,
            'type' => 'ticket',
            'attributes' => [
                'ticketNumber' => $this->ticketNumber,
                'journey' => $this->journey,
                'price' => $this->price,
                'means' => $this->means,
                'createdAt' => $this->created_at
            ]
        ];
    }
}
