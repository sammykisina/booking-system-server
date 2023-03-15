<?php

declare(strict_types=1);

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Resources\ClientResource;
use App\Http\Services\Auth\AuthService;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use JustSteveKing\StatusCode\Http;

final class ProfileController extends Controller {
    public function __invoke(User $user, AuthService $authService): JsonResponse {
        return response()->json(
            data: new ClientResource(
                resource: $authService->getProfile(user: $user)
            ),
            status: Http::OK()
        );
    }
}
