<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use App\Http\Resources\ClientResource;
use App\Http\Services\Admin\ClientService;
use JustSteveKing\StatusCode\Http;

class IndexController extends Controller {
    public function __invoke(ClientService $clientService) {
        return response()->json(
            data: ClientResource::collection(
                resource: $clientService->getClients()
            ),
            status: Http::OK()
        );
    }
}
