<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => bcrypt('Secret123456@'),
        ]);

        $this->call([
            EducationSeeder::class,
            ExperienceSeeder::class,
            ProjectSeeder::class,
            MessageSeeder::class,
            SkillSeeder::class,
        ]);
    }
}
