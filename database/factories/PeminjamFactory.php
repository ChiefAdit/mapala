<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Peminjam;
use Faker\Generator as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Peminjam>
 */
class PeminjamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->name,
            'alamat' => $this->faker->address,
            'no_telp' => $this->faker->phoneNumber,
            'barang' => $this->faker->word,
            'jumlah' => $this->faker->randomNumber(2),
            'tanggal_pinjam' => $this->faker->date(),
            'tanggal_kembali' => $this->faker->date(),
            'status' => $this->faker->word,
            'keterangan' => $this->faker->sentence,
        ];
    }
}

