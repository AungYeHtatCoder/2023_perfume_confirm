<?php

namespace Database\Seeders;

use App\Models\Admin\Role;
use Illuminate\Database\Seeder;
use App\Models\Admin\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
class PermissionRoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    // public function run(): void
    // {
    //     $admin_permissions = Permission::all();
    //     Role::findOrFail(1)->permissions()->sync($admin_permissions->pluck('id'));
    //     $user_permissions = $admin_permissions->filter(function ($permission) {
    //         return substr($permission->title, 0, 5) != 'user_' && substr($permission->title, 0, 5) != 'role_' && substr($permission->title, 0, 11) != 'permission_';
    //     });
    //     Role::findOrFail(2)->permissions()->sync($user_permissions);
        
    // }
    public function run()
    {
        // Get permissions for the "Admin" role
        $adminPermissions = Permission::all();

        // Assign all permissions to the "Admin" role (Role ID 1)
        Role::findOrFail(1)->permissions()->sync($adminPermissions->pluck('id'));
        
        // default permission for user 
            $user_permissions = $adminPermissions->filter(function ($permission) {
            return substr($permission->title, 0, 8) == 'default_' || substr($permission->title, 0, 15) == 'admin_dashboard';
        });
        Role::findOrFail(2)->permissions()->sync($user_permissions);

        // Define default permissions for the "Diamond" role (Role ID 2)
        $diamondPermissions = $adminPermissions->filter(function ($permission) {
            // Define conditions for default permissions for the "Diamond" role
            // For example, permissions that start with 'diamond_' or 'admin_dashboard'
            return substr($permission->title, 0, 8) == 'diamond_' || substr($permission->title, 0, 15) == 'admin_dashboard';
        });

        Role::findOrFail(3)->permissions()->sync($diamondPermissions->pluck('id'));

        // Define default permissions for the "Gold" role (Role ID 3)
        $goldPermissions = $adminPermissions->filter(function ($permission) {
            // Define conditions for default permissions for the "Gold" role
            // For example, permissions that start with 'gold_' or 'admin_dashboard'
            return substr($permission->title, 0, 5) == 'gold_' || substr($permission->title, 0, 15) == 'admin_dashboard';
        });

        Role::findOrFail(4)->permissions()->sync($goldPermissions->pluck('id'));

        // Define default permissions for the "Silver" role (Role ID 4)
        $silverPermissions = $adminPermissions->filter(function ($permission) {
            // Define conditions for default permissions for the "Silver" role
            // For example, permissions that start with 'silver_' or 'admin_dashboard'
            return substr($permission->title, 0, 7) == 'silver_' || substr($permission->title, 0, 15) == 'admin_dashboard';
        });

        Role::findOrFail(5)->permissions()->sync($silverPermissions->pluck('id'));
    }
}