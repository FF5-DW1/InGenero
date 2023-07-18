<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Formprofile>
 */
class FormprofileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return[
            'user_id'=> 1,
            'name' => fake()->name(),
            'last_name' => fake()->name(),
            'nationality' => fake()->country(),
            'date_of_birth' => fake()->date(),
            'height' => fake()->buildingNumber(),
            'weight' => fake()->buildingNumber(),
            'eyes_color' => fake()->colorName(),
            'hair_color' => fake()->colorName(),
            'additional_info' => fake()->sentence(6),
            'artistic_skills' => fake()->sentence(6),
            'profile_media' => fake()->imageUrl(),
        ];
    }
}
