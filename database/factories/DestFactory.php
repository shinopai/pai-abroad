<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $image = 'study-abroad.png';

        return [
            'title' => $this->faker->jobTitle(),
            'description' => $this->faker->text(200),
            'price' => rand(100, 2500),
            'image' => $image,
            'user_id' => rand(1, 21),
            'area_id' => rand(1, 6),
            'study_id' => rand(1, 6)
        ];
    }
}
