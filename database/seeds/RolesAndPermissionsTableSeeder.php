<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesAndPermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset Cache 
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // Permissions for roles
        Permission::create(['name' => 'update-role']);
        Permission::create(['name' => 'index-role']);
        Permission::create(['name' => 'delete-role']);
        Permission::create(['name' => 'read-role']);
        Permission::create(['name' => 'create-role']);

        // Permissions for users
        Permission::create(['name' => 'update-user']);
        Permission::create(['name' => 'index-user']);
        Permission::create(['name' => 'delete-user']);
        Permission::create(['name' => 'read-user']);
        Permission::create(['name' => 'create-user']);

        // Permissions for permissions
        Permission::create(['name' => 'update-permission']);
        Permission::create(['name' => 'index-permission']);
        Permission::create(['name' => 'delete-permission']);
        Permission::create(['name' => 'read-permission']);
        Permission::create(['name' => 'create-permission']);

        // Permissions for parents
        Permission::create(['name' => 'index-reports']);

        // Permissions for courses
        Permission::create(['name' => 'index-course']);
        Permission::create(['name' => 'update-course']);
        Permission::create(['name' => 'delete-course']);
        Permission::create(['name' => 'read-course']);
        Permission::create(['name' => 'create-course']);

        // Permissions for students
        Permission::create(['name' => 'index-student']);
        Permission::create(['name' => 'update-student']);
        Permission::create(['name' => 'delete-student']);
        Permission::create(['name' => 'read-student']);
        Permission::create(['name' => 'create-student']);

        // Permissions for college
        Permission::create(['name' => 'index-college']);
        Permission::create(['name' => 'update-college']);
        Permission::create(['name' => 'delete-college']);
        Permission::create(['name' => 'read-college']);
        Permission::create(['name' => 'create-college']);

        // Permissions for treasurer
        Permission::create(['name' => 'index-treasurer']);
        Permission::create(['name' => 'update-treasurer']);
        Permission::create(['name' => 'delete-treasurer']);
        Permission::create(['name' => 'read-treasurer']);
        Permission::create(['name' => 'create-treasurer']);

        // Permissions for account
        Permission::create(['name' => 'index-account']);
        Permission::create(['name' => 'update-account']);
        Permission::create(['name' => 'delete-account']);
        Permission::create(['name' => 'read-account']);
        Permission::create(['name' => 'create-account']);

        // this can be done as separate statements
        $role = Role::create(['name' => 'representant']);// This role is for a president of courses
        $role->givePermissionTo('index-reports');

        // this can be done as separate statements
        $role = Role::create(['name' => 'admin']);// This role is for a Admin of courses
        $role->givePermissionTo('index-reports');
        $role->givePermissionTo('index-user');
        $role->givePermissionTo('create-user');
        $role->givePermissionTo('update-user');
        $role->givePermissionTo('delete-user');
        $role->givePermissionTo('read-user');
        $role->givePermissionTo('index-course');
        $role->givePermissionTo('create-course');
        $role->givePermissionTo('update-course');
        $role->givePermissionTo('delete-course');
        $role->givePermissionTo('read-course');
        $role->givePermissionTo('index-treasurer');
        $role->givePermissionTo('create-treasurer');
        $role->givePermissionTo('update-treasurer');
        $role->givePermissionTo('delete-treasurer');
        $role->givePermissionTo('read-treasurer');
        $role->givePermissionTo('index-student');
        $role->givePermissionTo('create-student');
        $role->givePermissionTo('update-student');
        $role->givePermissionTo('delete-student');
        $role->givePermissionTo('read-student');


        // this can be done as separate statements
        $role = Role::create(['name' => 'treasurer']);// This role is for a trasure of comite
        $role->givePermissionTo('index-reports');
        $role->givePermissionTo('index-account');
        $role->givePermissionTo('create-account');
        $role->givePermissionTo('update-account');
        $role->givePermissionTo('delete-account');
        $role->givePermissionTo('read-account');


        // this can be done as separate statements
        $role = Role::create(['name' => 'superadmin']);// This role is for a superadmin
        $role->givePermissionTo(Permission::all());

    }
}
