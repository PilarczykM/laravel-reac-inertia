<?php

namespace Database\Factories;

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
        return [
            "name" => fake()->sentence(),
            "description" => fake()->realText(),
            "due_date" => fake()->dateTimeBetween("now", "+1 years"),
            "status" => fake()->randomElement(["todo", "in_progress", "completed"]),
            "image_path" => fake()->imageUrl(),
            "created_by" => 1,
            "updated_by" => 1
        ];
    }
}
