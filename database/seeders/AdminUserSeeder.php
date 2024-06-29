<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Create admin user
        $admin = [
            'name' => 'Admin',
            'email' => 'admintest@gmail.com',
            'password' => bcrypt('admintest123'),
            'role' => 'admin',
        ];

        // Save admin user to database
        User::create($admin);
    }
}
