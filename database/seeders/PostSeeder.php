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
            'content' => '1 content',
            'author' => '1 author',
        ]);

        Post::create([
            'title' => '2 title',
            'content' => '2 content',
            'author' => '2 author',
        ]);

        Post::create([
            'title' => '3 title',
            'content' => '3 content',
            'author' => '3 author',
        ]);
    }
}
