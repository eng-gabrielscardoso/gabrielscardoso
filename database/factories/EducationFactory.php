<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Education>
 */
class EducationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $degrees = [
            'Bachelor of Science',
            'Bachelor of Arts',
            'Bachelor of Engineering',
            'Bachelor of Technology',
            'Master of Science',
        ];

        $courses = [
            'Computer Science',
            'Information Technology',
            'Software Engineering',
            'Electrical Engineering',
            'Mechanical Engineering',
        ];

        $fields_of_study = [
            'Computer Science',
            'Information Technology',
            'Software Engineering',
            'Electrical Engineering',
            'Mechanical Engineering',
        ];

        $schools = [
            'University of Lagos',
            'University of Ibadan',
            'University of Benin',
            'University of Port Harcourt',
            'University of Abuja',
        ];

        $start_date = Carbon::create($this->faker->date());

        return [
            'degree' => $this->faker->randomElement($degrees),
            'course' => $this->faker->randomElement($courses),
            'field_of_study' => $this->faker->randomElement($fields_of_study),
            'school' => $this->faker->randomElement($schools),
            'description' => $this->faker->paragraph(5),
            'start_date' => $start_date,
            'end_date' => $start_date->copy()->addYears(4),
        ];
    }
}
