<?php

namespace App\Services\User;

use App\Enums\UserPermissionEnums;
use App\Models\UserPermission;

class UserPermissionService
{
    public function createUserPermission(string $permissionName, ?string $guardName = null)
    {
        $guardName = $guardName ?? config('auth.defaults.guard');

        if (!in_array($guardName, getGuards())) {
            throw new \Error("This guard does not available $guardName");
        }
        if (!UserPermissionEnums::hasValue($permissionName)) {
            throw new \Error("This permission does not exists in UserPermissionEnums $permissionName");
        }

        return UserPermission::create([
            'name' => $permissionName,
            'guard_name' => $guardName
        ]);
    }
}
