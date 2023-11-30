<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'Mechanical']);
        $role3 = Role::create(['name' => 'Client']);

        Permission::create(['name' => 'admin.users'])->syncRoles([$role1]);

        Permission::create(['name' => 'mechanical'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'mechanical.employees'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'mechanical.services'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'mechanical.requests'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'mechanical.completed_requests'])->syncRoles([$role1, $role2]);

        Permission::create(['name' => 'client'])->syncRoles([$role1, $role3]);
        Permission::create(['name' => 'client.vehicles'])->syncRoles([$role1, $role3]);
        Permission::create(['name' => 'client.requests'])->syncRoles([$role1, $role3]);
        Permission::create(['name' => 'client.completed_requests'])->syncRoles([$role1, $role3]);

        Permission::create(['name' => 'profile'])->syncRoles([$role1, $role2, $role3]);
    }
}
