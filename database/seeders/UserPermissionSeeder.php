<?php

namespace Database\Seeders;

use App\Enums\UserPermissionEnums;
use App\Services\User\UserPermissionService;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userPermissionService = new UserPermissionService();

        $permissionNames = UserPermissionEnums::asArray();

        foreach ($permissionNames as $permissionName) {
            $userPermissionService->createUserPermission($permissionName);
        }
    }
}
