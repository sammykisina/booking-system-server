<?php

declare(strict_types=1);

namespace App\Http\Controllers\Tickets;

use App\Http\Controllers\Controller;
use App\Http\Requests\Tickets\StoreTicketRequest;
use App\Http\Services\Ticket\TicketService;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;
use JustSteveKing\StatusCode\Http;

class StoreTicketController extends Controller {
    public function __invoke(StoreTicketRequest $request, TicketService $ticketService): JsonResponse {
        try {
            for ($i=0; $i < $request->get(key: 'numberOfTotalTickets'); $i++) {
                $ticketService->createTicket(
                    newTickerData: array_merge(
                    $request->getNewTicketData(),
                    ['ticketNumber' => $ticketService->generateTicketNumber()]
                )
                );
            }

            return response()->json(
                data: [
                    'error' => 0,
                    'message' => 'Ticket (s) created successfully.' ,
                ],
                status: Http::CREATED()
            );
        } catch (\Throwable $th) {
            Log::info($th);
            return response()->json(
                data: [
                    'error' => 1,
                    'message' => 'Something went wrong.Ticket not created.' ,
                ],
                status: Http::NOT_IMPLEMENTED()
            );
        }
    }
}
