<?php

declare(strict_types=1);

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use JustSteveKing\StatusCode\Http;

class LoginController extends Controller {
    public function __invoke(LoginRequest $request) {
        $user = User::query()->where('email', $request->get(key: 'email'))->first();

        if (! $user || ! Hash::check(value: $request->get(key: 'password'), hashedValue: $user->password)) {
            return response()->json(
                data: [
                    'error' => 1,
                    'message' => 'Invalid credentials.Please Enter the Correct Email and Password.',
                ],
                status: Http::NOT_FOUND()
            );
        }

        $user->tokens()->delete();
        $role = $user->role()->pluck('slug')->all();
        $plainTextToken = $user->createToken('packUK-api-token', $role)
            ->plainTextToken;

        return response()->json(
            data: [
                'error' => 0,
                'message' => 'Welcome '.$user->name,
                'user' => [
                    'id' => $user->id,
                    'email' => $user->email,
                    'role' => $role[0],
                ],
                'token' => $plainTextToken,
            ],
            status: Http::ACCEPTED()
        );
    }
}
