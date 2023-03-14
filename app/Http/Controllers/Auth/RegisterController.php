<?php

declare(strict_types=1);

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Http\Services\Auth\AuthService;
use Illuminate\Http\JsonResponse;
use JustSteveKing\StatusCode\Http;

class RegisterController extends Controller {
    public function __invoke(RegisterRequest $request, AuthService $authService): JsonResponse {
        if ($user = $authService->registerNewUser(newUserData: $request->getNewUserInformation())) {
            $role = $user->role()->pluck('slug')->all();
            $plainTextToken = $user->createToken('packUK-api-token', $role)
                ->plainTextToken;


            return response()->json(
                data: [
                    'error' => 0,
                    'message' => 'Welcome to PackUK',
                    'user' => [
                        'id' => $user->id,
                        'email' => $user->email,
                        'role' => $role[0],
                    ],
                    'token' => $plainTextToken,
                ],
                status: Http::ACCEPTED()
            );
        } else {
            return $this->response()->json(
                data: [
                    'error' => 1,
                    'message' => 'Something went wrong.'
                ],
                status: Http::NOT_IMPLEMENTED()
            );
        }
    }
}
