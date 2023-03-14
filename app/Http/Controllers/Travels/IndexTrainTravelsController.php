<?php

declare(strict_types=1);

namespace App\Http\Controllers\Travels;

use App\Http\Controllers\Controller;
use App\Http\Resources\JourneyResource;
use App\Http\Services\Travel\TrainTravelsService;
use Illuminate\Http\JsonResponse;
use JustSteveKing\StatusCode\Http;

class IndexTrainTravelsController extends Controller {
    public function __invoke(TrainTravelsService $trainTravelsService): JsonResponse {
        return response()->json(
            data: JourneyResource::collection(
                resource: $trainTravelsService->getTainTravels()
            ),
            status: Http::OK()
        );
    }
}
