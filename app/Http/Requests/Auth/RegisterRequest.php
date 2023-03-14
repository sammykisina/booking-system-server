<?php

declare(strict_types=1);

namespace App\Http\Requests\Auth;

use App\Models\Role;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;

class RegisterRequest extends FormRequest {
    public function rules(): array {
        return [
            'name' => [
                'required',
                'string'
            ],
            'email' => [
                'required',
                'email',
                'unique:users,email'
            ],
            'password' => [
                'required'
            ]
        ];
    }

    public function getNewUserInformation(): array {
        $userRole = Role::query()->where('slug', 'user')->first();

        $newUserInformation = $this->validated();

        $newUserInformation['password'] = Hash::make(value:  $newUserInformation['password']);
        $newUserInformation['role_id'] = $userRole->id;

        return $newUserInformation;
    }
}
