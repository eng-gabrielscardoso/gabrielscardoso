<?php

namespace Database\Factories;

use App\Enums\EmploymentType;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Experience>
 */
class ExperienceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $jobTitles = [
            'Software Engineer',
            'Full Stack Developer',
            'Data Analyst',
            'Product Manager',
            'Business Analyst',
        ];

        $start_date = Carbon::create($this->faker->date());

        return [
            'title' => $this->faker->randomElement($jobTitles),
            'company' => $this->faker->company(),
            'employment_type' => $this->faker->randomElement(EmploymentType::values()),
            'location' => $this->faker->city().', '.$this->faker->country(),
            'start_date' => $start_date,
            'end_date' => $start_date->copy()->addYears($this->faker->numberBetween(1, 5)),
            'description' => $this->faker->paragraph(),
        ];
    }
}
