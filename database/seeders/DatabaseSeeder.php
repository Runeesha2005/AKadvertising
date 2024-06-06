<?php
//
//namespace Database\Seeders;
//
//// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
//use Illuminate\Database\Seeder;
//
//class DatabaseSeeder extends Seeder
//{
//    /**
//     * Seed the application's database.
//     */
//    public function run(): void
//    {
////        \App\Models\User::factory(10)->create();
////
////        \App\Models\User::factory()->create([
////            'name' => 'Admin',
////            'email' => 'admin@admin.com',
////            'password' => bcrypt('admin'),
////            'role' => 1
//        // Other seeders
//        $this->call(AdminUserSeeder::class);
////        ]);
//
//        $this->call([
//            ProductCategorySeeder::class,
//            //ProductSeeder::class,
//        ]);
//
//
//
//
//    }
//}


namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Run the roles and permissions seeder first
        $this->call([
            RolesAndPermissionsSeeder::class,
            AdminUserSeeder::class,
        ]);
    }
}
