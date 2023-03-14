<?php

declare(strict_types=1);

namespace App\Http\Controllers\Travels;

use App\Http\Controllers\Controller;
use App\Http\Resources\JourneyResource;
use App\Http\Services\Travel\AirTravelsService;
use Illuminate\Http\JsonResponse;
use JustSteveKing\StatusCode\Http;

class IndexAirTravelsController extends Controller {
    public function __invoke(AirTravelsService $airTravelsService): JsonResponse {
        return response()->json(
            data: JourneyResource::collection(
                resource: $airTravelsService->getAirTravels()
            ),
            status: Http::OK()
        );
    }
}
