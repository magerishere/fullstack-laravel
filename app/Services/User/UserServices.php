<?php

namespace App\Services\User;

use App\Enums\UserRoleEnums;
use App\Models\User;

class UserServices
{
    public function all(string $orderBy = 'created_at')
    {
        return User::orderByDesc($orderBy)->get();
    }

    public function createUser(array $data): User
    {
        return User::create($data);
    }

    public function assignRole(User $user, mixed $role)
    {
        if (!UserRoleEnums::hasValue($role)) {
            throw new \Error("This roles does not belongs to UserRoleEnums: $role");
        }
        $user->assignRole($role);

        return $this;
    }
}
