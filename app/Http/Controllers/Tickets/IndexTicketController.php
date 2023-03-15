<?php

declare(strict_types=1);

namespace App\Http\Controllers\Tickets;

use App\Http\Controllers\Controller;
use App\Http\Resources\TicketResource;
use App\Http\Services\Ticket\TicketService;
use Illuminate\Http\JsonResponse;
use JustSteveKing\StatusCode\Http;

class IndexTicketController extends Controller {
    public function __invoke(TicketService $ticketService):JsonResponse {
        return response()->json(
            data: TicketResource::collection(
                resource: $ticketService->getTickets()
            ),
            status: Http::OK()
        );
    }
}
