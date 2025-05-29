<?php

namespace Database\Factories;

use App\Enums\CauseType;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Volunteering>
 */
class VolunteeringFactory extends Factory
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
            'organisation' => $this->faker->company,
            'role' => $this->faker->jobTitle,
            'cause' => $this->faker->randomElement(array: CauseType::values()),
            'description' => $this->faker->paragraph,
            'start_date' => $start_date,
            'end_date' => $start_date->copy()->addYears($this->faker->numberBetween(1, 5)),
        ];
    }
}
