<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nik' => $this->faker->randomNumber(9, true),
            'nama' => $this->faker->name(),
            'tgl_lahir' => $this->faker->unique()->dateTimeThisMonth(),
            'tmpt_lahir' => $this->faker->address(),
            'alamat' => $this->faker->city(),
            'umur' => Str::random(2),
            'rt' => Str::random(1),
            'rw' => Str::random(2),
            'desa' => $this->faker->state(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
