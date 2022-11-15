<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Role;
use App\Models\User;
use App\Models\Permission;
use App\Services\ACLService;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ACLServiceTest extends TestCase
{
    public function test_can_give_permission_to_a_role()
    {
        $role = Role::where('name', 'admin')->first();
        $permission = Permission::where('name', 'permission_access')->first();
        $user = User::factory()->create();

        $aclService = new ACLService();

        $aclService->givePermissionToRole($role, $permission);
    }
}
