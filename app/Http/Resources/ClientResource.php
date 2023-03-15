<?php

declare(strict_types=1);

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ClientResource extends JsonResource {
    public function toArray(Request $request): array {
        return [
            'id' => $this->id,
            'type' => 'client',
            'attributes' => [
                'name' => $this->name,
                'email' => $this->email,
                'joinedAt' => $this->created_at
            ],
            'relationships' => [
                'tickets' => TicketResource::collection(
                    resource: $this->whenLoaded(
                        relationship: 'tickets'
                    )
                )
            ]
        ];
    }
}
