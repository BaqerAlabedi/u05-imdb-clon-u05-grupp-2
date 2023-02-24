<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Show>
 */
class ShowFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->name(),
            'genre' => fake()->unique()->safeEmail(),
            'director' => fake()->name(),
            'maincast' => fake()->name(), 
            'seasons' => fake()->randomDigit(), 
            'episodes' => fake()->randomDigit(), 
            'imgurl' => fake()->name() ,
        ];
    }
}
