<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'username' => fake()->unique()->userName(),
            'slug' => fake()->unique()->slug(),
            'usia' => fake()->numberBetween(18, 65),
            'alamat' => fake()->address(),
            'no_telepon' => fake()->phoneNumber(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$' . Str::random(60),
            'role_pengguna' => fake()->randomElement(['1', '2', '3']), // 1 = Admin, 2 = Perusahaan, 3 = Pencari Kerja
            'status_akun' => fake()->boolean(),
            'foto' => fake()->imageUrl(400, 400, 'people', true, 'User'),
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return $this
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
