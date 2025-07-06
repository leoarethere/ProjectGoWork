<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(mt_rand(3, 8)),
            'slug' => $this->faker->unique()->slug(),
            'excerpt' => $this->faker->paragraph(mt_rand(2, 4)),
            'body' => collect($this->faker->paragraphs(mt_rand(5, 10)))
                        ->map(fn($p) => "<p>$p</p>")
                        ->implode(''),
            'user_id' => User::inRandomOrder()->first()->id,
            'category_id' => Category::inRandomOrder()->first()->id,
            'published_at' => now(),
        ];
    }
}