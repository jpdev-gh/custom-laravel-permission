<?php

namespace App\Services;

use App\Models\Role;
use App\Models\Permission;
use Illuminate\Support\Facades\DB;

class ACLService
{
    public function givePermissionToRole(Role $role, Permission $permission)
    {
        $data = [
            'permission_id' => $permission->id,
            'role_id' => $role->id,
        ];

        DB::table('role_has_permissions')->insertOrIgnore($data);
    }
}