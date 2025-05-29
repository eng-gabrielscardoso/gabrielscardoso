<?php

namespace Database\Seeders;

use App\Models\Volunteering;
use Illuminate\Database\Seeder;

class VolunteeringSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Volunteering::factory()->count(10)->create();
    }
}
