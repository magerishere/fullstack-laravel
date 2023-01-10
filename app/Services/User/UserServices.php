<?php

namespace App\Services\User;

use App\Enums\UserRoleEnums;
use App\Models\User;

class UserServices
{

    public function createUser(array $data)
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
