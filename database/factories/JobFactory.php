<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
            'title' => fake() -> sentence(),
            'image' => 'https://picsum.photos/200',
            'company' => fake() -> sentence(),
            'email' => 'test@test.com',
            'website' => 'https://www.test.com/',
            'city' => fake() -> word(),
            'type' => fake() -> word(),
            'tags' => 'Laravel, Python, JavaScript',
            'description' => fake() -> paragraph(),
        ];
    }
}
