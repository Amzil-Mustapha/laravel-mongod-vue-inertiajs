<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        \App\Models\User::factory(100)->create();
        \App\Models\Post::factory(100)->create();
        \App\Models\Article::factory(1000)->create();
        \App\Models\Categorie::factory(5)->create();
        \App\Models\Article_categorie::factory(3000)->create();
    }
}