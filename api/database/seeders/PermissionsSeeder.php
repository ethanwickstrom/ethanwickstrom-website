<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;

class PermissionsSeeder extends Seeder
{
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // Create default permissions
        Permission::create(['name' => 'list articles']);
        Permission::create(['name' => 'view articles']);
        Permission::create(['name' => 'create articles']);
        Permission::create(['name' => 'update articles']);
        Permission::create(['name' => 'delete articles']);

        Permission::create(['name' => 'list categories']);
        Permission::create(['name' => 'view categories']);
        Permission::create(['name' => 'create categories']);
        Permission::create(['name' => 'update categories']);
        Permission::create(['name' => 'delete categories']);

        Permission::create(['name' => 'list comments']);
        Permission::create(['name' => 'view comments']);
        Permission::create(['name' => 'create comments']);
        Permission::create(['name' => 'update comments']);
        Permission::create(['name' => 'delete comments']);

        Permission::create(['name' => 'list allcontactmessages']);
        Permission::create(['name' => 'view allcontactmessages']);
        Permission::create(['name' => 'create allcontactmessages']);
        Permission::create(['name' => 'update allcontactmessages']);
        Permission::create(['name' => 'delete allcontactmessages']);

        Permission::create(['name' => 'list likes']);
        Permission::create(['name' => 'view likes']);
        Permission::create(['name' => 'create likes']);
        Permission::create(['name' => 'update likes']);
        Permission::create(['name' => 'delete likes']);

        Permission::create(['name' => 'list photos']);
        Permission::create(['name' => 'view photos']);
        Permission::create(['name' => 'create photos']);
        Permission::create(['name' => 'update photos']);
        Permission::create(['name' => 'delete photos']);

        Permission::create(['name' => 'list photocollections']);
        Permission::create(['name' => 'view photocollections']);
        Permission::create(['name' => 'create photocollections']);
        Permission::create(['name' => 'update photocollections']);
        Permission::create(['name' => 'delete photocollections']);

        Permission::create(['name' => 'list projects']);
        Permission::create(['name' => 'view projects']);
        Permission::create(['name' => 'create projects']);
        Permission::create(['name' => 'update projects']);
        Permission::create(['name' => 'delete projects']);

        // Create user role and assign existing permissions
        $currentPermissions = Permission::all();
        $userRole = Role::create(['name' => 'user']);
        $userRole->givePermissionTo($currentPermissions);

        // Create admin exclusive permissions
        Permission::create(['name' => 'list roles']);
        Permission::create(['name' => 'view roles']);
        Permission::create(['name' => 'create roles']);
        Permission::create(['name' => 'update roles']);
        Permission::create(['name' => 'delete roles']);

        Permission::create(['name' => 'list permissions']);
        Permission::create(['name' => 'view permissions']);
        Permission::create(['name' => 'create permissions']);
        Permission::create(['name' => 'update permissions']);
        Permission::create(['name' => 'delete permissions']);

        Permission::create(['name' => 'list users']);
        Permission::create(['name' => 'view users']);
        Permission::create(['name' => 'create users']);
        Permission::create(['name' => 'update users']);
        Permission::create(['name' => 'delete users']);

        // Create admin role and assign all permissions
        $allPermissions = Permission::all();
        $adminRole = Role::create(['name' => 'super-admin']);
        $adminRole->givePermissionTo($allPermissions);

        $user = \App\Models\User::whereEmail('admin@admin.com')->first();

        if ($user) {
            $user->assignRole($adminRole);
        }
    }
}
