<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class IndikatorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'keterangan' => $this->faker->paragraph(),
            'status' => mt_rand(0, 1)
        ];
    }
}
