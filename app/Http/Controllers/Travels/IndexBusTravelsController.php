<?php

declare(strict_types=1);

namespace App\Http\Controllers\Travels;

use App\Http\Controllers\Controller;
use App\Http\Resources\JourneyResource;
use App\Http\Services\Travel\BusTravelsService;
use Illuminate\Http\JsonResponse;
use JustSteveKing\StatusCode\Http;

final class IndexBusTravelsController extends Controller {
    public function __invoke(BusTravelsService $busTravelsService): JsonResponse {
        return response()->json(
            data: JourneyResource::collection(
                resource: $busTravelsService->getBusTravels()
            ),
            status: Http::OK()
        );
    }
}
