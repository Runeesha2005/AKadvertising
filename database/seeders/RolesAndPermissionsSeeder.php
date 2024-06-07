<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
    }
}

//
//namespace Database\Seeders;
//
//use Illuminate\Database\Seeder;
//use Spatie\Permission\Models\Role as SpatieRole;
//use Spatie\Permission\Models\Permission;
//use App\Enums\Role;
//
//class RolesAndPermissionsSeeder extends Seeder
//{
//    public function run()
//    {
//        // Create Permissions
//        $permissions = [
//            'edit',
//            'delete',
//            'publish',
//            'unpublish'
//        ];
//
//        foreach ($permissions as $permission) {
//            Permission::create(['name' => $permission]);
//        }
//
//        // Create Roles using enums
//        foreach (Role::cases() as $role) {
//            SpatieRole::create(['name' => $role->name]);
//        }
//
//        // Assign permissions to roles
//        SpatieRole::findByName(Role::SuperAdministrator->name)->givePermissionTo($permissions);
//        SpatieRole::findByName(Role::Moderator->name)->givePermissionTo('edit');
//    }
//}
