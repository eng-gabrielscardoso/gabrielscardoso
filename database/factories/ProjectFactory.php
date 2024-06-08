<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $start_date = Carbon::create($this->faker->date());

        return [
            'title' => $this->faker->company(),
            'association' => $this->faker->company(),
            'description' => $this->faker->paragraph(5),
            'link' => $this->faker->url(),
            'start_date' => $start_date,
            'end_date' => $start_date->copy()->addYears($this->faker->numberBetween(1, 5)),
        ];
    }
}
