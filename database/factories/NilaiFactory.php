<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class NilaiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'kecamatan_id' => mt_rand(1, 6),
            'user_id' => mt_rand(1, 3),
            'k1' => $this->faker->randomNumber(2, true),
            'k2' => $this->faker->randomNumber(2, true),
            'k3' => $this->faker->randomNumber(2, true),
            'k4' => $this->faker->randomNumber(2, true),
            'k5' => $this->faker->randomNumber(2, true),
            'k6' => $this->faker->randomNumber(2, true),
            'k7' => $this->faker->randomNumber(2, true),
            'k8' => $this->faker->randomNumber(2, true),
            'k9' => $this->faker->randomNumber(2, true),
            'k10' => $this->faker->randomNumber(2, true),
            'k11' => $this->faker->randomNumber(2, true),
            'k12' => $this->faker->randomNumber(2, true),
            'k13' => $this->faker->randomNumber(2, true),
            'k14' => $this->faker->randomNumber(2, true),
            'k15' => $this->faker->randomNumber(2, true),
            'k16' => $this->faker->randomNumber(2, true),
            'k17' => $this->faker->randomNumber(2, true),
            'k18' => $this->faker->randomNumber(2, true),
            'k19' => $this->faker->randomNumber(2, true),
            'k20' => $this->faker->randomNumber(2, true),
            'k21' => $this->faker->randomNumber(2, true),
            'k22' => $this->faker->randomNumber(2, true),
            'k23' => $this->faker->randomNumber(2, true),

        ];
    }
}
