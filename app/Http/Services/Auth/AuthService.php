<?php

declare(strict_types=1);

namespace App\Http\Services\Auth;

use App\Models\User;
use Spatie\QueryBuilder\QueryBuilder;

final class AuthService {
    public function registerNewUser(array $newUserData): User {
        return User::create($newUserData);
    }

    public function getProfile(User $user): User {
        return User::query()->where('id', $user->id)->with(['tickets'])->first();
    }
}
