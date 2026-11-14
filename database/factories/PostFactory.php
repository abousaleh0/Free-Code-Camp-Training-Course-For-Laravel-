<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = $this->faker->sentence();
        return [
            'image' => fake()->imageUrl(),
            'title' => $title,
            'slug' => \Illuminate\Support\Str::slug($title),
            'content' => $this->faker->paragraph(5),
            'published_at' => fake()->dateTimeBetween('-1 year', 'now'),
            'category_id' => Category::inRandomOrder()->first()->id,
            'user_id' => 1,

        ];
    }
}
