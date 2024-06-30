<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
{
    $this->call([
        PaslonSeeder::class, // call PaslonSeeder.php
        AdminUserSeeder::class, // call AdminUserSeeder.php

    ]);
}
}
