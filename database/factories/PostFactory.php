<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(3),
            'slug' => fake()->sentence(3),
            'description' => fake()->sentence(10),
            'user_id' => rand(1, 6),
            'category_id' => rand(1, 6),
            'is_featured' => rand(0, 1)
        ];
    }
}
