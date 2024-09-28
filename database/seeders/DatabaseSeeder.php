<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\student;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\LecturerSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            // UserSeeder::class,
            // StudentSeeder::class,
            // CitySeeder::class,
            LecturerSeeder::class
        ]);

        student::factory()->count(10)->create();
    }
}
