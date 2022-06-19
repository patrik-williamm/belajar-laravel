<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(mt_rand(2, 6)),
            'categories_id' => mt_rand(1, 4),
            'user_id' => mt_rand(1,4),
            'slug' => $this->faker->slug(),
            'author' => $this->faker->name(),
            'excrept' => $this->faker->sentence(mt_rand(5, 8)),
            'body' => $this->faker->paragraph(mt_rand(20, 70)),
        ];
    }
}
