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
    public function definition()
    {
        return [
            'title' => fake()->words(3,true),
            'short_title' => fake()->words(5,true),
            'description' => fake()->paragraph(7),
            'type_id' => fake()->numberBetween(1,2),
            'image' => fake()->imageUrl(590,300,'design'),
        ];
    }
}
