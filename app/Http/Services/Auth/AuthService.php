<?php

declare(strict_types=1);

namespace App\Http\Services\Auth;

use App\Models\User;

final class AuthService {
    public function registerNewUser(array $newUserData): User {
        return User::create($newUserData);
    }
}
