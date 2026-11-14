<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categoties = [
            'technology',
            'sports',
            'politics',
            'entertainment',
            'business',
            'health',
            'science',
            'travel',
            'food',
            'fashion'
        ];

        foreach ($categoties as $category) {
            Category::factory()->create([
                'name' => $category,
            ]);
        }
    }
}
