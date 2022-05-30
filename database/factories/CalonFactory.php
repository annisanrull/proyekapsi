<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CalonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama'  => $this->faker->name(),
            'tgl_lahir' => $this->faker->dateTimeThisMonth(),
            'tempat_lahir'  => $this->faker->streetAddress(),
            'alamat'    => $this->faker->address(),
            'umur_sekarang' => $this->faker->randomNumber(2, true),
            'tipe_id' => 'RT' . $this->faker->randomNumber(1, true),
            'visi'  => $this->faker->paragraph(3),
            'misi'  => $this->faker->paragraph(3),
            'gambar'    => $this->faker->imageUrl(360, 360, 'animals', true, 'cats')
        ];
    }
}
