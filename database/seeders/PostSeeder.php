<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::create([

            'title' => '1 title',
            'description' => '1 description',
            'author' => '1 author',
            'date' => now(),
        ]);

        Post::create([
            'title' => '2 title',
            'description' => '2 description',
            'author' => '2 author',
            'date' => now(),
        ]);

        Post::create([
            'title' => '3 title',
            'description' => '3 description',
            'author' => '3 author',
            'date' => now(),
        ]);
    }
}
