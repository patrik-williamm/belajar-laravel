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
            'author' => $this->faker->name(),
            'slug' => $this->faker->slug(),
            'excrept' => $this->faker->paragraph(mt_rand(2, 4)),
            'body' => $this->faker->paragraph(mt_rand(10, 20)),
        ];
    }
}
