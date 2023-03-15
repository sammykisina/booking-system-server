<?php

declare(strict_types=1);

namespace App\Http\Requests\Tickets;

use Illuminate\Foundation\Http\FormRequest;

class StoreTicketRequest extends FormRequest {
    public function rules(): array {
        return [
            'journey' => [
                'required',
                'string'
            ],
            'price' => [
                'required',
                'numeric'
            ],
            'user_id' => [
                'required',
                'exists:users,id'
            ],
            'numberOfTotalTickets' => [
                'required',
                'numeric'
            ],
            'means' => [
                'required',
                'string'
            ]
        ];
    }

    public function getNewTicketData(): array {
        return $this->validated();
    }
}
