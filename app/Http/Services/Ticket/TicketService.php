<?php

declare(strict_types=1);

namespace App\Http\Services\Ticket;

use App\Models\Ticket;
use Illuminate\Database\Eloquent\Collection;
use Spatie\QueryBuilder\QueryBuilder;

final class TicketService {
    public function getTickets(): Collection {
         return QueryBuilder::for(subject: Ticket::class)
                ->defaultSort('-created_at')
                ->get();
    }

    public function createTicket(array $newTickerData): Ticket {
        return Ticket::create($newTickerData);
    }

    public function generateTicketNumber(): string {
        $ticketNumber = '';
        $ticketLoops = 2;

        for ($i=0; $i <= 2 ; $i++) {
            $number = rand(pow(10, $ticketLoops-1), pow(10, $ticketLoops)-1);

            $ticketNumber = $ticketNumber.$number;
        }

        return $this->generateTicketNumberWithDashes($ticketNumber);
    }

    private function generateTicketNumberWithDashes(string $longNumber): string {
        return "ticket-".implode("-", str_split($longNumber, 4));
    }
}
