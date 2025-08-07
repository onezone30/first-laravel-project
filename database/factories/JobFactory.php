<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Employer;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employer_id' => Employer::factory(),
            'name' => fake()->jobTitle(),
            'salary' => fake()->randomElement([40000, 50000, 60000, 70000, 80000, 90000]),
            'location' => fake()->randomElement(['BGC', 'Makati City', 'Pasay City', 'Quezon City']),
            'url' => fake()->url(),
        ];
    }
}
