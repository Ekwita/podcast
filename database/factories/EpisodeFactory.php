<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Episode>
 */
class EpisodeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id' => fake()->uuid(),
            'title' => fake()->name(),
            'description' => fake()->text(),
            'file_path' => fake()->filePath(),
            'duration' => fake()->numberBetween(1, 2000),
            'thumbnail_path' => fake()->filePath(),
            'host_name' => fake()->name(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
