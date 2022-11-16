<?php

namespace App\Services;

use App\Models\Role;
use App\Models\Permission;
use Illuminate\Support\Facades\DB;

class ACLService
{
    public function createRole(string $name): void
    {
        // TODO: add validations in controller
        
        Permission::create(['name' => $name]);
    }

    public function createPermission(string $name): void
    {
        // TODO: add validations in controller
        
        Permission::create(['name' => $name]);
    }

    public function givePermissionToRole(Role $role, Permission $permission): void
    {
        // TODO: add validations in controller

        DB::table('role_has_permissions')->insert( [
            'permission_id' => $permission->id,
            'role_id' => $role->id,
        ]);
    }
}