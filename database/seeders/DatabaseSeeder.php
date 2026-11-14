<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. إنشاء مستخدم أولاً (سيحصل تلقائياً على id = 1)
        User::factory()->create([
            'name'  => 'Test User',
            'email' => 'test@example.com',
        ]);

        // 2. استدعاء باقي الـ Seeders بالترتيب الصحيح
        $this->call([
            CategorySeeder::class,
            PostSeeder::class,
        ]);
    }
}
