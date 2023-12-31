<?php

namespace Database\Seeders;

use App\Models\Staff;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();


        // Create an admin user
        $admin = Staff::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('abc@123'),
            'active' => true,
        ]);

        // Create the 'admin' role if it doesn't exist
        $adminRole = Role::firstOrNew(['name' => 'admin', 'guard_name' => 'staff']);
        $adminRole->save();

        // Assign the 'admin' role to the admin user
        $admin->assignRole($adminRole);


        $user1 = Staff::create([
            'name' => 'editor',
            'email' => 'editor@gmail.com',
            'password' => Hash::make('abc@123'),
            'active' => true,
        ]);
        $user1->assignRole('editor');

        $user2 = Staff::create([
            'name' => 'viewer',
            'email' => 'viewer@gmail.com',
            'password' => Hash::make('abc@123'),
            'active' => true,
        ]);
        $user2->assignRole('viewer');


        // Create sample users and assign roles
        for ($i = 1; $i <= 5; $i++) {
            $user = Staff::create([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'password' => Hash::make('abc@123'),
                'active' => true,
            ]);

            // Assign roles based on conditions
            if ($i % 2 === 0) {
                $user->assignRole('editor');
            } else {
                $user->assignRole('viewer');
            }
        }
    }
}
