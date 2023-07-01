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
            'user_id' => rand(1, 4),
            'category_id' => rand(1, 3),
            'title' => fake()->words(4, true),
            'slug' => fake()->slug(),
            'excerpt' => fake()->text(30),
            'body' => fake()->paragraphs(3,true),
            'published_at' => null
        ];
    }
}
