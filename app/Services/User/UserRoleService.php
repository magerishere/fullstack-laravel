<?php

namespace App\Services\User;

use App\Enums\UserRoleEnums;
use App\Models\UserRole;
use Spatie\Permission\Models\Role;

class UserRoleService
{
    public function createUserRole(string $roleName, ?string $guardName = null)
    {
        $guardName = $guardName ?? config('auth.defaults.guard');

        if (!in_array($guardName, getGuards())) {
            throw new \Error("This guard does not available $guardName");
        }
        if (!UserRoleEnums::hasValue($roleName)) {
            throw new \Error("This permission does not exists in UserPermissionEnums $roleName");
        }

        return UserRole::create([
            'name' => $roleName,
            'guard_name' => $guardName,
        ]);
    }

    public function assignPermissions(Role $role, array $permissions)
    {
        $role->givePermissionTo($permissions);

        return $this;
    }
}
