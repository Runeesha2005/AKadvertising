<?php
////
////namespace Database\Seeders;
////
////use Illuminate\Database\Console\Seeds\WithoutModelEvents;
////use Illuminate\Database\Seeder;
////
////class AdminUserSeeder extends Seeder
////{
////    /**
////     * Run the database seeds.
////     */
////    public function run(): void
////    {
////        //
////    }
////}
//
//
//namespace Database\Seeders;
//
//use Illuminate\Database\Seeder;
//use App\Models\User;
//use Illuminate\Support\Facades\Hash;
//use Spatie\Permission\Models\Role;
//use App\Enums\RoleType;
//
//class AdminUserSeeder extends Seeder
//{
//    public function run()
//    {
//        // Create the admin user
//        $admin = User::create([
//            'name' => 'Admin',
//            'email' => 'admin@example.com',
//            'password' => Hash::make('admin@2005'), // Change this to a secure password
//            'role' => 1
//        ]);
//
//        // Assign the admin role to the user
//        $admin->assignRole(RoleType::ADMIN);
//    }
//}

//
//namespace Database\Seeders;
//
//use Illuminate\Database\Seeder;
//use App\Models\User;
//use Illuminate\Support\Facades\Hash;
//use Spatie\Permission\Models\Role as SpatieRole;
//use App\Enums\Role;
//
//class AdminUserSeeder extends Seeder
//{
//    public function run()
//    {
//        // Create the admin user
//        $admin = User::create([
//            'name' => 'Admin',
//            'email' => env('ADMIN_EMAIL', 'admin@example.com'),
//            'password' => Hash::make(env('ADMIN_PASSWORD', 'password')), // Change this to a secure password
//            'role' => 1
//        ]);
//
//        // Assign the admin role to the user
//        $admin->assignRole(Role::SuperAdministrator->name);
//    }
//}


namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Enums\Role;

class AdminUserSeeder extends Seeder
{
    public function run()
    {
        // Create the admin user
        $admin = User::create([
            'name' => 'Admin',
            'email' => env('ADMIN_EMAIL', 'admin@example.com'),
            'password' => Hash::make(env('ADMIN_PASSWORD', 'admin@2005')), // Change this to a secure password
            'role' => 1
        ]);

        // Assign the admin role to the user
        $admin->assignRole(Role::SuperAdministrator->name);
    }
}
