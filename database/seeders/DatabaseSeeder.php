<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\RuleSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\DriveSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // $this->call(UserSeeder::class);
        // $this->call(DriveSeeder::class);
        $this->call(RuleSeeder::class);
    }
}
