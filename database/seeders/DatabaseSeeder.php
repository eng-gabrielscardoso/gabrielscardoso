<?php

namespace Database\Seeders;

use App\Models\Education;
use App\Models\Experience;
use App\Models\Message;
use App\Models\Project;
use App\Models\Skill;
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

        Education::factory()->count(4)->create();

        Experience::factory()->count(6)->create();

        Project::factory()->count(6)->create();

        Message::factory()->count(50)->create();

        Skill::factory()->count(4)->create();
    }
}
