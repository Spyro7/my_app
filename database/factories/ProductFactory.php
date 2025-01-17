<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{

    public function definition(): array
    {
        return [
            'category_id' => rand(1, 5),
            'name' => [
                'en' => $this->faker->name(),
                'uz' => $this->faker->name(),
                'ru' => $this->faker->name(),
            ],
            'price' => $this->faker->randomFloat(2, 1, 10000),
            'description' => [
                'en' => $this->faker->sentence(5),
                'uz' => $this->faker->sentence(5),
                'ru' => $this->faker->sentence(5),
            ],
        ];
    }
}
