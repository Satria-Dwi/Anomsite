<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Marketplace>
 */
class MarketplaceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'product' => $this->faker->words(3, true), // contoh: "Wireless Bluetooth Headset"
            'price' => $this->faker->numberBetween(10, 100), // harga acak
            'rate' => $this->faker->randomFloat(1, 1, 5), // rating antara 1.0 - 5.0
            'excerpt' => $this->faker->sentence(), // ringkasan singkat
            'detil' => $this->faker->paragraph(5), // deskripsi panjang
            'image' => $this->faker->imageUrl(640, 480, 'products', true), // URL gambar
            'published_at' => $this->faker->dateTimeBetween('-1 years', 'now'),
        ];
    }
}
