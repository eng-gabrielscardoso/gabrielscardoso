<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Skill>
 */
class SkillFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $skills = [
            'html',
            'css',
            'js',
            'php',
            'laravel',
            'vue',
            'bootstrap',
            'tailwindcss',
            'react',
            'angular',
            'nodejs',
            'docker',
            'git',
            'mysql',
            'postgresql',
            'aws',
            'gcp',
            'azure',
            'cloudflare',
            'nginx',
            'elasticsearch',
            'redis',
            'rabbitmq',
            'python',
            'java',
            'go',
            'rust',
            'swift',
            'kotlin',
            'ruby',
            'composer',
            'yarn',
            'npm',
            'pnpm',
            'vscode',
        ];

        return [
            'name' => $this->faker->sentence(3),
            'description' => $this->faker->sentence(),
            'skills' => implode(',', $this->faker->randomElements($skills, 15)),
        ];
    }
}
