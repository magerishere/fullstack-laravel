<?php

namespace Database\Seeders;

use App\Enums\UserRoleEnums;
use App\Services\User\UserRoleService;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userRoleService = new UserRoleService();

        $roleNames = UserRoleEnums::asArray();

        foreach ($roleNames as $roleName) {
            $role = $userRoleService->createUserRole($roleName);
            match ($roleName) {
                UserRoleEnums::SUPER_ADMIN => $userRoleService->assignPermissions($role, getSuperAdminPermissions()),
                UserRoleEnums::ADMIN => $userRoleService->assignPermissions($role, getAdminPermissions()),
                UserRoleEnums::AUTHOR => $userRoleService->assignPermissions($role, getAuthorPermissions()),
                UserRoleEnums::CUSTOMER => $userRoleService->assignPermissions($role, getCustomerPermissions()),
                UserRoleEnums::MEMBER => $userRoleService->assignPermissions($role, getMemberPermissions()),
                default => throw new \Error("This role name cannot be find in UserRoleSeeder $roleName")
            };
        }


    }
}
